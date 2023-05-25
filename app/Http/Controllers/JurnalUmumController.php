<?php

namespace App\Http\Controllers;

use App\Models\DataJurnalUmum;
use App\Models\NamaAkun;
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
            'jurnals' => JurnalUmum::all(),
            'nama_akuns' => NamaAkun::all(),
            
        ]);
    }
    public function createNew(Request $request)
    {
        $jurnal_umum = new JurnalUmum;
        $jurnal_umum->tanggal = $request->tanggal;
        $jurnal_umum->bukti_pembayaran = $request->bukti_pembayaran;
        $jurnal_umum->user_id = auth()->user()->id;
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
        // $data->jurnal_umum_id = '3';
        $data->save();
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
