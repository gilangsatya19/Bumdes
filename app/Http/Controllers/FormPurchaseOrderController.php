<?php

namespace App\Http\Controllers;

use App\Models\FormPurchaseOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FormPurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bumdes.dashboard.invoice.form_purchase_order.index',[
            'datas' => auth()->user()->company->formpurchaseorder,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.dashboard.invoice.form_purchase_order.editcreate',[
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'form_purchase_order/create',
            
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
        $data = new FormPurchaseOrder;
        $data->tanggal = Carbon::parse($request->tanggal);
        $data->no_po = $request->no_po;
        $data->barang = $request->barang;
        $data->jumlah_barang = $request->jumlah_barang;
        $data->vendor = $request->vendor;
        $data->tanggal_pengiriman = Carbon::parse($request->tanggal_pengiriman);
        $data->bukti_transaksi = $request->bukti_transaksi;
        $data->company_id = auth()->user()->company->id;
        $data->save();
        return redirect('/form_purchase_order');
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
        return view('bumdes.dashboard.invoice.form_purchase_order.editcreate', [
            'title' => 'Ubah ',
            'method' => 'PUT',
            'action' => 'form_purchase_order/'.$id.'/update',
            'data' => FormPurchaseOrder::find($id),
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
        $data = FormPurchaseOrder::find($id);
        $data->tanggal = Carbon::parse($request->tanggal);
        $data->no_po = $request->no_po;
        $data->barang = $request->barang;
        $data->jumlah_barang = $request->jumlah_barang;
        $data->vendor = $request->vendor;
        $data->tanggal_pengiriman = Carbon::parse($request->tanggal_pengiriman);
        $data->bukti_transaksi = $request->bukti_transaksi;
        $data->save();
        return redirect('/form_purchase_order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = FormPurchaseOrder::find($id);
        $data->delete();
        return redirect('/form_purchase_order')->with('msg', 'sukses');
    }
}
