@extends('bumdes.dashboard.layouts.main')

@section('content')
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="border: solid;margin-top:3rem;padding-bottom:20rem;padding-top:6rem;background-color:white" class="px-5">

        @include('bumdes.dashboard.layouts.form')
        <h1 style="margin-top: -50px">WTB</h1>
        <div class="table-responsive">
            <table class="table table-striped table-borderless" style="">
                <thead class="text-white text-center" style="background-color: #3C4B64" >
                    <tr class="align-middle" >
                        <th scope="col" rowspan="2">No.</th>
                        <th scope="col" rowspan="2">Nama Akun</th>
                        <th scope="col" colspan="2">Neraca Saldo</th>
                        <th scope="col" colspan="2">Penyesuaian</th>
                        <th scope="col" colspan="2">Neraca Setelahnya</th>
                        <th scope="col" colspan="2">Laba Rugi</th>
                        <th scope="col" colspan="2">Neraca</th>
                    </tr>
                    <tr class="align-top">
                        <th scope="col">Debit</th>
                        <th scope="col">Kredit</th>
                        <th scope="col">Debit</th>
                        <th scope="col">Kredit</th>
                        <th scope="col">Debit</th>
                        <th scope="col">Kredit</th>
                        <th scope="col">Debit</th>
                        <th scope="col">Kredit</th>
                        <th scope="col">Debit</th>
                        <th scope="col">Kredit</th>
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