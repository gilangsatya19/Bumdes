<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\BukuBesar;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.dashboard_admin.create_company.index',[
            'title' => 'Tambah ',
            'method' => 'POST',
            'action' => 'create_company/create',
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
        $data = new Company;
        $data->nama = $request->nama;
        $data->save();

        $buku = new BukuBesar;
        $buku->saldo_kas = '0';
        $buku->saldo_kas_di_bank_a = '0';
        $buku->saldo_kas_di_bank_b = '0';
        $buku->saldo_kas_di_bank_c = '0';
        $buku->saldo_kas_kecil = '0';
        $buku->saldo_giro = '0';
        $buku->saldo_deposito = '0';
        $buku->saldo_piutang_usaha = '0';
        $buku->saldo_persediaan_barang_dagang = '0';
        $buku->saldo_persediaan_makan_dan_minuman = '0';
        $buku->saldo_perlengkapan = '0';
        $buku->saldo_sewa_dibayar_dimuka = '0';
        $buku->saldo_asuransi_dibayar_dimuka = '0';
        $buku->saldo_pph25 = '0';
        $buku->saldo_piutang_desa = '0';
        $buku->company_id = $data->id;
        $buku->save();
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
        return view('bumdes.dashboard_admin.create_company.index',[
            'title' => 'Ubah ',
            'method' => 'POST',
            'action' => 'create_company/'.$id.'/update',
            'data' => Company::find($id),
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
        $data = Company::find($id);
        $data->nama = $request->nama;
        
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
        //
    }
}
