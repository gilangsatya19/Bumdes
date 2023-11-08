<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use App\Models\JurnalUmum;
use App\Models\NamaAkun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_id = auth()->user()->company->id;
        $akuns_pendapatan = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', $company_id)
            ->whereBetween('detail_akun.kode_rekening', [4000, 4999])
            ->where(function ($query) {
                $query->where('saldo', '<>', 0)
                      ->orWhere('penyesuaian', '<>', 0);
            })
            ->get();
        $total_pendapatan = 0;
        foreach ($akuns_pendapatan as $akun) {
            $total_pendapatan += $akun->saldo + $akun->penyesuaian;
        }

        $akuns_pendapatan_lain = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', $company_id)
            ->whereBetween('detail_akun.kode_rekening', [7000, 7199])
            ->where(function ($query) {
                $query->where('saldo', '<>', 0)
                      ->orWhere('penyesuaian', '<>', 0);
            })
            ->get();
        $total_pendapatan_lain = 0;
        foreach ($akuns_pendapatan_lain as $akun) {
            $total_pendapatan_lain += $akun->saldo + $akun->penyesuaian;
        }

        $akuns_beban = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', $company_id)
            ->whereBetween('detail_akun.kode_rekening', [6000, 6999])
            ->where(function ($query) {
                $query->where('saldo', '<>', 0)
                      ->orWhere('penyesuaian', '<>', 0);
            })
            ->get();
        $total_beban = 0;
        foreach ($akuns_beban as $akun) {
            $total_beban += $akun->saldo + $akun->penyesuaian;
        }

        $akuns_beban_lain = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', $company_id)
            ->where('nama_akuns.nama', '!=', 'Beban Pajak')
            ->whereBetween('detail_akun.kode_rekening', [7200, 7299])
            ->where(function ($query) {
                $query->where('saldo', '<>', 0)
                      ->orWhere('penyesuaian', '<>', 0);
            })
            ->get();
        $total_beban_lain = 0;
        foreach ($akuns_beban_lain as $akun) {
            $total_beban_lain += $akun->saldo + $akun->penyesuaian;
        }

        $beban_pajak_terkini = NamaAkun::join('detail_akun', 'nama_akuns.id', '=', 'detail_akun.nama_akun_id')
            ->where('nama_akuns.company_id', '=', $company_id)
            ->whereBetween('detail_akun.kode_rekening', [7202, 7202])
            ->where(function ($query) {
                $query->where('saldo', '<>', 0)
                      ->orWhere('penyesuaian', '<>', 0);
            })
            ->get();
        $total_beban_terkini = 0;
        foreach ($beban_pajak_terkini as $akun) {
            $total_beban_terkini += $akun->saldo + $akun->penyesuaian;
        }

        
        $total = [
            'pendapatan' => $total_pendapatan,
            'pendapatan_lain' => $total_pendapatan_lain,
            'pemasukan' => $total_pendapatan + $total_pendapatan_lain,
            'beban' => $total_beban,
            'beban_lain' => $total_beban_lain,
            'beban_pajak_terkini' => $total_beban_terkini,
            'pengeluaran' => $total_beban + $total_beban_lain + $total_beban_terkini,
        ];

        $pendapatan_bersih_operasional = ($total['pendapatan'] - $total['beban']);
        $pendapatan_bersih = ($pendapatan_bersih_operasional) + ($total['pendapatan_lain'] - $total['beban_lain']);
        $pendapatan_setelah_pajak = $pendapatan_bersih - $total['beban_pajak_terkini'];
        return view('bumdes.dashboard.index',[
            'saldo_akhir' => auth()->user()->company->saldoakhir,
            'jurnals' => auth()->user()->company->jurnalumums,
            'pemasukan' => $total['pemasukan'],
            'pengeluaran' => $total['pengeluaran'],
            'laba_bersih' => $pendapatan_setelah_pajak,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.dashboard_admin.create_user.index',[
            'title' => 'Tambah ',
            'method' => 'POST',
            'action' => 'create_user/create',
            'companies' => Company::all(),
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
        $request->validate([
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8',
            'no_hp' => 'required|min:11',
        ]);
        $data = new User;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;
        $data->role = $request->role;
        $data->company_id = $request->company_id;
        $data->password = $request->password;
        $data->password = Hash::make($data->password);
        
        
        $data->save();
        return redirect('/dashboard_admin');
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
        return view('bumdes.dashboard_admin.create_user.index', [
            'title' => 'Ubah ',
            'method' => 'PUT',
            'action' => 'create_user/'.$id.'/update',
            'data' => User::find($id),
            'companies' => Company::all(),
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
        $data = User::find($id);
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;
        $data->role = $request->role;
        $data->company_id = $request->company_id;
        $data->password = $request->password;
        $data->password = Hash::make($data->password);
        
        
        $data->save();
        return redirect('/dashboard_admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/dashboard_admin')->with('msg', 'delete sukses');
    }
}
