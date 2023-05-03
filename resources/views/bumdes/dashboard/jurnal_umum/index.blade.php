@extends('bumdes.dashboard.layouts.main')

@section('content')
    {{-- stye untuk table responsive dan btn ubah/unduh --}}
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >JURNAL UMUM</h1>
            <div class="ms-auto">
                @include('bumdes.dashboard.layouts.form')
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-borderless">
                <thead class="text-white text-center" style="background-color: #3C4B64">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jenis Transaksi</th>
                        <th scope="col">Nama Akun</th>
                        <th scope="col">No. Referensi</th>
                        <th scope="col">Debit</th>
                        <th scope="col">Kredit</th>
                        <th scope="col">Bukti Transaksti</th>
                        <th scope="col">Ubah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                    </tr>
                </tbody>
                {{-- <tbody class="fw-semibold text-center"> --}}
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
                        <th scope="row" rowspan="">1</th>
                        {{-- tanggal --}}
                        <td>02/01/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>5.000.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Penyertaan modal masyarakat</td>
                        {{-- no ref --}}
                        <td>3102</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>5.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="">2</th>
                        {{-- tanggal --}}
                        <td>02/01/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Piutang Desa</td>
                        {{-- no ref --}}
                        <td>1115</td>
                        {{-- debit --}}
                        <td>15.000.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Pendapatan dari Desa (PADES)</td>
                        {{-- no ref --}}
                        <td>7102</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>15.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">3</th>
                        {{-- tanggal --}}
                        <td>02/01/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Sewa dibayar di muka</td>
                        {{-- no ref --}}
                        <td>1112</td>
                        {{-- debit --}}
                        <td>12.000.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>12.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="">4</th>
                        {{-- tanggal --}}
                        <td>04/01/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Peralatan dan meubeliar</td>
                        {{-- no ref --}}
                        <td>1304</td>
                        {{-- debit --}}
                        <td>4.200.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>4.200.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">5</th>
                        {{-- tanggal --}}
                        <td>07/01/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Piutang usaha</td>
                        {{-- no ref --}}
                        <td>1108</td>
                        {{-- debit --}}
                        <td>1.200.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Pendapatan sewa</td>
                        {{-- no ref --}}
                        <td>4304</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>1.2000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="">6</th>
                        {{-- tanggal --}}
                        <td>27/01/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>1.200.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Piutang usaha</td>
                        {{-- no ref --}}
                        <td>1108</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>1.200.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">7</th>
                        {{-- tanggal --}}
                        <td>05/02/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>350.000.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Pendapatan sewa</td>
                        {{-- no ref --}}
                        <td>4304</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>350.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="">8</th>
                        {{-- tanggal --}}
                        <td>08/02/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>350.000.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Pendapatan jasa</td>
                        {{-- no ref --}}
                        <td>4305</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>350.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    
                    <tr>
                        <th scope="row" rowspan="">9</th>
                        {{-- tanggal --}}
                        <td>10/02/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>15.000.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Piutang desa</td>
                        {{-- no ref --}}
                        <td>1115</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>15.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">10</th>
                        {{-- tanggal --}}
                        <td>10/02/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Beban PADES</td>
                        {{-- no ref --}}
                        <td>6136</td>
                        {{-- debit --}}
                        <td>50.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>50.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">11</th>
                        {{-- tanggal --}}
                        <td>12/02/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Perlengkapan</td>
                        {{-- no ref --}}
                        <td>1111</td>
                        {{-- debit --}}
                        <td>250.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>250.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">12</th>
                        {{-- tanggal --}}
                        <td>14/02/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kendaraan</td>
                        {{-- no ref --}}
                        <td>1306</td>
                        {{-- debit --}}
                        <td>25.000.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>25.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">13</th>
                        {{-- tanggal --}}
                        <td>28/03/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Tanah</td>
                        {{-- no ref --}}
                        <td>1301</td>
                        {{-- debit --}}
                        <td>300.000.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>100.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Utang usaha</td>
                        {{-- no ref --}}
                        <td>2101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>200.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    
                    <tr>
                        <th scope="row" rowspan="">14</th>
                        {{-- tanggal --}}
                        <td>17/04/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Gedung dan bangunan</td>
                        {{-- no ref --}}
                        <td>1302</td>
                        {{-- debit --}}
                        <td>250.000.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>250.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    
                    <tr>
                        <th scope="row" rowspan="">15</th>
                        {{-- tanggal --}}
                        <td>25/05/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Utang usaha</td>
                        {{-- no ref --}}
                        <td>2112</td>
                        {{-- debit --}}
                        <td>200.000.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>200.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    
                    <tr>
                        <th scope="row" rowspan="">16</th>
                        {{-- tanggal --}}
                        <td>04/06/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas di Bank A</td>
                        {{-- no ref --}}
                        <td>1102</td>
                        {{-- debit --}}
                        <td>150.000.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Utang usaha</td>
                        {{-- no ref --}}
                        <td>2112</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>150.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    
                    <tr>
                        <th scope="row" rowspan="">17</th>
                        {{-- tanggal --}}
                        <td>04/06/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Beban administrasi bank</td>
                        {{-- no ref --}}
                        <td>6113</td>
                        {{-- debit --}}
                        <td>50.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>50.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    
                    <tr>
                        <th scope="row" rowspan="">18</th>
                        {{-- tanggal --}}
                        <td>04/06/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas di Bank A</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>50.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Pendapatan bunga</td>
                        {{-- no ref --}}
                        <td>7101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>50.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    
                    <tr>
                        <th scope="row" rowspan="">19</th>
                        {{-- tanggal --}}
                        <td>07/06/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas Kecil</td>
                        {{-- no ref --}}
                        <td>1105</td>
                        {{-- debit --}}
                        <td>2.500.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>2.500.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    
                    <tr>
                        <th scope="row" rowspan="">20</th>
                        {{-- tanggal --}}
                        <td>01/07/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>10.000.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Penyertaan Modal Desa</td>
                        {{-- no ref --}}
                        <td>3102</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>10.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    
                    <tr>
                        <th scope="row" rowspan="">21</th>
                        {{-- tanggal --}}
                        <td>01/07/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Asuransi dibayar di muka</td>
                        {{-- no ref --}}
                        <td>1113</td>
                        {{-- debit --}}
                        <td>50.000.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>50.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    
                    <tr>
                        <th scope="row" rowspan="">22</th>
                        {{-- tanggal --}}
                        <td>31/07/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Utang Gaji dan Tunjangan</td>
                        {{-- no ref --}}
                        <td>2106</td>
                        {{-- debit --}}
                        <td>50.000.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>50.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    
                    <tr>
                        <th scope="row" rowspan="">23</th>
                        {{-- tanggal --}}
                        <td>04/08/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Utang Gaji dan Tunjangan</td>
                        {{-- no ref --}}
                        <td>2106</td>
                        {{-- debit --}}
                        <td>12.000.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>12.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    
                    <tr>
                        <th scope="row" rowspan="">24</th>
                        {{-- tanggal --}}
                        <td>04/08/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Utang Listrik</td>
                        {{-- no ref --}}
                        <td>2107</td>
                        {{-- debit --}}
                        <td>250.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Utang Telepon dan Internet</td>
                        {{-- no ref --}}
                        <td>2108</td>
                        {{-- debit --}}
                        <td>250.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>500.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                     
                    <tr>
                        <th scope="row" rowspan="">25</th>
                        {{-- tanggal --}}
                        <td>05/08/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Beban Gaji dan Tunjangan</td>
                        {{-- no ref --}}
                        <td>6101</td>
                        {{-- debit --}}
                        <td>12.000.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>12.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">26</th>
                        {{-- tanggal --}}
                        <td>07/08/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Beban Listrik</td>
                        {{-- no ref --}}
                        <td>6107</td>
                        {{-- debit --}}
                        <td>250.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Beban Telepon dan Internet</td>
                        {{-- no ref --}}
                        <td>6108</td>
                        {{-- debit --}}
                        <td>250.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>500.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">27</th>
                        {{-- tanggal --}}
                        <td>10/08/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Beban Air</td>
                        {{-- no ref --}}
                        <td>6109</td>
                        {{-- debit --}}
                        <td>150.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>150.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">28</th>
                        {{-- tanggal --}}
                        <td>11/08/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>750.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Pendapatan dari Desa (PADES)</td>
                        {{-- no ref --}}
                        <td>7102</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>750.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">29</th>
                        {{-- tanggal --}}
                        <td>30/08/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>2.000.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Pendapatan Bantuan/Sumbangan/Hibah</td>
                        {{-- no ref --}}
                        <td>7103</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>2.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">30</th>
                        {{-- tanggal --}}
                        <td>01/09/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Perlengkapan</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>750.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas Kecil</td>
                        {{-- no ref --}}
                        <td>7102</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>750.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">31</th>
                        {{-- tanggal --}}
                        <td>03/09/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Beban Honor Lembur</td>
                        {{-- no ref --}}
                        <td>6102</td>
                        {{-- debit --}}
                        <td>5.000.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>5.000.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">32</th>
                        {{-- tanggal --}}
                        <td>05/09/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Beban Transportasi</td>
                        {{-- no ref --}}
                        <td>6111</td>
                        {{-- debit --}}
                        <td>100.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>100.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">33</th>
                        {{-- tanggal --}}
                        <td>06/09/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Beban Parkir</td>
                        {{-- no ref --}}
                        <td>6112</td>
                        {{-- debit --}}
                        <td>100.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>100.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">34</th>
                        {{-- tanggal --}}
                        <td>09/09/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Beban Keamanan</td>
                        {{-- no ref --}}
                        <td>6114</td>
                        {{-- debit --}}
                        <td>250.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>250.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">35</th>
                        {{-- tanggal --}}
                        <td>10/09/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Beban Fotocopy</td>
                        {{-- no ref --}}
                        <td>6118</td>
                        {{-- debit --}}
                        <td>200.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>200.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">36</th>
                        {{-- tanggal --}}
                        <td>11/09/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Beban Pemeliharaan dan Perbaikan</td>
                        {{-- no ref --}}
                        <td>6119</td>
                        {{-- debit --}}
                        <td>300.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>300.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">37</th>
                        {{-- tanggal --}}
                        <td>12/09/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Beban ATK</td>
                        {{-- no ref --}}
                        <td>6116</td>
                        {{-- debit --}}
                        <td>200.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>200.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">38</th>
                        {{-- tanggal --}}
                        <td>13/09/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Beban Kebersihan</td>
                        {{-- no ref --}}
                        <td>6115</td>
                        {{-- debit --}}
                        <td>50.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>50.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">39</th>
                        {{-- tanggal --}}
                        <td>14/09/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Beban Administrasi Umum dan Lainnya</td>
                        {{-- no ref --}}
                        <td>6199</td>
                        {{-- debit --}}
                        <td>200.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>200.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">40</th>
                        {{-- tanggal --}}
                        <td>15/09/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Beban Seragam Pegawai</td>
                        {{-- no ref --}}
                        <td>6115</td>
                        {{-- debit --}}
                        <td>300.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>300.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="">41</th>
                        {{-- tanggal --}}
                        <td>16/09/2022</td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Beban Konsumsi Rapat</td>
                        {{-- no ref --}}
                        <td>6122</td>
                        {{-- debit --}}
                        <td>250.000</td>
                        {{-- kredit --}}
                        <td>-</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan=""></th>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- jenis transaksi --}}
                        <td>-</td>
                        {{-- nama akun --}}
                        <td>Kas</td>
                        {{-- no ref --}}
                        <td>1101</td>
                        {{-- debit --}}
                        <td>-</td>
                        {{-- kredit --}}
                        <td>250.000</td>
                        <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                        <td><button class="btn btn-primary btn-ubah">Ubah</button></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>

    
@endsection