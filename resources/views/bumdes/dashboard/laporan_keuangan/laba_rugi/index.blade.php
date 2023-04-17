@extends('bumdes.dashboard.layouts.main')

@section('content')
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="border: solid;margin-top:3rem;padding-bottom:20rem;padding-top:6rem;background-color:white" class="px-5">

        @include('bumdes.dashboard.layouts.form')
        <h1 style="margin-top: -50px">LAPORAN KEUANGAN - LABA RUGI</h1>
        <div class="table-responsive">
            <table class="table table-striped table-borderless">
                <thead class="text-white text-center" style="background-color: #3C4B64">
                    <tr>
                        <th scope="col" colspan="5">Entitas Jasa / Dagang</th>
                    </tr>
                    <tr>
                        <th scope="col" colspan="5">Laporan Laba Rugi</th>
                    </tr>
                    <tr>
                        <th scope="col" colspan="5">31 Desember 20xx dan 20xx</th>
                    </tr>
                    <tr>
                        <th scope="col">Kode Rekening</th>
                        <th scope="col">Nama Akun</th>
                        <th scope="col">Catatan</th>
                        <th scope="col">20xx</th>
                        <th scope="col">20xx</th>
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