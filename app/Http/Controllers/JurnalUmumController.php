<?php

namespace App\Http\Controllers;

use App\Models\BukuBesar;
use App\Models\DataJurnalUmum;
use App\Models\NamaAkun;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\JurnalUmum;
class JurnalUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bumdes.dashboard.jurnal_umum.index',[
            'jurnals' => auth()->user()->company->jurnalumums,
            'nama_akuns' => NamaAkun::all(),
            
        ]);
    }
    public function createNew(Request $request)
    {
        $jurnal_umum = new JurnalUmum;
        $jurnal_umum->tanggal = Carbon::parse($request->tanggal);
        $jurnal_umum->bukti_pembayaran = $request->bukti_pembayaran;
        $jurnal_umum->jenis_transaksi = $request->jenis_transaksi;
        $jurnal_umum->company_id = auth()->user()->company->id;
        $jurnal_umum->save();
        session(['jurnal_umum_id' => $jurnal_umum->id]);
        return redirect('/jurnal_umum/create');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.dashboard.jurnal_umum.create',[
            'title' => 'Tambah Data',
            'method' => 'POST',
            'action' => 'jurnal_umum',
            'nama_akuns' => NamaAkun::all(),
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $akuns = NamaAkun::all();
        $data = new DataJurnalUmum;
        $data->nama_akun = $request->nama_akun;
        
        foreach ($akuns as $akun){
            if($data->nama_akun == $akun->nama){
                $data->noref = $akun->kode_rekening;
            }
        }
        
        $data->debit = $request->debit;
        $data->kredit = $request->kredit;
        $data->jurnal_umum_id = session('jurnal_umum_id');

        // $bukus = BukuBesar::all();
        // foreach ($bukus as $buku) {
        //     if ($buku->nama == $data->nama_akun ) {
        //         $buku->$data->nama_akun->saldo =  ;
        //     }
        // }
        
        // $buku = ;
        // $data->jurnal_umum_id = '3';
        

        $data->save();
        $buku = auth()->user()->company->bukubesars;
        if($request->nama_akun == 'Kas')
        {
            $buku->saldo_kas = $buku->saldo_kas + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Kas di Bank A')
        {
            $buku->saldo_kas_di_bank_a = $buku->saldo_kas_di_bank_a + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Kas di Bank B')
        {
            $buku->saldo_kas_di_bank_b = $buku->saldo_kas_di_bank_b + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Kas di Bank C')
        {
            $buku->saldo_kas_di_bank_c = $buku->saldo_kas_di_bank_c + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Kas Kecil')
        {
            $buku->saldo_kas_kecil = $buku->saldo_kas_kecil + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Giro')
        {
            $buku->saldo_giro = $buku->saldo_giro + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Deposito')
        {
            $buku->saldo_deposito = $buku->saldo_deposito + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Piutang Usaha')
        {
            $buku->saldo_piutang_usaha = $buku->saldo_piutang_usaha + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Persediaan Barang Dagangan')
        {
            $buku->saldo_persediaan_barang_dagang = $buku->saldo_persediaan_barang_dagang + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Persediaan Makan dan Minuman')
        {
            $buku->saldo_persediaan_makan_dan_minuman = $buku->saldo_persediaan_makan_dan_minuman + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Perlengkapan')
        {
            $buku->saldo_perlengkapan = $buku->saldo_perlengkapan + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Sewa Dibayar Dimuka')
        {
            $buku->saldo_sewa_dibayar_dimuka = $buku->saldo_sewa_dibayar_dimuka + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Asuransi Dibayar Dimuka')
        {
            $buku->saldo_asuransi_dibayar_dimuka = $buku->saldo_asuransi_dibayar_dimuka + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'PPh 25')
        {
            $buku->saldo_pph25 = $buku->saldo_pph25 + $request->debit - $request->kredit;
        }
        else if($request->nama_akun == 'Piutang Desa')
        {
            $buku->saldo_piutang_desa = $buku->saldo_piutang_desa + $request->debit - $request->kredit;
        }
        $buku->save();

        

        return redirect('/jurnal_umum/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('bumdes.dashboard.jurnal_umum.update',[
            'title' => 'Edit Data',
            'method' => 'PUT',
            'action' => 'jurnal_umum/'.$id,
            'nama_akuns' => NamaAkun::all(),
            'data' => DataJurnalUmum::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $akuns = NamaAkun::all();
        $data = DataJurnalUmum::find($id);
        $data->nama_akun = $request->nama_akun;
        foreach ($akuns as $akun){
            if($data->nama_akun == $akun->nama){
                $data->noref = $akun->kode_rekening;
            }
        }
        
        $data->debit = $request->debit;
        $data->kredit = $request->kredit;
        // $data->jurnal_umum_id = '3';
        $data->save();
        return redirect('/jurnal_umum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurnal = JurnalUmum::find($id);
        foreach($jurnal->datas as $data)
        {
            $data->delete();
        }
        $jurnal->delete();
        return redirect('/jurnal_umum')->with('msg', 'sukses');
    }
}
