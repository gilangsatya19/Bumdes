@extends('bumdes.dashboard.layouts.main')

@section('content')
<link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="border: solid;margin-top:3rem;padding-bottom:20rem;padding-top:6rem;background-color:white" class="px-5">

        @include('bumdes.dashboard.layouts.form')
        <h1 style="margin-top: -50px">BUKU BESAR</h1>
        <div class="d-flex fs-5">
            <div class="me-5">

                <label for="nama_akun" ><b>Nama Akun</b></label>
                <select class="form-select mb-3 border-1 border-black" aria-label=".form-select example" name="nama_akun" style="max-width: 300px">
                    
                    <option value="kas_debit">Kas(D)</option>
                    <option value="kas_kredit">Kas(K)</option>
                    <option value="modal_awal">Modal Awal</option>
                    <option value="piutang_desa">Piutang Desa</option>
                    <option value="pendapatan_dari_desa">Pendapatan dari Desa</option>
                    <option value="peralatan_dan_meubeliar">Peralatan dan Meubeliar</option>
                    <option value="piutang_dagang">Piutang Dagang</option>
                    <option value="penjualan">Penjualan</option>
                    
                </select>
            </div>
            <div>

                <label for="no_akun"><b>No. Akun</b></label>
                <input type="no_akun" class="form-control border-1 border-black" id="no_akun" style="max-width: 300px">
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="text-white text-center" style="background-color: #3C4B64">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Debit</th>
                        <th scope="col">Kebit</th>
                        <th scope="col">Saldo</th>
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