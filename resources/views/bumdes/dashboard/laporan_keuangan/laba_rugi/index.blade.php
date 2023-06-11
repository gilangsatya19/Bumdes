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
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['pendapatan_tiket_masuk_perseorangan'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['pendapatan_tiket_masuk_perseorangan'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>4102</td>
                                        <td>Pendapatan Tiket Masuk Rombongan</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['pendapatan_tiket_masuk_rombongan'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['pendapatan_tiket_masuk_rombongan'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>4199</td>
                                        <td>Pendapatan Tiket Lainnya</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['pendapatan_tiket_lainnya'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['pendapatan_tiket_lainnya'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
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
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['pendapatan_komisi'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['pendapatan_komisi'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>4302</td>
                                        <td>Pendapatan Parkir</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['pendapatan_parkir'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['pendapatan_parkir'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>4303</td>
                                        <td>Pendapatan Toilet</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['pendapatan_toilet'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['pendapatan_toilet'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>4304</td>
                                        <td>Pendapatan Sewa</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['pendapatan_sewa'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['pendapatan_sewa'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>4305</td>
                                        <td>Pendapatan Jasa</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['pendapatan_jasa'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['pendapatan_jasa'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>4399</td>
                                        <td>Pendapatan Rupa-Rupa Lainnya</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['pendapatan_rupa_rupa_lainnya'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['pendapatan_rupa_rupa_lainnya'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
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
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['pendapatan_bunga'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['pendapatan_bunga'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>7102</td>
                                        <td>Pendapatan dari Desa</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['pendapatan_dari_desa'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['pendapatan_dari_desa'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>7103</td>
                                        <td>Pendapatan Bantuan/Sumbangan/Hibah</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['pendapatan_bantuan'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['pendapatan_bantuan'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>7199</td>
                                        <td>Pendapatan Lain-lain</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['pendapatan_lain_lain'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['pendapatan_lain_lain'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td><b>-<b></td>
                                        <td><b>JUMLAH PENDAPATAN<b></td>
                                        <td></td>
                                        <td><b>{{formatRupiah($saldo['pendapatan_tiket_masuk_perseorangan'] +
                                            $saldo['pendapatan_tiket_masuk_rombongan'] +
                                            $saldo['pendapatan_tiket_lainnya'] +
                                            $saldo['pendapatan_komisi'] +
                                            $saldo['pendapatan_parkir'] +
                                            $saldo['pendapatan_toilet'] +
                                            $saldo['pendapatan_sewa'] +
                                            $saldo['pendapatan_jasa'] +
                                            $saldo['pendapatan_rupa_rupa_lainnya'] +
                                            $saldo['pendapatan_bunga'] +
                                            $saldo['pendapatan_dari_desa'] +
                                            $saldo['pendapatan_bantuan'] +
                                            $saldo['pendapatan_lain_lain'])}}</b></td>
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