@extends('bumdes.dashboard.layouts.main')

@section('content')
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >LAPORAN KEUANGAN - POSISI KEUANGAN</h1>
            <div class="ms-auto">
                @include('bumdes.dashboard.layouts.form')
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-borderless">
                <thead class="text-white text-center" style="background-color: #3C4B64">
                    <tr>
                        <th scope="col" colspan="5">Entitas Jasa / Dagang</th>
                    </tr>
                    <tr>
                        <th scope="col" colspan="5">Laporan Posisi Keuangan</th>
                    </tr>
                    <tr>
                        <th scope="col" colspan="5">31 DESEMBER 20XX DAN 20XX</th>
                    </tr>
                    <tr>
                        <th scope="col">Kode Rekening</th>
                        <th scope="col">Nama Akun</th>
                        <th scope="col">Catatan</th>
                        <th scope="col">Tahun 2022</th>
                        <th scope="col">Tahun 2021</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-center">
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
                            endforeach
                        </tr>
                        endforeach
                     --}}
                            <tr>
                                <th scope="row" rowspan=""><b>1000</b></th>
                                <td><b>Aset</b></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th scope="row" rowspan=""><b>1100</b></th>
                                <td><b>Aset Lancar</b></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>1101</td> <!-- Kode Rekening -->
                                <td>Kas</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>7.800.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1102</td> <!-- Kode Rekening -->
                                <td>Kas di Bank A</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>150.050.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1103</td> <!-- Kode Rekening -->
                                <td>Kas di Bank B</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1104</td> <!-- Kode Rekening -->
                                <td>Kas di Bank C</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1105</td> <!-- Kode Rekening -->
                                <td>Kas Kecil</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>1.750.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1106</td> <!-- Kode Rekening -->
                                <td>Giro</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1107</td> <!-- Kode Rekening -->
                                <td>Deposito</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1108</td> <!-- Kode Rekening -->
                                <td>Piutang Usaha</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1109</td> <!-- Kode Rekening -->
                                <td>Persediaan Barang Dagangan</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1110</td> <!-- Kode Rekening -->
                                <td>Persediaan Makan dan Minuman</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1111</td> <!-- Kode Rekening -->
                                <td>Perlengkapan</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>1.000.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1112</td> <!-- Kode Rekening -->
                                <td>Sewa Dibayar Dimuka</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1113</td> <!-- Kode Rekening -->
                                <td>Asurandi Dibayar Dimuka</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>50.000.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1114</td> <!-- Kode Rekening -->
                                <td>PPh 25</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1115</td> <!-- Kode Rekening -->
                                <td>Piutang Desa</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1119</td> <!-- Kode Rekening -->
                                <td>Aset Lancar Lainnya</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td><b>1200</b></td> <!-- Kode Rekening -->
                                <td><b>INVESTASI</b></td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>210.600.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td><b>1300</b></td> <!-- Kode Rekening -->
                                <td><b>ASET TETAP</b></td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1301</td> <!-- Kode Rekening -->
                                <td>Tanah</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>300.000.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1302</td> <!-- Kode Rekening -->
                                <td>Gedung dan Bangunan</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>250.000.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1303</td> <!-- Kode Rekening -->
                                <td>Akumulasi Penyusutan Gedung dan Bangunan</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-50.000.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1304</td> <!-- Kode Rekening -->
                                <td>Peralatan dan Meubeliar</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>4.200.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1305</td> <!-- Kode Rekening -->
                                <td>Akumulasi Penyusutan Peralatan dan Meubeliar</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-200.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1306</td> <!-- Kode Rekening -->
                                <td>Kendaraan</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>25.000.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1307</td> <!-- Kode Rekening -->
                                <td>Akumulasi Penyusutan Kendaraan</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-6.250.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>1399</td> <!-- Kode Rekening -->
                                <td>Aset Tetap Lainnya</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td></td> <!-- Kode Rekening -->
                                <td><b>JUMLAH ASET</b></td> <!-- Nama akun -->
                                <td></td> <!-- Catatan -->
                                <td><b>733.350.000</b></td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td><b>2000</b></td> <!-- Kode Rekening -->
                                <td><b>KEWAJIBAN</b></td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td><b>2100</b></td> <!-- Kode Rekening -->
                                <td><b>KEWAJIBAN JANGKA PENDEK</b></td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>2101</td> <!-- Kode Rekening -->
                                <td>Utang Usaha</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>150.000.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>2102</td> <!-- Kode Rekening -->
                                <td>PPn Keluaran</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>2103</td> <!-- Kode Rekening -->
                                <td>PPh 21</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>2104</td> <!-- Kode Rekening -->
                                <td>PPh 23</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>2105</td> <!-- Kode Rekening -->
                                <td>PPh 29</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>2106</td> <!-- Kode Rekening -->
                                <td>Utang Gaji dan Tunjangan</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-62.000.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>2107</td> <!-- Kode Rekening -->
                                <td>Utang Listrik</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-250.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>2108</td> <!-- Kode Rekening -->
                                <td>Utang Telepon dan Internet</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-250.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>2109</td> <!-- Kode Rekening -->
                                <td>Utang Utilitas Lainnya</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>2110</td> <!-- Kode Rekening -->
                                <td>Utang Jangka Pendek Lainnya</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td><b>2111</b></td> <!-- Kode Rekening -->
                                <td><b>KEWAJIBAN JANGKA PANJANG</b></td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>2112</td> <!-- Kode Rekening -->
                                <td>Utang ke Bank</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>2199</td> <!-- Kode Rekening -->
                                <td>Utang Jangka Panjang Lainnya</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td><b></b></td> <!-- Kode Rekening -->
                                <td><b>JUMLAH KEWAJIBAN</b></td> <!-- Nama akun -->
                                <td></td> <!-- Catatan -->
                                <td>87.500.000</td> <!-- 2022 -->
                                <td></td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td><b>3100</b></td> <!-- Kode Rekening -->
                                <td><b>MODAL PEMILIK</b></td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>3101</td> <!-- Kode Rekening -->
                                <td>Penyertaan Modal Desa</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>10.000.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>3102</td> <!-- Kode Rekening -->
                                <td>Penyertaan Modal Masyarakat</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>5.000.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td><b>3200</b></td> <!-- Kode Rekening -->
                                <td><b>PENGAMBILAN OLEH PEMILIK</b></td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>3201</td> <!-- Kode Rekening -->
                                <td>Bagi Hasil Penyertaan Modal Desa</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>3202</td> <!-- Kode Rekening -->
                                <td>Bagi Hasil Penyertaan Modal Masyarakat</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td><b>3300</td> <!-- Kode Rekening -->
                                <td><b>LABA DITAHAN DAN PENCADANGAN</b></td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>3301</td> <!-- Kode Rekening -->
                                <td>Laba Ditahan</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>3400</td> <!-- Kode Rekening -->
                                <td>RK Unit Usaha</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>3401</td> <!-- Kode Rekening -->
                                <td>RK Unit Toko Desa</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td>3402</td> <!-- Kode Rekening -->
                                <td>RK Unit Rekreasi</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td><b>3500</td> <!-- Kode Rekening -->
                                <td><b>IKHTISAR LABA RUGI</b></td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>-</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <td>3501</td> <!-- Kode Rekening -->
                                <td>Ikhtisan Laba Rugi</td> <!-- Nama akun -->
                                <td>-</td> <!-- Catatan -->
                                <td>630.850.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td><b></td> <!-- Kode Rekening -->
                                <td><b>JUMLAH EKUITAS</b></td> <!-- Nama akun -->
                                <td></td> <!-- Catatan -->
                                <td>645.850.000</td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
                            <tr>
                                <td><b></td> <!-- Kode Rekening -->
                                <td><b>JUMLAH KEWAJIBAN DAN EKUITAS</b></td> <!-- Nama akun -->
                                <td></td> <!-- Catatan -->
                                <td><b>733.350.000</b></td> <!-- 2022 -->
                                <td>-</td> <!-- 2021 -->
                            </tr>
\
                </tbody>
            </table>
        </div>
    </div>
@endsection