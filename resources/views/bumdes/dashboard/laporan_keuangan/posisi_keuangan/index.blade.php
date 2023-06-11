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
                                        <td><b>1100</b></td>
                                        <td><b>ASET LANCAR</b></td>
                                        <td></td>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>1101</td>
                                        <td>Kas</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['kas'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['kas'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1102</td>
                                        <td>Kas di Bank A</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['kas_di_bank_a'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['kas_di_bank_a'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1103</td>
                                        <td>Kas di Bank B</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['kas_di_bank_b'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['kas_di_bank_b'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1104</td>
                                        <td>Kas di Bank C</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['kas_di_bank_c'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['kas_di_bank_c'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1105</td>
                                        <td>Kas Kecil</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['kas_kecil'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['kas_kecil'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1106</td>
                                        <td>Giro</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['giro'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['giro'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1107</td>
                                        <td>Deposito</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['deposito'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['deposito'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1108</td>
                                        <td>Piutang Usaha</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['piutang_usaha'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['piutang_usaha'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1109</td>
                                        <td>Persediaan Barang Dagang</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['persediaan_barang_dagang'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['persediaan_barang_dagang'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1110</td>
                                        <td>Persediaan Makan dan Minuman</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['persediaan_makan_dan_minuman'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['persediaan_makan_dan_minuman'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1111</td>
                                        <td>Perlengkapan</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['perlengkapan'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['perlengkapan'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1112</td>
                                        <td>Sewa Dibayar Dimuka</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['sewa_dibayar_dimuka'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['sewa_dibayar_dimuka'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1113</td>
                                        <td>Asuransi Dibayar Dimuka</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['asuransi_dibayar_dimuka'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['asuransi_dibayar_dimuka'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1114</td>
                                        <td>PPh 25</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['pph25'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['pph25'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1115</td>
                                        <td>Piutang Desa</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['piutang_desa'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['piutang_desa'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1199</td>
                                        <td>Aset Lancar lainnya</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['asset_lancar_lainnya'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['asset_lancar_lainnya'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td><b>1200</b></td>
                                        <td><b>INVESTASI</b></td>
                                        <td></td> <!-- catatan -->
                                        <td>{{formatRupiah($saldo['kas'] +
                                            $saldo['kas_di_bank_a'] +
                                            $saldo['kas_di_bank_b'] +
                                            $saldo['kas_di_bank_c'] +
                                            $saldo['kas_kecil'] +
                                            $saldo['giro'] +
                                            $saldo['deposito'] +
                                            $saldo['piutang_usaha'] +
                                            $saldo['persediaan_barang_dagang'] +
                                            $saldo['persediaan_makan_dan_minuman'] +
                                            $saldo['perlengkapan'] +
                                            $saldo['sewa_dibayar_dimuka'] +
                                            $saldo['asuransi_dibayar_dimuka'] +
                                            $saldo['pph25'] +
                                            $saldo['piutang_desa'] +
                                            $saldo['asset_lancar_lainnya'])}}</td> <!-- 2022 -->
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td><b>1300</b></td>
                                        <td><b>ASET TETAP</b></td>
                                        <td></td> <!-- catatan -->
                                        <td></td> <!-- 2022 -->
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1301</td>
                                        <td>Tanah</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['tanah'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['tanah'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1302</td>
                                        <td>Gedung dan Bangunan</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['gedung_dan_bangunan'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['gedung_dan_bangunan'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1303</td>
                                        <td>Akumulasi Penyusutan Gedung dan Bangunan</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['akumulasi_penyusutan_gedung_dan_bangunan'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['akumulasi_penyusutan_gedung_dan_bangunan'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1304</td>
                                        <td>Peralatan dan Meubeliar</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['peralatan_dan_meubeliar'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['peralatan_dan_meubeliar'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1305</td>
                                        <td>Akumulasi Penyusutan Peralatan dan Meubeliar</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['akumulasi_penyusutan_peralatan_dan_meubeliar'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['akumulasi_penyusutan_peralatan_dan_meubeliar'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1306</td>
                                        <td>Kendaraan</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['kendaraan'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['kendaraan'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1307</td>
                                        <td>Akumulasi Penyusutan Kendaraan</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['akumulasi_penyusutan_kendaraan'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['akumulasi_penyusutan_kendaraan'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td>1399</td>
                                        <td>Aset Tetap Lainnya</td>
                                        <td></td> <!-- catatan -->
                                        @if ($saldo['aset_tetap_lainnya'] > 0) <!-- 2022 -->
                                            <td>{{formatRupiah($saldo['aset_tetap_lainnya'])}}</td> 
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>-</td> <!-- 2021 -->
                                    </tr>
                                    <tr>
                                        <td><b>-</b></td>
                                        <td><b>JUMLAH ASET</b></td>
                                        <td></td> <!-- catatan -->
                                        <td><b>{{formatRupiah($saldo['kas'] +
                                            $saldo['kas_di_bank_a'] +
                                            $saldo['kas_di_bank_b'] +
                                            $saldo['kas_di_bank_c'] +
                                            $saldo['kas_kecil'] +
                                            $saldo['giro'] +
                                            $saldo['deposito'] +
                                            $saldo['piutang_usaha'] +
                                            $saldo['persediaan_barang_dagang'] +
                                            $saldo['persediaan_makan_dan_minuman'] +
                                            $saldo['perlengkapan'] +
                                            $saldo['sewa_dibayar_dimuka'] +
                                            $saldo['asuransi_dibayar_dimuka'] +
                                            $saldo['pph25'] +
                                            $saldo['piutang_desa'] +
                                            $saldo['asset_lancar_lainnya'] +
                                            $saldo['tanah'] +
                                            $saldo['gedung_dan_bangunan'] +
                                            $saldo['akumulasi_penyusutan_gedung_dan_bangunan'] +
                                            $saldo['peralatan_dan_meubeliar'] +
                                            $saldo['akumulasi_penyusutan_peralatan_dan_meubeliar'] +
                                            $saldo['kendaraan'] +
                                            $saldo['akumulasi_penyusutan_kendaraan'] +
                                            $saldo['aset_tetap_lainnya'])}}</b></td> <!-- 2022 -->
                                        <td>-</td> <!-- 2021 -->
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