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
                            <h3 class="card-title">Laporan Keuangan - Laba Rugi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="d-flex mb-3" >
                                <div class="ms-auto">
                                    <div>
                                        @include('bumdes.dashboard.jurnal_umum.form')
                                    </div>
                                </div>
                            </div>
                            <table id="example1" class="table table-borderless table-striped">
                                <thead class="text-center" style="background-color:#3C4B64; color:white">
                                    <tr>
                                        <th scope="col" colspan="5">Entitas Jasa</th>
                                    </tr>
                                    <tr>
                                        <th scope="col" colspan="5">Laporan Laba Rugi</th>
                                    </tr>
                                    <tr>
                                        <th scope="col" colspan="5">31 Desember 2022 dan 2021</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Kode Rekening</th>
                                        <th scope="col">Nama Akun</th>
                                        <th scope="col">Catatan</th>
                                        <th scope="col">2022</th>
                                        <th scope="col">2021</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                {{-- 
                                    foreach datas as data
                                        <tr>
                                            <td>data->id</td>
                                            <td>data->tanggal</td>
                                            foreach items as item
                                            <td>item->nama_akun</td>
                                            <td>item->noref</td>
                                            if item->debit = 0
                                                <td>-</td>
                                                <td>item->kredit</td>
                                            else
                                                <td>item->debit</td>
                                                <td>-</td>
                                            endif
                                            <td>btn</td>
                                            <td>btn</td>
                                        </tr>
                                    endforeach
                                --}}
                                    <tr>
                                        <td><b>4100</b></td>
                                        <td><b>PENDAPATAN TIKET</b></td>
                                        <td></td>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>4101</td>
                                        <td>Pendapatan Tiket Masuk Perseorangan</td>
                                        <td></td>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>4102</td>
                                        <td>Pendapatan Tiket Masuk Rombongan</td>
                                        <td></td>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>4199</td>
                                        <td>Pendapatan Tiket Lainnya</td>
                                        <td></td>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td><b>4300</b></td>
                                        <td><b>PENDAPATAN RUPA RUPA</b></td>
                                        <td></td>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>4301</td>
                                        <td>Pendapatan Komisi</td>
                                        <td></td>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>4302</td>
                                        <td>Pendapatan Parkir</td>
                                        <td></td>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>4303</td>
                                        <td>Pendapatan Toilet</td>
                                        <td></td>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>4304</td>
                                        <td>Pendapatan Sewa</td>
                                        <td></td>
                                        <td>Rp351.200.000</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>4305</td>
                                        <td>Pendapatan Jasa</td>
                                        <td></td>
                                        <td>Rp350.000.000</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>4399</td>
                                        <td>Pendapatan Rupa-Rupa Lainnya</td>
                                        <td></td>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td><b>7100<b></td>
                                        <td><b>PENDAPATAN LAIN-LAIN<b></td>
                                        <td></td>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>7101</td>
                                        <td>Pendapatan Bunga</td>
                                        <td></td>
                                        <td>Rp50.000</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>7102</td>
                                        <td>Pendapatan dari Desa</td>
                                        <td></td>
                                        <td>Rp15.750.000</td>
                                        <td>-</td>
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