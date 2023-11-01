<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurnalPenyesuaianController extends Controller
{
    //
    public function index() {
        return view('bumdes.dashboard.jurnal_penyesuaian.index');
    }

    public function create() {
        return view('bumdes.dashboard.jurnal_penyesuaian.create', [
            'title' => 'Tambah Data',
            'nama_akuns' => auth()->user()->company->namaakun,
        ]);
    }

}
