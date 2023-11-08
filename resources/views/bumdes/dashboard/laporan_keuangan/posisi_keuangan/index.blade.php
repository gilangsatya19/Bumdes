@extends('bumdes.dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Laporan Keuangan - Posisi Keuangan</h3>
                            </div>

                            <form action="{{ route('laporan_keuangan.posisi_keuangan') }}" method="POST"
                                  class="d-inline-flex justify-content-end p-3">
                                @csrf
                                <button class="btn btn-primary" type="submit">Download
                                    Laporan Posisi Keuangan (PDF)
                                </button>
                            </form>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-borderless table-striped">
                                    <thead class="text-center" style="background-color:#3C4B64; color:white">
                                    <tr>
                                        <th scope="col" colspan="5">Entitas Jasa</th>
                                    </tr>
                                    <tr>
                                        <th scope="col" colspan="5">Laporan Posisi Keuangan</th>
                                    </tr>
                                    <tr>
                                        <th scope="col" colspan="5">31 Desember 2023 dan 2022</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Kode Rekening</th>
                                        <th scope="col">Nama Akun</th>
                                        <th scope="col">Catatan</th>
                                        <th scope="col">2023</th>
                                        <th scope="col">2022</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($nama_akuns as $akun )
                                        <p hidden>{{$i+=1}}</p>
                                        @if($i >=1 && $i <= 56)
                                            @if($akun->detailakun->d_k != '' && $i == 52)
                                                <tr>
                                                    <td>{{$akun->detailakun->kode_rekening}}</td>
                                                    <td>Cadangan</td></td>
                                                    <td></td> <!-- catatan -->

                                                    <td>{{formatRupiah($total_cadangan)}}</td>

                                                    <td>-</td> <!-- 2022 -->
                                                </tr>

                                            @elseif($akun->detailakun->d_k != '')
                                                <tr>
                                                    <td>{{$akun->detailakun->kode_rekening}}</td>
                                                    <td>{{$akun->nama}}</td>
                                                    <td></td> <!-- catatan -->
                                                    @if ($akun->detailakun->saldo != 0 || $akun->detailakun->penyesuaian != 0)
                                                        <!-- 2023 -->
                                                        <td>{{formatRupiah($akun->detailakun->saldo - ($akun->detailakun->penyesuaian * -1))}}</td>
                                                    @else
                                                        <td>-</td>
                                                    @endif
                                                    <td>-</td> <!-- 2022 -->
                                                </tr>
                                            @else
                                                <tr>
                                                    <td><b>{{$akun->detailakun->kode_rekening}}</b></td>
                                                    <td><b>{{$akun->nama}}</b></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>-</td>
                                                </tr>
                                            @endif
                                        @endif
                                    @endforeach

                                    <tr>
                                        <td><b>-</b></td>
                                        <td><b>JUMLAH ASET</b></td>
                                        <td></td> <!-- catatan -->
                                        <td><b>{{formatRupiah($total_aset)}}</b></td> <!-- 2023 -->
                                        <td>-</td> <!-- 2022 -->
                                    </tr>
                                    <tr>
                                        <td><b>-</b></td>
                                        <td><b>JUMLAH KEWAJIBAN DAN EKUITAS</b></td>
                                        <td></td> <!-- catatan -->
                                        <td>
                                            <b>{{formatRupiah($total_kewajiban_ekuitas + ($total_cadangan))}}</b>
                                        </td> <!-- 2023 -->
                                        <td>-</td> <!-- 2022 -->
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>

@endsection
