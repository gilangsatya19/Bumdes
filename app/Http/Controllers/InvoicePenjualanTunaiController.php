<?php

namespace App\Http\Controllers;

use App\Models\InvoicePenjualanTunai;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InvoicePenjualanTunaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bumdes.dashboard.invoice.invoice_penjualan_tunai.index',[
            'datas' => auth()->user()->company->invoicepenjualantunai,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.dashboard.invoice.invoice_penjualan_tunai.editcreate',[
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'invoice_penjualan_tunai/create',
            
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
        $data = new InvoicePenjualanTunai;
        $data->tanggal = Carbon::parse($request->tanggal);
        $data->no_invoice = $request->no_invoice;
        $data->nama = $request->nama;
        $data->telp = $request->telp;
        $data->barang = $request->barang;
        $data->jumlah_barang = $request->jumlah_barang;
        $data->bukti_transaksi = $request->bukti_transaksi;
        $data->company_id = auth()->user()->company->id;
        $data->save();
        return redirect('/invoice_penjualan_tunai');
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
        return view('bumdes.dashboard.invoice.invoice_penjualan_tunai.editcreate', [
            'title' => 'Ubah ',
            'method' => 'PUT',
            'action' => 'invoice_penjualan_tunai/'.$id.'/update',
            'data' => InvoicePenjualanTunai::find($id),
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
        $data = InvoicePenjualanTunai::find($id);
        $data->tanggal = Carbon::parse($request->tanggal);
        $data->no_invoice = $request->no_invoice;
        $data->nama = $request->nama;
        $data->telp = $request->telp;
        $data->barang = $request->barang;
        $data->jumlah_barang = $request->jumlah_barang;
        $data->bukti_transaksi = $request->bukti_transaksi;
        $data->save();
        return redirect('/invoice_penjualan_tunai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = InvoicePenjualanTunai::find($id);
        $data->delete();
        return redirect('/invoice_penjualan_tunai')->with('msg', 'sukses');
    }
}
