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
                                    @foreach($nama_akuns as $nama_akun)
                                        @if($nama_akun->detailakun->d_k != '')
                                        <tr>
                                            <th scope="row" rowspan="">{{$i += 1}}</th>
                                            <td>{{$nama_akun->nama}}</td> <!-- // nama akun -->
                                            @if  ($nama_akun->detailakun->saldo > 0)
                                                <td>{{formatRupiah($nama_akun->detailakun->saldo)}}</td> <!-- neraca saldo debit -->
                                                <td>-</td> 
                                            @elseif ($nama_akun->detailakun->saldo < 0)
                                                <td>-</td> 
                                                <td>{{formatRupiah($nama_akun->detailakun->saldo * -1)}}</td> <!-- neraca saldo kredit -->
                                            @else
                                                <td>-</td>
                                                <td>-</td>
                                            @endif

                                            @if ($nama_akun->detailakun->penyesuaian > 0)
                                                <td>{{formatRupiah($nama_akun->detailakun->penyesuaian)}}</td> <!-- penyesuaian debit -->
                                                <td>-</td> 
                                            @elseif($nama_akun->detailakun->penyesuaian < 0)
                                                <td>-</td> 
                                                <td>{{formatRupiah($nama_akun->detailakun->penyesuaian * -1)}}</td> <!-- penyesuaian kredit -->
                                            @else
                                                <td>-</td>
                                                <td>-</td>
                                            @endif

                                            @if  ($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian > 0)
                                                <td>{{formatRupiah($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian)}}</td> <!-- neraca setelahnya debit -->
                                                <td>-</td> 
                                            @elseif ($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian < 0)
                                                <td>-</td> 
                                                <td>{{formatRupiah(($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian) * -1)}}</td> <!-- neraca setelahnya kredit -->
                                            @else
                                                <td>-</td>
                                                <td>-</td>
                                            @endif
                                            @if($i <= 44)
                                                <td>-</td> <!--// laba rugi debit -->
                                                <td>-</td>

                                                @if ($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian > 0)
                                                    <td>{{formatRupiah($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian)}}</td> <!-- neraca debit -->
                                                    <td>-</td> 
                                                @elseif($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian < 0)
                                                    <td>-</td> 
                                                    <td>{{formatRupiah(($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian) * -1)}}</td> <!-- neraca kredit -->
                                                @else
                                                    <td>-</td>
                                                    <td>-</td>
                                                @endif
                                            @else
                                            

                                                @if ($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian > 0)
                                                    <td>{{formatRupiah($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian)}}</td> <!-- Laba rugi debit -->
                                                    <td>-</td> 
                                                @elseif($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian < 0)
                                                    <td>-</td> 
                                                    <td>{{formatRupiah(($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian) * -1)}}</td> <!-- Laba rugi kredit -->
                                                @else
                                                    <td>-</td>
                                                    <td>-</td>
                                                @endif

                                                <td>-</td> <!--// Neraca debit -->
                                                <td>-</td>
                                            @endif
                                            <td>
                                                <a href="/wtb/{{$nama_akun->detailakun->id}}/edit" class="nav-icon fas fa-edit"></a>
                                            </td> 
                                        </tr>
                                        @endif

                                    @endforeach
                                    
                                    <tr>
                                        <th scope="row" rowspan="">97</th>
                                        <td><b>Jumlah</b></td> <!--// nama akun -->
                                        <td colspan='2'><b>{{formatRupiah($saldo_akhir->akun)}}</b></td> <!--// neraca saldo -->
                                        <td colspan='2'><b>{{formatRupiah($saldo_akhir->penyesuaian)}}</b></td> <!--//penyesuaian -->
                                        <td colspan='2'><b>{{formatRupiah($saldo_akhir->neraca_setelahnya)}}</b></td> <!--// neraca saldo setelah -->
                                        <td colspan='2'><b>{{formatRupiah($saldo_akhir->pendapatan)}}</b></td> <!--// laba rugi -->
                                        <td colspan='2'><b>{{formatRupiah($saldo_akhir->neraca)}}</b></td> <!--// neraca  -->
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">97</th>
                                        <td><b>Laba/Rugi Bersih</b></td> <!--// nama akun -->
                                        <td colspan='2'><b>-</b></td> <!--// neraca saldo -->
                                        <td colspan='2'><b>-</b></td> <!--//penyesuaian -->
                                        <td colspan='2'><b>-</b></td> <!--// neraca saldo setelah -->
                                        <td colspan='2'><b>{{formatRupiah($saldo_akhir->beban)}}</b></td> <!--// laba rugi -->
                                        <td colspan='2'><b>-</b></td> <!--// neraca  -->
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">97</th>
                                        <td><b>Total</b></td> <!--// nama akun -->
                                        <td colspan='2'><b>{{formatRupiah($saldo_akhir->akun)}}</b></td> <!--// neraca saldo -->
                                        <td colspan='2'><b>{{formatRupiah($saldo_akhir->penyesuaian)}}</b></td> <!--//penyesuaian -->
                                        <td colspan='2'><b>{{formatRupiah($saldo_akhir->neraca_setelahnya)}}</b></td> <!--// neraca saldo setelah -->
                                        <td colspan='2'><b>{{formatRupiah($saldo_akhir->pendapatan_bersih)}}</b></td> <!--// laba rugi -->
                                        <td colspan='2'><b>{{formatRupiah($saldo_akhir->neraca)}}</b></td> <!--// neraca  -->
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