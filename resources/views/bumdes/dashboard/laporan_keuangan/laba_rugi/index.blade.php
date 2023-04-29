@extends('bumdes.dashboard.layouts.main')

@section('content')
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >LAPORAN KEUANGAN - LABA RUGI</h1>
            <div class="ms-auto">
                @include('bumdes.dashboard.layouts.form')
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-borderless">
                <thead class="text-white text-center" style="background-color: #3C4B64">
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
                <tbody class="fw-semibold text-center">
                    <tr>
                        {{--Kode Rekening--}}
                        <td>4000</td>
                        {{--Nama Akun--}}
                        <td>PENDAPATAN</td>
                        {{--Catatan--}}
                        <td></td>
                        {{--2022--}}
                        <td></td>
                        {{--2021--}}
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>4100</td>
                        <td>PENDAPATAN TIKET</td>
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
                        <td>4300</td>
                        <td>PENDAPATAN RUPA RUPA</td>
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
                        <td>7100</td>
                        <td>PENDAPATAN LAIN-LAIN</td>
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
                    <tr>
                        <td>7103</td>
                        <td>Pendapatan Bantuan/Sumbangan/Hibah</td>
                        <td></td>
                        <td>Rp2.000.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>7199</td>
                        <td>Pendapatan Lain-lain</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="3">JUMLAH PENDAPATAN</td>
                        <td>Rp719.000.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6000</td>
                        <td>BEBAN</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6100</td>
                        <td>BEBAN ADMINISTRASI DAN UMUM</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6101</td>
                        <td>Beban Gaji dan Tunjangan</td>
                        <td></td>
                        <td>Rp12.000.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6102</td>
                        <td>Beban Honor Lembur</td>
                        <td></td>
                        <td>Rp5.000.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6103</td>
                        <td>Beban Honor Narasumber</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6104</td>
                        <td>Beban Insentif (Bonus)</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6105</td>
                        <td>Komisi</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6106</td>
                        <td>Beban Seragam Pegawai</td>
                        <td></td>
                        <td>Rp300.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6107</td>
                        <td>Beban Listrik</td>
                        <td></td>
                        <td>Rp250.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6108</td>
                        <td>Beban Telepon dan Internet</td>
                        <td></td>
                        <td>Rp250.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6109</td>
                        <td>Beban air</td>
                        <td></td>
                        <td>Rp150.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6110</td>
                        <td>Beban Utilitas Lainnya</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6111</td>
                        <td>Beban Transportasi</td>
                        <td></td>
                        <td>Rp100.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6112</td>
                        <td>Parkir</td>
                        <td></td>
                        <td>Rp100.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6113</td>
                        <td>Beban Administrasi Bank</td>
                        <td></td>
                        <td>Rp50.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6114</td>
                        <td>Beban Keamanan</td>
                        <td></td>
                        <td>Rp250.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6115</td>
                        <td>Beban Kebersihan</td>
                        <td></td>
                        <td>Rp50.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6116</td>
                        <td>Beban ATK</td>
                        <td></td>
                        <td>Rp200.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6117</td>
                        <td>Beban Perlengkapan Lainnya</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6118</td>
                        <td>Beban Fotocopy</td>
                        <td></td>
                        <td>Rp200.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6119</td>
                        <td>Beban Pemeliharaan dan Perbaikan</td>
                        <td></td>
                        <td>Rp300.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6120</td>
                        <td>Beban Sewa</td>
                        <td></td>
                        <td>Rp12.000.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6121</td>
                        <td>Beban Asuransi</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6122</td>
                        <td>Beban Konsumsi Rapat</td>
                        <td></td>
                        <td>Rp250.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6123</td>
                        <td>Beban Perjalanan Dinas</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6124</td>
                        <td>Beban Penyusutan Peralatan dan Mebeuliar </td>
                        <td></td>
                        <td>Rp200.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6125</td>
                        <td>Beban Penyusutan Gedung dan Bangunan</td>
                        <td></td>
                        <td>Rp50.000.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6126</td>
                        <td>Beban Penyusutan Kendaraan</td>
                        <td></td>
                        <td>Rp6.250.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6136</td>
                        <td>Beban PADes</td>
                        <td></td>
                        <td>Rp50.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6199</td>
                        <td>Beban Administrasi Umum dan Lainnya</td>
                        <td></td>
                        <td>Rp200.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>7201</td>
                        <td>Beban Bunga</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>7203</td>
                        <td>Beban Denda</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>7204</td>
                        <td>Beban Diskon</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>7205</td>
                        <td>Beban yang Masih Harus Dibayar</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>7299</td>
                        <td>Beban Lain-Lainnya</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="3">JUMLAH BEBAN</td>
                        <td>Rp88.150.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="3">LABA (RUGI) SEBELUM PAJAK</td>
                        <td>Rp630.850.000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6127</td>
                        <td>Beban Pajak Air Permukaan</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6128</td>
                        <td>Beban Pajak Bunga Bank</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6129</td>
                        <td>Beban Pajak Daerah</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6130</td>
                        <td>Beban Pajak Hiburan</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6131</td>
                        <td>Beban Pajak Reklame</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6132</td>
                        <td>Beban PPh 21</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6133</td>
                        <td>Beban PPh 23</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6134</td>
                        <td>Beban PPh 25</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6135</td>
                        <td>Beban PPh 29</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>7202</td>
                        <td>Beban Pajak</td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="3">LABA SETELAH PAJAK</td>
                        <td>Rp630.850.000</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection