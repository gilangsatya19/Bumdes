@extends('bumdes.dashboard.layouts.main')

@section('content')
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >WTB</h1>
            <div class="ms-auto">
                @include('bumdes.dashboard.layouts.form')
            </div>
        </div>
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
                            <td>Kas</td> <!-- // nama akun -->
                            <td>7.800.000</td> <!-- neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!-- //penyesuaian debit -->
                            <td>-</td>
                            <td>7.800.000</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>7.800.000</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">2</th>
                            <td>Kas di Bank A</td> <!--// nama akun -->
                            <td>150.050.000</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>150.050.000</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>150.050.000</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">3</th>
                            <td>Kas di Bank B</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">4</th>
                            <td>Kas di Bank C</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">5</th>
                            <td>Kas Kecil</td> <!--// nama akun -->
                            <td>1.750.000</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>1.750.000</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>1.750.000</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">6</th>
                            <td>Giro</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">7</th>
                            <td>Deposito</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">8</th>
                            <td>Piutang Usaha</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">9</th>
                            <td>Persediaan Barang Dagangan</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">10</th>
                            <td>Persediaan Makan dan Minuman</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">11</th>
                            <td>Perlengkapan</td> <!--// nama akun -->
                            <td>1.000.000</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>1.000.000</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>1.000.000</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">12</th>
                            <td>Sewa Dibayar Dimuka</td> <!--// nama akun -->
                            <td>12.000.000</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>12.000.000</td>
                            <td>0</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">13</th>
                            <td>Asuransi Dibayar Dimuka</td> <!--// nama akun -->
                            <td>50.000.000</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>50.000.000</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>50.000.000</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">14</th>
                            <td>PPh 25</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">15</th>
                            <td>Piutang Desa</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">16</th>
                            <td>Aset Lancar Lainnya</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">17</th>
                            <td>Investasi</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">18</th>
                            <td>Tanah</td> <!--// nama akun -->
                            <td>300.000.000</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>300.000.000</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>300.000.000</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">19</th>
                            <td>Gedung dan Bangunan</td> <!--// nama akun -->
                            <td>250.000.000</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>250.000.000</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>250.000.000</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">20</th>
                            <td>Akumulasi Penyusutan Gedung dan Bangunan</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>50.000.000</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>50.000.000</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>50.000.000</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">21</th>
                            <td>Peralatan dan Meubeliar</td> <!--// nama akun -->
                            <td>4.200.000</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>4.200.000</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>4.200.000</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">22</th>
                            <td>Akumulasi Penyusutan Peralatan dan Meubeliar</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>200.000</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>200.000</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>200.000</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">23</th>
                            <td>Kendaraan</td> <!--// nama akun -->
                            <td>25.000.000</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>25.000.000</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>25.000.000</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">24</th>
                            <td>Akumulasi Penyusutan Kendaraan</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>6.250.000</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>6.250.000</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>6.250.000</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">25</th>
                            <td>Aset Tetap Lainnya</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">26</th>
                            <td>Utang Usaha</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>150.000.000</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>150.000.000</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>150.000.000</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">27</th>
                            <td>PPn Keluaran</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">28</th>
                            <td>PPh 21</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">29</th>
                            <td>PPh 23</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">30</th>
                            <td>PPh 29</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">31</th>
                            <td>Utang Gaji dan Tunjangan</td> <!--// nama akun -->
                            <td>62.000.000</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>62.000.000</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>62.000.000</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">32</th>
                            <td>Utang Gaji dan Tunjangan</td> <!--// nama akun -->
                            <td>250.000</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>250.000</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>250.000</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">33</th>
                            <td>Utang Telepon dan Internet</td> <!--// nama akun -->
                            <td>250.000</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>250.000</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>250.000</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">34</th>
                            <td>Utang Utilitas Lainnya</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">35</th>
                            <td>Utang Jangka Pendek Lainnya</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">36</th>
                            <td>Utang ke Bank</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">37</th>
                            <td>Utang Jangka Panjang Lainnya</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">38</th>
                            <td>Penyertaan Modal Desa</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>10.000.000</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>10.000.000</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>10.000.000</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">39</th>
                            <td>Penyertaan Modal Masyarakat</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>5.000.000</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>5.000.000</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>5.000.000</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">40</th>
                            <td>Bagi Hasil Penyertaan Modal Desa</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">41</th>
                            <td>Bagi Hasil Penyertaan Modal Masyarakat</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">42</th>
                            <td>Pendapatan Tiket Masuk Perseorangan</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">43</th>
                            <td>Pendapatan Tiket Masuk Rombongan</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">44</th>
                            <td>Pendapatan Tiket Lainnya</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">45</th>
                            <td>Pendapatan Komisi</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">46</th>
                            <td>Pendapatan Parkir</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">47</th>
                            <td>Pendapatan Toilet</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">48</th>
                            <td>Pendapatan Jasa</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>350.000.000</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>350.000.000</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>350.000.000</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">49</th>
                            <td>Pendapatan Sewa</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>351.200.000</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>351.200.000</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>351.200.000</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="">50</th>
                            <td>Pendapatan Rupa Rupa Lainnya</td> <!--// nama akun -->
                            <td>-</td> <!--// neraca saldo debit -->
                            <td>-</td> 
                            <td>-</td> <!--//penyesuaian debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca saldo setelah debit -->
                            <td>-</td>
                            <td>-</td> <!--// laba rugi debit -->
                            <td>-</td>
                            <td>-</td> <!--// neraca debit -->
                            <td>-</td>
                        </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection