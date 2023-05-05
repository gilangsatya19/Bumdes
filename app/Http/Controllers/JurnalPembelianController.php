<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPembelian;




class JurnalPembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bumdes.dashboard.jurnal_khusus.pembelian.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.dashboard.jurnal_khusus.pembelian.create',[
            'title' => 'Tambah Data',
            'method' => 'POST',
            'action' => 'pembelian',
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
        
        $data = new DataPembelian;
        $data->tanggal = $request->tanggal;
        $data->keterangan = $request->keterangan;
        $data->noref = $request->noref;
        $data->pembelian = $request->pembelian;
        
        if (!isset($request->akun)) {
            $data->akun = '-';
        } else {
            $data->akun = $request->akun;
        }
        if (!isset($request->jumlah)) {
            $data->jumlah = 0;
        } else {
            $data->jumlah = $request->jumlah;
        }
        $data->utang_dagang = $request->utang_dagang;
        $data->user_id = auth()->user()->id;
        $data->save();
        return redirect('/pembelian');
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
        //
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
        //
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
