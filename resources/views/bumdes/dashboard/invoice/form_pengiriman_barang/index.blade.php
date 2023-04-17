@extends('bumdes.dashboard.layouts.main')

@section('content')
    {{-- stye untuk table responsive dan btn ubah/unduh --}}
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="border: solid;margin-top:3rem;padding-bottom:20rem;padding-top:6rem;background-color:white" class="px-5">

        @include('bumdes.dashboard.layouts.form')
        <h1 style="margin-top: -50px">FORMULIR PENGIRIMAN BARANG</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="text-white text-center" style="background-color: #3C4B64">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama Penerima</th>
                        <th scope="col">Alamat Penerima</th>
                        <th scope="col">Telp Penerima</th>
                        <th scope="col">Nama Pengirim</th>
                        <th scope="col">Alamat Pengirim</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-center">
                    {{-- <tr>
                        <th scope="row" rowspan="">1</th>
                        <td>11/04/23</td>
                        <td>-</td>
                        <td>Kas</td>
                        <td>1101</td>
                        <td>5.000.000</td>
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>11/04/23</td>
                        <td>-</td>
                        <td>Modal Awal</td>
                        <td>3102</td>
                        <td>-</td>
                        <td>5.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>11/04/23</td>
                        <td>-</td>
                        <td>Kas</td>
                        <td>1101</td>
                        <td>5.000.000</td>
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>

    
@endsection