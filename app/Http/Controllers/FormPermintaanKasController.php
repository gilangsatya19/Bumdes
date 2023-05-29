<?php

namespace App\Http\Controllers;

use App\Models\FormPermintaanKas;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FormPermintaanKasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bumdes.dashboard.invoice.form_permintaan_kas.index',[
            'datas' => auth()->user()->company->formpermintaankas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.dashboard.invoice.form_permintaan_kas.editcreate',[
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'form_permintaan_kas/create',
            
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
        $data = new FormPermintaanKas;
        $data->tanggal = Carbon::parse($request->tanggal);
        $data->dana_untuk_departemen = $request->dana_untuk_departemen;
        $data->dana_awal = $request->dana_awal;
        $data->saldo = $request->saldo;
        $data->keterangan = $request->keterangan;
        $data->total = $request->total;
        $data->bukti_transaksi = $request->bukti_transaksi;
        $data->company_id = auth()->user()->company->id;
        $data->save();
        return redirect('/form_permintaan_kas');
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
        return view('bumdes.dashboard.invoice.form_permintaan_kas.editcreate', [
            'title' => 'Ubah ',
            'method' => 'PUT',
            'action' => 'form_permintaan_kas/'.$id.'/update',
            'data' => FormPermintaanKas::find($id),
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
        $data = FormPermintaanKas::find($id);
        $data->tanggal = Carbon::parse($request->tanggal);
        $data->dana_untuk_departemen = $request->dana_untuk_departemen;
        $data->dana_awal = $request->dana_awal;
        $data->saldo = $request->saldo;
        $data->keterangan = $request->keterangan;
        $data->total = $request->total;
        $data->bukti_transaksi = $request->bukti_transaksi;
        $data->save();
        return redirect('/form_permintaan_kas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = FormPermintaanKas::find($id);
        $data->delete();
        return redirect('/form_permintaan_kas')->with('msg', 'sukses');
    }
}
