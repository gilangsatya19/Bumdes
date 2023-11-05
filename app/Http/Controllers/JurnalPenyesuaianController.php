<?php

namespace App\Http\Controllers;

use App\Models\DataJurnalPenyesuaian;
use App\Models\DataJurnalUmum;
use App\Models\JurnalPenyesuaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JurnalPenyesuaianController extends Controller
{
    //
    public function index() {

        $jurnals = JurnalPenyesuaian::where('company_id', auth()->user()->company->id)
            ->orderBy('tanggal', 'desc')
            ->get();

        return view('bumdes.dashboard.jurnal_penyesuaian.index', [
            'jurnals' => $jurnals,
        ]);
    }

    public function create() {
        return view('bumdes.dashboard.jurnal_penyesuaian.create', [
            'title' => 'Tambah Data',
            'nama_akuns' => auth()->user()->company->namaakun,
        ]);
    }

    public function store(Request $request) {
        $data = $request->validate([
            'jenis_transaksi' => 'required|string',
            'tanggal' => 'required|date',
            'nama_akun' => 'required|array|min:2',
            'nama_akun.*' => 'required|string|distinct:ignore_case',
            'debit' => 'required|array|min:2',
            'debit.*' => 'required|numeric|min:0',
            'kredit' => 'required|array|min:2',
            'kredit.*' => 'required|numeric|min:0',
        ]);

        $akuns = auth()->user()->company->namaakun;
        $saldo_akhir = auth()->user()->company->saldoakhir;

        $debit = $data['debit'];
        $kredit = $data['kredit'];
        $datas = $data['nama_akun'];

        $company_id = auth()->user()->company->id;
        

        DB::transaction(function () use ($datas, $debit, $kredit, $akuns, $saldo_akhir, $company_id) {
            $jurnal_penyesuaian = JurnalPenyesuaian::create([
                'tanggal' => request('tanggal'),
                'company_id' => $company_id,
                'jenis_transaksi' => request('jenis_transaksi'),
            ]);
            $total = 0;

            foreach ($datas as $key => $value) {
                $data = new DataJurnalPenyesuaian();
                $data->nama_akun = $value;
                $data->debit = $debit[$key];
                $data->kredit = $kredit[$key];
                $total += $debit[$key] + $kredit[$key];

                foreach ($akuns as $akun){
                    if($data->nama_akun == $akun->nama){
                        $data->noref = $akun->detailakun->kode_rekening;
                        if($akun->detailakun->d_k == 'Debit'){
                            $saldo_akhir->penyesuaian += $debit[$key] - $kredit[$key];
                            $akun->detailakun->penyesuaian += $debit[$key] - $kredit[$key];
                        }else{
                            $saldo_akhir->penyesuaian += $kredit[$key] - $debit[$key];
                            $akun->detailakun->penyesuaian += $kredit[$key] - $debit[$key];
                        }
                        $saldo_akhir->save();
                        $akun->detailakun->save();
                    }
                }
                $data->jurnal_penyesuaian_id = $jurnal_penyesuaian->id;
                $data->save();
            }
            $saldo_akhir->penyesuaian -= ($total / 2);
            $saldo_akhir->save();
        });

        return redirect('/jurnal_penyesuaian');
    }

}
