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
                            <h3 class="card-title">Working Trial Balance</h3>
                        </div>
                        {{-- <p>{{$datas['saldo_kas']}}</p> --}}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="text-center">
                                    <tr class="align-middle" >
                                        <th rowspan="2">No.</th>
                                        <th rowspan="2">Nama Akun</th>
                                        <th colspan="2">Neraca Saldo</th>
                                        <th colspan="2">Penyesuaian</th>
                                        <th colspan="2">Neraca Setelahnya</th>
                                        <th colspan="2">Laba Rugi</th>
                                        <th colspan="2">Neraca</th>
                                        <th rowspan="2">Action</th>
                                    </tr>
                                    <tr class="align-top">
                                        <th>Debit</th>
                                        <th>Kredit</th>
                                        <th>Debit</th>
                                        <th>Kredit</th>
                                        <th>Debit</th>
                                        <th>Kredit</th>
                                        <th>Debit</th>
                                        <th>Kredit</th>
                                        <th>Debit</th>
                                        <th>Kredit</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <th scope="row" rowspan="">1</th>
                                        <td>Kas</td> <!-- // nama akun -->
                                        @if ($saldo['kas'] > 0)
                                            <td>{{formatRupiah($saldo['kas'])}}</td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        @elseif($saldo['kas'] > 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($saldo['kas'] * -1)}}</td> <!-- neraca saldo kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($penyesuaian['kas'] > 0)
                                            <td>{{formatRupiah($penyesuaian['kas'])}}</td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        @elseif($penyesuaian['kas'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($penyesuaian['kas'] * -1)}}</td> <!-- penyesuaian kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($saldo['kas'] + $penyesuaian['kas'] > 0)
                                            <td>{{formatRupiah($saldo['kas'] + $penyesuaian['kas'])}}</td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        @elseif($saldo['kas'] + $penyesuaian['kas'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['kas'] + $penyesuaian['kas']) * -1)}}</td> <!-- neraca setelahnya kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        @if ($saldo['kas'] + $penyesuaian['kas'] > 0)
                                            <td>{{formatRupiah($saldo['kas'] + $penyesuaian['kas'])}}</td> <!-- neraca debit -->
                                            <td>-</td> 
                                        @elseif($saldo['kas'] + $penyesuaian['kas'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['kas'] + $penyesuaian['kas']) * -1)}}</td> <!-- neraca kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        <td>
                                            <a href="/wtb/Kas/edit" class="nav-icon fas fa-edit"></a>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">2</th>
                                        <td>Kas di Bank A</td> <!--// nama akun -->
                                        @if ($saldo['kas_di_bank_a'] > 0)
                                            <td>{{formatRupiah($saldo['kas_di_bank_a'])}}</td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        @elseif($saldo['kas_di_bank_a'] > 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($saldo['kas_di_bank_a'] * -1)}}</td> <!-- neraca saldo kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($penyesuaian['kas_di_bank_a'] > 0)
                                            <td>{{formatRupiah($penyesuaian['kas_di_bank_a'])}}</td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        @elseif($penyesuaian['kas_di_bank_a'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($penyesuaian['kas_di_bank_a'] * -1)}}</td> <!-- penyesuaian kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($saldo['kas_di_bank_a'] + $penyesuaian['kas_di_bank_a'] > 0)
                                            <td>{{formatRupiah($saldo['kas_di_bank_a'] + $penyesuaian['kas_di_bank_a'])}}</td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        @elseif($saldo['kas_di_bank_a'] + $penyesuaian['kas_di_bank_a'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['kas_di_bank_a'] + $penyesuaian['kas_di_bank_a']) * -1)}}</td> <!-- neraca setelahnya kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        @if ($saldo['kas_di_bank_a'] + $penyesuaian['kas_di_bank_a'] > 0)
                                            <td>{{formatRupiah($saldo['kas_di_bank_a'] + $penyesuaian['kas_di_bank_a'])}}</td> <!-- neraca debit -->
                                            <td>-</td> 
                                        @elseif($saldo['kas_di_bank_a'] + $penyesuaian['kas_di_bank_a'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['kas_di_bank_a'] + $penyesuaian['kas_di_bank_a']) * -1)}}</td> <!-- neraca kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        <td>
                                            <a href="/wtb/Kas di Bank A/edit" class="nav-icon fas fa-edit"></a>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">3</th>
                                        <td>Kas di Bank B</td>
                                        @if ($saldo['kas_di_bank_b'] > 0)
                                            <td>{{formatRupiah($saldo['kas_di_bank_b'])}}</td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        @elseif($saldo['kas_di_bank_b'] > 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($saldo['kas_di_bank_b'] * -1)}}</td> <!-- neraca saldo kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($penyesuaian['kas_di_bank_b'] > 0)
                                            <td>{{formatRupiah($penyesuaian['kas_di_bank_b'])}}</td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        @elseif($penyesuaian['kas_di_bank_b'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($penyesuaian['kas_di_bank_b'] * -1)}}</td> <!-- penyesuaian kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($saldo['kas_di_bank_b'] + $penyesuaian['kas_di_bank_b'] > 0)
                                            <td>{{formatRupiah($saldo['kas_di_bank_b'] + $penyesuaian['kas_di_bank_b'])}}</td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        @elseif($saldo['kas_di_bank_b'] + $penyesuaian['kas_di_bank_b'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['kas_di_bank_b'] + $penyesuaian['kas_di_bank_b']) * -1)}}</td> <!-- neraca setelahnya kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        @if ($saldo['kas_di_bank_b'] + $penyesuaian['kas_di_bank_b'] > 0)
                                            <td>{{formatRupiah($saldo['kas_di_bank_b'] + $penyesuaian['kas_di_bank_b'])}}</td> <!-- neraca debit -->
                                            <td>-</td> 
                                        @elseif($saldo['kas_di_bank_b'] + $penyesuaian['kas_di_bank_b'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['kas_di_bank_b'] + $penyesuaian['kas_di_bank_b']) * -1)}}</td> <!-- neraca kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        <td>
                                            <a href="/wtb/Kas di Bank B/edit" class="nav-icon fas fa-edit"></a>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">4</th>
                                        <td>Kas di Bank C</td>
                                        @if ($saldo['kas_di_bank_c'] > 0)
                                            <td>{{formatRupiah($saldo['kas_di_bank_c'])}}</td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        @elseif($saldo['kas_di_bank_c'] > 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($saldo['kas_di_bank_c'] * -1)}}</td> <!-- neraca saldo kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($penyesuaian['kas_di_bank_c'] > 0)
                                            <td>{{formatRupiah($penyesuaian['kas_di_bank_c'])}}</td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        @elseif($penyesuaian['kas_di_bank_c'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($penyesuaian['kas_di_bank_c'] * -1)}}</td> <!-- penyesuaian kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($saldo['kas_di_bank_c'] + $penyesuaian['kas_di_bank_c'] > 0)
                                            <td>{{formatRupiah($saldo['kas_di_bank_c'] + $penyesuaian['kas_di_bank_c'])}}</td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        @elseif($saldo['kas_di_bank_c'] + $penyesuaian['kas_di_bank_c'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['kas_di_bank_c'] + $penyesuaian['kas_di_bank_c']) * -1)}}</td> <!-- neraca setelahnya kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        @if ($saldo['kas_di_bank_c'] + $penyesuaian['kas_di_bank_c'] > 0)
                                            <td>{{formatRupiah($saldo['kas_di_bank_c'] + $penyesuaian['kas_di_bank_c'])}}</td> <!-- neraca debit -->
                                            <td>-</td> 
                                        @elseif($saldo['kas_di_bank_c'] + $penyesuaian['kas_di_bank_c'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['kas_di_bank_c'] + $penyesuaian['kas_di_bank_c']) * -1)}}</td> <!-- neraca kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        <td>
                                            <a href="/wtb/Kas di Bank C/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">5</th>
                                        <td>Kas Kecil</td> <!--// nama akun -->
                                        @if ($saldo['kas_kecil'] > 0)
                                            <td>{{formatRupiah($saldo['kas_kecil'])}}</td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        @elseif($saldo['kas_kecil'] > 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($saldo['kas_kecil'] * -1)}}</td> <!-- neraca saldo kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($penyesuaian['kas_kecil'] > 0)
                                            <td>{{formatRupiah($penyesuaian['kas_kecil'])}}</td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        @elseif($penyesuaian['kas_kecil'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($penyesuaian['kas_kecil'] * -1)}}</td> <!-- penyesuaian kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($saldo['kas_kecil'] + $penyesuaian['kas_kecil'] > 0)
                                            <td>{{formatRupiah($saldo['kas_kecil'] + $penyesuaian['kas_kecil'])}}</td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        @elseif($saldo['kas_kecil'] + $penyesuaian['kas_kecil'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['kas_kecil'] + $penyesuaian['kas_kecil']) * -1)}}</td> <!-- neraca setelahnya kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        @if ($saldo['kas_kecil'] + $penyesuaian['kas_kecil'] > 0)
                                            <td>{{formatRupiah($saldo['kas_kecil'] + $penyesuaian['kas_kecil'])}}</td> <!-- neraca debit -->
                                            <td>-</td> 
                                        @elseif($saldo['kas_kecil'] + $penyesuaian['kas_kecil'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['kas_kecil'] + $penyesuaian['kas_kecil']) * -1)}}</td> <!-- neraca kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        <td>
                                            <a href="/wtb/Kas Kecil/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">6</th>
                                        <td>Giro</td> <!--// nama akun -->
                                        @if ($saldo['giro'] > 0)
                                            <td>{{formatRupiah($saldo['giro'])}}</td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        @elseif($saldo['giro'] > 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($saldo['giro'] * -1)}}</td> <!-- neraca saldo kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($penyesuaian['giro'] > 0)
                                            <td>{{formatRupiah($penyesuaian['giro'])}}</td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        @elseif($penyesuaian['giro'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($penyesuaian['giro'] * -1)}}</td> <!-- penyesuaian kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($saldo['giro'] + $penyesuaian['giro'] > 0)
                                            <td>{{formatRupiah($saldo['giro'] + $penyesuaian['giro'])}}</td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        @elseif($saldo['giro'] + $penyesuaian['giro'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['giro'] + $penyesuaian['giro']) * -1)}}</td> <!-- neraca setelahnya kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        @if ($saldo['giro'] + $penyesuaian['giro'] > 0)
                                            <td>{{formatRupiah($saldo['giro'] + $penyesuaian['giro'])}}</td> <!-- neraca debit -->
                                            <td>-</td> 
                                        @elseif($saldo['giro'] + $penyesuaian['giro'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['giro'] + $penyesuaian['giro']) * -1)}}</td> <!-- neraca kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        <td>
                                            <a href="/wtb/Giro/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">7</th>
                                        <td>Deposito</td> <!--// nama akun -->
                                        @if ($saldo['deposito'] > 0)
                                            <td>{{formatRupiah($saldo['deposito'])}}</td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        @elseif($saldo['deposito'] > 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($saldo['deposito'] * -1)}}</td> <!-- neraca saldo kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($penyesuaian['deposito'] > 0)
                                            <td>{{formatRupiah($penyesuaian['deposito'])}}</td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        @elseif($penyesuaian['deposito'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($penyesuaian['deposito'] * -1)}}</td> <!-- penyesuaian kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($saldo['deposito'] + $penyesuaian['deposito'] > 0)
                                            <td>{{formatRupiah($saldo['deposito'] + $penyesuaian['deposito'])}}</td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        @elseif($saldo['deposito'] + $penyesuaian['deposito'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['deposito'] + $penyesuaian['deposito']) * -1)}}</td> <!-- neraca setelahnya kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        @if ($saldo['deposito'] + $penyesuaian['deposito'] > 0)
                                            <td>{{formatRupiah($saldo['deposito'] + $penyesuaian['deposito'])}}</td> <!-- neraca debit -->
                                            <td>-</td> 
                                        @elseif($saldo['deposito'] + $penyesuaian['deposito'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['deposito'] + $penyesuaian['deposito']) * -1)}}</td> <!-- neraca kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        <td>
                                            <a href="/wtb/Deposito/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">8</th>
                                        <td>Piutang Usaha</td> <!--// nama akun -->
                                        @if ($saldo['piutang_usaha'] > 0)
                                            <td>{{formatRupiah($saldo['piutang_usaha'])}}</td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        @elseif($saldo['piutang_usaha'] > 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($saldo['piutang_usaha'] * -1)}}</td> <!-- neraca saldo kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($penyesuaian['piutang_usaha'] > 0)
                                            <td>{{formatRupiah($penyesuaian['piutang_usaha'])}}</td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        @elseif($penyesuaian['piutang_usaha'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($penyesuaian['piutang_usaha'] * -1)}}</td> <!-- penyesuaian kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($saldo['piutang_usaha'] + $penyesuaian['piutang_usaha'] > 0)
                                            <td>{{formatRupiah($saldo['piutang_usaha'] + $penyesuaian['piutang_usaha'])}}</td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        @elseif($saldo['piutang_usaha'] + $penyesuaian['piutang_usaha'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['piutang_usaha'] + $penyesuaian['piutang_usaha']) * -1)}}</td> <!-- neraca setelahnya kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        @if ($saldo['piutang_usaha'] + $penyesuaian['piutang_usaha'] > 0)
                                            <td>{{formatRupiah($saldo['piutang_usaha'] + $penyesuaian['piutang_usaha'])}}</td> <!-- neraca debit -->
                                            <td>-</td> 
                                        @elseif($saldo['piutang_usaha'] + $penyesuaian['piutang_usaha'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['piutang_usaha'] + $penyesuaian['piutang_usaha']) * -1)}}</td> <!-- neraca kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        <td>
                                            <a href="/wtb/Piutang Usaha/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">9</th>
                                        <td>Persediaan Barang Dagangan</td> <!--// nama akun -->
                                        @if ($saldo['persediaan_barang_dagang'] > 0)
                                            <td>{{formatRupiah($saldo['persediaan_barang_dagang'])}}</td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        @elseif($saldo['persediaan_barang_dagang'] > 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($saldo['persediaan_barang_dagang'] * -1)}}</td> <!-- neraca saldo kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($penyesuaian['persediaan_barang_dagang'] > 0)
                                            <td>{{formatRupiah($penyesuaian['persediaan_barang_dagang'])}}</td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        @elseif($penyesuaian['persediaan_barang_dagang'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($penyesuaian['persediaan_barang_dagang'] * -1)}}</td> <!-- penyesuaian kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($saldo['persediaan_barang_dagang'] + $penyesuaian['persediaan_barang_dagang'] > 0)
                                            <td>{{formatRupiah($saldo['persediaan_barang_dagang'] + $penyesuaian['persediaan_barang_dagang'])}}</td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        @elseif($saldo['persediaan_barang_dagang'] + $penyesuaian['persediaan_barang_dagang'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['persediaan_barang_dagang'] + $penyesuaian['persediaan_barang_dagang']) * -1)}}</td> <!-- neraca setelahnya kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        @if ($saldo['persediaan_barang_dagang'] + $penyesuaian['persediaan_barang_dagang'] > 0)
                                            <td>{{formatRupiah($saldo['persediaan_barang_dagang'] + $penyesuaian['persediaan_barang_dagang'])}}</td> <!-- neraca debit -->
                                            <td>-</td> 
                                        @elseif($saldo['persediaan_barang_dagang'] + $penyesuaian['persediaan_barang_dagang'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['persediaan_barang_dagang'] + $penyesuaian['persediaan_barang_dagang']) * -1)}}</td> <!-- neraca kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        <td>
                                            <a href="/wtb/Persediaan Barang Dagangan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">10</th>
                                        <td>Persediaan Makan dan Minuman</td> <!--// nama akun -->
                                        @if ($saldo['persediaan_makan_dan_minuman'] > 0)
                                            <td>{{formatRupiah($saldo['persediaan_makan_dan_minuman'])}}</td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        @elseif($saldo['persediaan_makan_dan_minuman'] > 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($saldo['persediaan_makan_dan_minuman'] * -1)}}</td> <!-- neraca saldo kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($penyesuaian['persediaan_makan_dan_minuman'] > 0)
                                            <td>{{formatRupiah($penyesuaian['persediaan_makan_dan_minuman'])}}</td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        @elseif($penyesuaian['persediaan_makan_dan_minuman'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($penyesuaian['persediaan_makan_dan_minuman'] * -1)}}</td> <!-- penyesuaian kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($saldo['persediaan_makan_dan_minuman'] + $penyesuaian['persediaan_makan_dan_minuman'] > 0)
                                            <td>{{formatRupiah($saldo['persediaan_makan_dan_minuman'] + $penyesuaian['persediaan_makan_dan_minuman'])}}</td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        @elseif($saldo['persediaan_makan_dan_minuman'] + $penyesuaian['persediaan_makan_dan_minuman'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['persediaan_makan_dan_minuman'] + $penyesuaian['persediaan_makan_dan_minuman']) * -1)}}</td> <!-- neraca setelahnya kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        @if ($saldo['persediaan_makan_dan_minuman'] + $penyesuaian['persediaan_makan_dan_minuman'] > 0)
                                            <td>{{formatRupiah($saldo['persediaan_makan_dan_minuman'] + $penyesuaian['persediaan_makan_dan_minuman'])}}</td> <!-- neraca debit -->
                                            <td>-</td> 
                                        @elseif($saldo['persediaan_makan_dan_minuman'] + $penyesuaian['persediaan_makan_dan_minuman'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['persediaan_makan_dan_minuman'] + $penyesuaian['persediaan_makan_dan_minuman']) * -1)}}</td> <!-- neraca kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        <td>
                                            <a href="/wtb/Persediaan Makan dan Minuman/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">11</th>
                                        <td>Perlengkapan</td> <!--// nama akun -->
                                        @if ($saldo['perlengkapan'] > 0)
                                            <td>{{formatRupiah($saldo['perlengkapan'])}}</td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        @elseif($saldo['perlengkapan'] > 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($saldo['perlengkapan'] * -1)}}</td> <!-- neraca saldo kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($penyesuaian['perlengkapan'] > 0)
                                            <td>{{formatRupiah($penyesuaian['perlengkapan'])}}</td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        @elseif($penyesuaian['perlengkapan'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($penyesuaian['perlengkapan'] * -1)}}</td> <!-- penyesuaian kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($saldo['perlengkapan'] + $penyesuaian['perlengkapan'] > 0)
                                            <td>{{formatRupiah($saldo['perlengkapan'] + $penyesuaian['perlengkapan'])}}</td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        @elseif($saldo['perlengkapan'] + $penyesuaian['perlengkapan'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['perlengkapan'] + $penyesuaian['perlengkapan']) * -1)}}</td> <!-- neraca setelahnya kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        @if ($saldo['perlengkapan'] + $penyesuaian['perlengkapan'] > 0)
                                            <td>{{formatRupiah($saldo['perlengkapan'] + $penyesuaian['perlengkapan'])}}</td> <!-- neraca debit -->
                                            <td>-</td> 
                                        @elseif($saldo['perlengkapan'] + $penyesuaian['perlengkapan'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['perlengkapan'] + $penyesuaian['perlengkapan']) * -1)}}</td> <!-- neraca kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        <td>
                                            <a href="/wtb/Perlengkapan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">12</th>
                                        <td>Sewa Dibayar Dimuka</td> <!--// nama akun -->
                                        @if ($saldo['sewa_dibayar_dimuka'] > 0)
                                            <td>{{formatRupiah($saldo['sewa_dibayar_dimuka'])}}</td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        @elseif($saldo['sewa_dibayar_dimuka'] > 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($saldo['sewa_dibayar_dimuka'] * -1)}}</td> <!-- neraca saldo kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($penyesuaian['sewa_dibayar_dimuka'] > 0)
                                            <td>{{formatRupiah($penyesuaian['sewa_dibayar_dimuka'])}}</td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        @elseif($penyesuaian['sewa_dibayar_dimuka'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($penyesuaian['sewa_dibayar_dimuka'] * -1)}}</td> <!-- penyesuaian kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($saldo['sewa_dibayar_dimuka'] + $penyesuaian['sewa_dibayar_dimuka'] > 0)
                                            <td>{{formatRupiah($saldo['sewa_dibayar_dimuka'] + $penyesuaian['sewa_dibayar_dimuka'])}}</td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        @elseif($saldo['sewa_dibayar_dimuka'] + $penyesuaian['sewa_dibayar_dimuka'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['sewa_dibayar_dimuka'] + $penyesuaian['sewa_dibayar_dimuka']) * -1)}}</td> <!-- neraca setelahnya kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        @if ($saldo['sewa_dibayar_dimuka'] + $penyesuaian['sewa_dibayar_dimuka'] > 0)
                                            <td>{{formatRupiah($saldo['sewa_dibayar_dimuka'] + $penyesuaian['sewa_dibayar_dimuka'])}}</td> <!-- neraca debit -->
                                            <td>-</td> 
                                        @elseif($saldo['sewa_dibayar_dimuka'] + $penyesuaian['sewa_dibayar_dimuka'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['sewa_dibayar_dimuka'] + $penyesuaian['sewa_dibayar_dimuka']) * -1)}}</td> <!-- neraca kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        <td>
                                            <a href="/wtb/Sewa Dibayar Dimuka/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">13</th>
                                        <td>Asuransi Dibayar Dimuka</td> <!--// nama akun -->
                                        @if ($saldo['asuransi_dibayar_dimuka'] > 0)
                                            <td>{{formatRupiah($saldo['asuransi_dibayar_dimuka'])}}</td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        @elseif($saldo['asuransi_dibayar_dimuka'] > 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($saldo['asuransi_dibayar_dimuka'] * -1)}}</td> <!-- neraca saldo kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($penyesuaian['asuransi_dibayar_dimuka'] > 0)
                                            <td>{{formatRupiah($penyesuaian['asuransi_dibayar_dimuka'])}}</td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        @elseif($penyesuaian['asuransi_dibayar_dimuka'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($penyesuaian['asuransi_dibayar_dimuka'] * -1)}}</td> <!-- penyesuaian kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($saldo['asuransi_dibayar_dimuka'] + $penyesuaian['asuransi_dibayar_dimuka'] > 0)
                                            <td>{{formatRupiah($saldo['asuransi_dibayar_dimuka'] + $penyesuaian['asuransi_dibayar_dimuka'])}}</td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        @elseif($saldo['asuransi_dibayar_dimuka'] + $penyesuaian['asuransi_dibayar_dimuka'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['asuransi_dibayar_dimuka'] + $penyesuaian['asuransi_dibayar_dimuka']) * -1)}}</td> <!-- neraca setelahnya kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        @if ($saldo['asuransi_dibayar_dimuka'] + $penyesuaian['asuransi_dibayar_dimuka'] > 0)
                                            <td>{{formatRupiah($saldo['asuransi_dibayar_dimuka'] + $penyesuaian['asuransi_dibayar_dimuka'])}}</td> <!-- neraca debit -->
                                            <td>-</td> 
                                        @elseif($saldo['asuransi_dibayar_dimuka'] + $penyesuaian['asuransi_dibayar_dimuka'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['asuransi_dibayar_dimuka'] + $penyesuaian['asuransi_dibayar_dimuka']) * -1)}}</td> <!-- neraca kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        <td>
                                            <a href="/wtb/Asuransi Dibayar Dimuka/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">14</th>
                                        <td>PPh 25</td> <!--// nama akun -->
                                        @if ($saldo['pph25'] > 0)
                                            <td>{{formatRupiah($saldo['pph25'])}}</td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        @elseif($saldo['pph25'] > 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($saldo['pph25'] * -1)}}</td> <!-- neraca saldo kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($penyesuaian['pph25'] > 0)
                                            <td>{{formatRupiah($penyesuaian['pph25'])}}</td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        @elseif($penyesuaian['pph25'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($penyesuaian['pph25'] * -1)}}</td> <!-- penyesuaian kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($saldo['pph25'] + $penyesuaian['pph25'] > 0)
                                            <td>{{formatRupiah($saldo['pph25'] + $penyesuaian['pph25'])}}</td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        @elseif($saldo['pph25'] + $penyesuaian['pph25'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['pph25'] + $penyesuaian['pph25']) * -1)}}</td> <!-- neraca setelahnya kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        @if ($saldo['pph25'] + $penyesuaian['pph25'] > 0)
                                            <td>{{formatRupiah($saldo['pph25'] + $penyesuaian['pph25'])}}</td> <!-- neraca debit -->
                                            <td>-</td> 
                                        @elseif($saldo['pph25'] + $penyesuaian['pph25'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['pph25'] + $penyesuaian['pph25']) * -1)}}</td> <!-- neraca kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        <td>
                                            <a href="/wtb/PPh 25/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">15</th>
                                        <td>Piutang Desa</td> <!--// nama akun -->
                                        @if ($saldo['piutang_desa'] > 0)
                                            <td>{{formatRupiah($saldo['piutang_desa'])}}</td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        @elseif($saldo['piutang_desa'] > 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($saldo['piutang_desa'] * -1)}}</td> <!-- neraca saldo kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($penyesuaian['piutang_desa'] > 0)
                                            <td>{{formatRupiah($penyesuaian['piutang_desa'])}}</td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        @elseif($penyesuaian['piutang_desa'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah($penyesuaian['piutang_desa'] * -1)}}</td> <!-- penyesuaian kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif

                                        @if ($saldo['piutang_desa'] + $penyesuaian['piutang_desa'] > 0)
                                            <td>{{formatRupiah($saldo['piutang_desa'] + $penyesuaian['piutang_desa'])}}</td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        @elseif($saldo['piutang_desa'] + $penyesuaian['piutang_desa'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['piutang_desa'] + $penyesuaian['piutang_desa']) * -1)}}</td> <!-- neraca setelahnya kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        @if ($saldo['piutang_desa'] + $penyesuaian['piutang_desa'] > 0)
                                            <td>{{formatRupiah($saldo['piutang_desa'] + $penyesuaian['piutang_desa'])}}</td> <!-- neraca debit -->
                                            <td>-</td> 
                                        @elseif($saldo['piutang_desa'] + $penyesuaian['piutang_desa'] < 0)
                                            <td>-</td> 
                                            <td>{{formatRupiah(($saldo['piutang_desa'] + $penyesuaian['piutang_desa']) * -1)}}</td> <!-- neraca kredit -->
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        <td>
                                            <a href="/wtb/Piutang Desa/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
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
                                        <td>-</td>
                                        <td>-</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
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
                                        <td>-</td>
                                        <td>-</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
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
                                        <td>-</td>
                                        <td>-</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
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
                                    <tr>
                                        <th scope="row" rowspan="">51</th>
                                        <td>Pendapatan Bunga</td> <!--// nama akun -->
                                        <td>-</td> <!--// neraca saldo debit -->
                                        <td>50.000</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca saldo setelah debit -->
                                        <td>50.000</td> 
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>50.000</td> 
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">52</th>
                                        <td>Pendapatan dari Desa</td> <!--// nama akun -->
                                        <td>-</td> <!--// neraca saldo debit -->
                                        <td>15.750.000</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca saldo setelah debit -->
                                        <td>15.750.000</td>
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>15.750.000</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">53</th>
                                        <td>Pendapatan Bantuan/Sumbangan/Hibah</td> <!--// nama akun -->
                                        <td>-</td> <!--// neraca saldo debit -->
                                        <td>2.000.000</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca saldo setelah debit -->
                                        <td>2.000.000</td>
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>2.000.000</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">54</th>
                                        <td>Pendapatan Lain-lain</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">55</th>
                                        <td>Beban Gaji dan Tunjangan</td> <!--// nama akun -->
                                        <td>12.000.000</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>12.000.000</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>12.000.000</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">56</th>
                                        <td>Beban Honor Lembur</td> <!--// nama akun -->
                                        <td>5.000.000</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>5.000.000</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>5.000.000</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">57</th>
                                        <td>Beban Honor Narasumber</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">58</th>
                                        <td>Beban Insentif (Bonus)</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">59</th>
                                        <td>Beban Komisi</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">60</th>
                                        <td>Beban Seragam Pegawai</td> <!--// nama akun -->
                                        <td>300.000</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>300.000</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>300.000</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">61</th>
                                        <td>Beban Listrik</td> <!--// nama akun -->
                                        <td>250.000</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>250.000</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>250.000</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">62</th>
                                        <td>Beban Telepon dan Internet</td> <!--// nama akun -->
                                        <td>250.000</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>250.000</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>250.000</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">63</th>
                                        <td>Beban Air</td> <!--// nama akun -->
                                        <td>150.000</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>150.000</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>150.000</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">64</th>
                                        <td>Beban Utilitas Lainnya</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">65</th>
                                        <td>Beban Transportasi</td> <!--// nama akun -->
                                        <td>100.000</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>100.000</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>100.000</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">66</th>
                                        <td>Beban Parkir</td> <!--// nama akun -->
                                        <td>100.000</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>100.000</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>100.000</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">67</th>
                                        <td>Beban Administrasi Bank</td> <!--// nama akun -->
                                        <td>50.000</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>50.000</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>50.000</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">68</th>
                                        <td>Beban Keamanan</td> <!--// nama akun -->
                                        <td>250.000</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>250.000</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>250.000</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">69</th>
                                        <td>Beban Kebersihan</td> <!--// nama akun -->
                                        <td>50.000</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>50.000</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>50.000</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">70</th>
                                        <td>Beban ATK</td> <!--// nama akun -->
                                        <td>200.000</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>200.000</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>200.000</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">71</th>
                                        <td>Beban Perlengkapan Lainnya</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">72</th>
                                        <td>Beban Fotocopy</td> <!--// nama akun -->
                                        <td>200.000</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>200.000</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>200.000</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">73</th>
                                        <td>Beban Pemeliharaan dan Perbaikan</td> <!--// nama akun -->
                                        <td>300.000</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>300.000</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>300.000</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">74</th>
                                        <td>Beban Sewa</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">75</th>
                                        <td>Beban Asuransi</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">76</th>
                                        <td>Beban Konsumsi Rapat</td> <!--// nama akun -->
                                        <td>250.000</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>250.000</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>250.000</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">77</th>
                                        <td>Beban Perjalanan Dinas</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">78</th>
                                        <td>Beban Penyusutan Peralatan dan Meubeliar</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">79</th>
                                        <td>Beban Penyusutan Gedung dan Bangunan</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">80</th>
                                        <td>Beban Penyusutan Kendaraan</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">81</th>
                                        <td>Beban Pajak Air Permukaan</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">82</th>
                                        <td>Beban Pajak Bunga Bank</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">83</th>
                                        <td>Beban Pajak Daerah</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">84</th>
                                        <td>Beban Pajak Hiburan</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">85</th>
                                        <td>Beban Pajak Reklame</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">86</th>
                                        <td>Beban PPh 21</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">87</th>
                                        <td>Beban PPh 23</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">88</th>
                                        <td>Beban PPh 25</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">89</th>
                                        <td>Beban PPh 29</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">90</th>
                                        <td>Beban PADes</td> <!--// nama akun -->
                                        <td>50.000</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>50.000</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>50.000</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">91</th>
                                        <td>Beban Administrasi Umum dan Lainnya</td> <!--// nama akun -->
                                        <td>200.000</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>200.000</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td>200.000</td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">92</th>
                                        <td>Beban Bunga</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">93</th>
                                        <td>Beban Pajak</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">94</th>
                                        <td>Beban Denda</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">95</th>
                                        <td>Beban Diskon</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">96</th>
                                        <td>Beban Lain-lainnya</td> <!--// nama akun -->
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
                                        <th scope="row" rowspan="">97</th>
                                        <td><b>Jumlah</b></td> <!--// nama akun -->
                                        <td><b>884.000.000</b></td> <!--// neraca saldo debit -->
                                        <td><b>884.000.000</b></td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td><b>884.000.000</b></td> <!--// neraca saldo setelah debit -->
                                        <td><b>884.000.000</b></td>
                                        <td><b>88.150.000</b></td> <!--// laba rugi debit -->
                                        <td><b>719.000.000</b></td>
                                        <td><b>852.300.000</b></td> <!--// neraca debit -->
                                        <td><b>221.450.000</b></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">98</th>
                                        <td><b>Laba/Rugi Bersih</b></td> <!--// nama akun -->
                                        <td>-</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td><b>630.850.000</b></td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td><b>630.850.000</b></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">99</th>
                                        <td><b>Total</b></td> <!--// nama akun -->
                                        <td><b>884.000.000</b></td> <!--// neraca saldo debit -->
                                        <td><b>884.000.000</b></td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td><b>884.000.000</b></td> <!--// neraca saldo setelah debit -->
                                        <td><b>884.000.000</b></td>
                                        <td><b>719.000.000</b></td> <!--// laba rugi debit -->
                                        <td><b>719.000.000</b></td>
                                        <td><b>852.300.000</b></td> <!--// neraca debit -->
                                        <td><b>852.300.000</b></td>
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