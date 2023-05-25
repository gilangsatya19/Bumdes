<?php

namespace App\Http\Controllers;

use App\Models\DataPengeluaranKas;
use App\Models\PengeluaranKas;
use Illuminate\Http\Request;
use App\Models\NamaAkun;

class JurnalPengeluaranKasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bumdes.dashboard.jurnal_khusus.pengeluaran_kas.index',[
            'jurnals' => PengeluaranKas::all(),
        ]);
    }

    public function createNew(Request $request)
    {
        $data = new PengeluaranKas;
        $data->tanggal = $request->tanggal;
        $data->user_id = auth()->user()->id;
        $data->save();
        session(['pengeluaran_kas_id' => $data->id]);
        return redirect('/pengeluaran_kas/create');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.dashboard.jurnal_khusus.pengeluaran_kas.create',[
            'title' => 'Tambah Data',
            'method' => 'POST',
            'action' => 'pengeluaran_kas',
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
        $data = new DataPengeluaranKas;
        $data->nama_akun = $request->nama_akun;
        
        foreach ($akuns as $akun){
            if($data->nama_akun == $akun->nama){
                $data->noref = $akun->kode_rekening;
            }
        }
        
        $data->debit = $request->debit;
        $data->kredit = $request->kredit;
        $data->pengeluaran_kas_id = session('pengeluaran_kas_id');
        $data->save();
        return redirect('/pengeluaran_kas/create');
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
        return view('bumdes.dashboard.jurnal_khusus.pengeluaran_kas.update',[
            'title' => 'Edit Data',
            'method' => 'PUT',
            'action' => 'pengeluaran_kas/'.$id,
            'nama_akuns' => NamaAkun::all(),
            'data' => DataPengeluaranKas::find($id),
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
        $data = DataPengeluaranKas::find($id);
        $data->nama_akun = $request->nama_akun;
        
        foreach ($akuns as $akun){
            if($data->nama_akun == $akun->nama){
                $data->noref = $akun->kode_rekening;
            }
        }
        
        $data->debit = $request->debit;
        $data->kredit = $request->kredit;
        $data->save();
        return redirect('/pengeluaran_kas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurnal = PengeluaranKas::find($id);
        foreach($jurnal->datas as $data)
        {
            $data->delete();
        }
        $jurnal->delete();
        return redirect('/pengeluaran_kas')->with('msg', 'sukses');
    }
}
