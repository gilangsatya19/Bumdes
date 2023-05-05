@extends('bumdes.dashboard.layouts.main')

@section('content')
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >LAPORAN KEUANGAN - POSISI KEUANGAN</h1>
            <div class="ms-auto">
               <!-- @include('bumdes.dashboard.layouts.form')-->
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-borderless">
                <thead class="text-white text-center" style="background-color: #3C4B64">
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
                <tbody class="fw-semibold text-center">
                    <tr>
                        {{--Kode Rekening--}}
                        <td><b>1000</b></td>
                        {{--Nama Akun--}}
                        <td><b>ASET</b></td>
                        {{--Catatan--}}
                        <td></td>
                        {{--2022--}}
                        <td></td>
                        {{--2021--}}
                        <td>-</td>
                    </tr>
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
                        <td></td>
                        <td>Rp7.800.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1102</td>
                        <td>Kas di Bank A</td>
                        <td></td>
                        <td>Rp150.050.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1103</td>
                        <td>Kas di Bank B</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1104</td>
                        <td>Kas di Bank C</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1105</td>
                        <td>Kas Kecil</td>
                        <td></td>
                        <td>Rp1.750.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1106</td>
                        <td>Giro</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1107</td>
                        <td>Deposito</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1108</td>
                        <td>Piutang Usaha</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1109</td>
                        <td>Persediaan Barang Dagang</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1110</td>
                        <td>Persediaan Makan dan Minuman</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1111</td>
                        <td>Perlengkapan</td>
                        <td></td>
                        <td>Rp1.000.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1112</td>
                        <td>Sewa Dibayar Dimuka</td>
                        <td></td>
                        <td>Rp0</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1113</td>
                        <td>Asuransi Dibayar Dimuka</td>
                        <td></td>
                        <td>Rp50.000.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1114</td>
                        <td>PPh 25</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1115</td>
                        <td>Piutang Desa</td>
                        <td></td>
                        <td>Rp7.800.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1199</td>
                        <td>Aset Lancar Lainnya</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><b>1200</b></td>
                        <td><b>INVESTASI</b></td>
                        <td></td>
                        <td>Rp210.600.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><b>1300</b></td>
                        <td><b>ASET TETAP</b></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1301</td>
                        <td>Tanah</td>
                        <td></td>
                        <td>Rp300.000.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1302</td>
                        <td>Gedung dan Bangunan</td>
                        <td></td>
                        <td>Rp250.000.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1303</td>
                        <td>Akumulasi Penyusutan Gedung dan Bangunan</td>
                        <td></td>
                        <td>-Rp50.000.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1304</td>
                        <td>Peralatan dan Mebeuliar</td>
                        <td></td>
                        <td>Rp4.200.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1305</td>
                        <td>Akumulasi Penyusutan Peralatan dan Mebeuliar</td>
                        <td></td>
                        <td>-Rp200.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1306</td>
                        <td>Kendaraan</td>
                        <td></td>
                        <td>Rp25.000.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1307</td>
                        <td>Akumulasi Penyusutan Kendaraan</td>
                        <td></td>
                        <td>-Rp6.250.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1399</td>
                        <td>Aset Tetap Lainnya</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="3"><b>JUMLAH ASET</b></td>
                        <td>Rp733.350.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><b>2000</b></td>
                        <td><b>KEWAJIBAN</b></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><b>2100</b></td>
                        <td><b>KEWAJIBAN JANGKA PENDEK</b></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>2101</td>
                        <td>Utang Usaha</td>
                        <td></td>
                        <td>Rp150.000.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>2102</td>
                        <td>PPn Keluaran</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>2103</td>
                        <td>PPh 21</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>2104</td>
                        <td>PPh 23</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>2105</td>
                        <td>PPh 29</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>2106</td>
                        <td>Utang Gaji dan Tunjangan</td>
                        <td></td>
                        <td>-Rp62.000.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>2107</td>
                        <td>Utang Listrik</td>
                        <td></td>
                        <td>-Rp25.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>2108</td>
                        <td>Utang Telepon dan Internet</td>
                        <td></td>
                        <td>-Rp250.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>2109</td>
                        <td>Utang Utilitas Lainnya</td>
                        <td></td>
                        <td>Rp150.000.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>2110</td>
                        <td>Utang Jangka Pendek Lainnya</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><b>2111</b></td>
                        <td><b>KEWAJIBAN JANGKA PANJANG</b></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>2112</td>
                        <td>Utang Ke Bank</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>2199</td>
                        <td>Utang Jangka Panjang Lainnya</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="3"><b>JUMLAH KEWAJIBAN</b></td>
                        <td>Rp87.500.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><b>3000</b></td>
                        <td><b>EKUITAS</b></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><b>3100</b></td>
                        <td><b>MODAL PEMILIK</b></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>3101</td>
                        <td>Penyertaan Modal Desa</td>
                        <td></td>
                        <td>Rp10.000.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>3102</td>
                        <td>Penyertaan Modal Masyrakat</td>
                        <td></td>
                        <td>Rp5.000.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><b>3200</b></td>
                        <td><b>PENGAMBILAN OLEH PEMILIK</b></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>3201</td>
                        <td>Bagi Hasil Penyertaan Modal Desa</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>3202</td>
                        <td>Bagi Hasil Penyertaan Modal Masayrakat</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><b>3300</b></td>
                        <td><b>LABA DITAHAN DAN PENCADANGAN</b></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>3301</td>
                        <td>Laba Ditahan</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>3400</td>
                        <td>RK Unit Usaha</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>3401</td>
                        <td>RK Unit Toko Desa</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>3402</td>
                        <td>RK Unit Rekreasi</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><b>3500</b></td>
                        <td><b>IKHTISAR LABA RUGI</b></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>3501</td>
                        <td>Ikhtisar Laba Rugi</td>
                        <td></td>
                        <td>Rp630.850.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="3"><b>JUMLAH EKUITAS</b></td>
                        <td>Rp645.850.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="3"><b>JUMLAH KEWAJIBAN DAN EKUITAS</b></td>
                        <td>Rp733.350.000</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection