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

                </tbody>
            </table>
        </div>
    </div>
@endsection