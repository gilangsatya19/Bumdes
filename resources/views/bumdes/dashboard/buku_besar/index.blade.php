@extends('bumdes.dashboard.layouts.main')

@section('content')
<style>
    .tabcontent {
        display: none;
        padding: 6px 12px;
        
        border-top: none;
        }
    p.hide{
        visibility: hidden;
    }
</style>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  
                  <!-- /.card -->
                    
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Buku Besar</h3>
                        </div>

                        

                        <!-- /.card-header -->
                        <div class="card-body">
                            <div>
                                <ul class="nav tablinks">
                                    
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle text-black fw-bold fs-4" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Nama Akun</a>
                                      <ul class="dropdown-menu">
                                        @foreach ($nama_akuns as $nama_akun)
                                            @if ($nama_akun->id < '15' && $nama_akun->d_k != '')
                                                <li><a type="button" class="dropdown-item tablinks" onclick="openAkun(event, '{{$nama_akun->nama}}')">{{$nama_akun->nama}}</a></li>        
                                            @endif
                                        @endforeach
                                      </ul>
                                    </li>
                                    
                                </ul>
                            </div>
                            {{-- Kas --}}
                            <div id="Kas" class="tabcontent">
                                <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                                <h2>KAS</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        @foreach ($jurnals as $jurnal)
                                            @if ($jurnal->datas->first()->nama_akun == 'Kas')
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun != 'Kas')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('m F Y')}}</td>
                                                            <td>{{$data->nama_akun}}</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>-</td>
                                                            <td>{{formatRupiah($saldo = $saldo + $data->kredit)}}</td>
                                                        </tr>    
                                                    @endif
                                                @endforeach
                                            @else
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun == 'Kas')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('d F Y')}}</td>
                                                            <td>{{$jurnal->datas->first()->nama_akun}}</td>
                                                            <td>-</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                            {{-- /.Kas --}}
                            {{-- Kas di Bank A --}}
                            <div id="Kas di Bank A" class="tabcontent">
                                <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                                <h2>KAS DI BANK A</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        @foreach ($jurnals as $jurnal)
                                            @if ($jurnal->datas->first()->nama_akun == 'Kas di Bank A')
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun != 'Kas di Bank A')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('m F Y')}}</td>
                                                            <td>{{$data->nama_akun}}</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>-</td>
                                                            <td>{{formatRupiah($saldo = $saldo + $data->kredit)}}</td>
                                                        </tr>    
                                                    @endif
                                                @endforeach
                                            @else
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun == 'Kas di Bank A')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('d F Y')}}</td>
                                                            <td>{{$jurnal->datas->first()->nama_akun}}</td>
                                                            <td>-</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                            {{-- /.Kas di Bank A --}}
                            {{-- Kas di Bank B --}}
                            <div id="Kas di Bank B" class="tabcontent">
                                <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                                <h2>KAS DI BANK B</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        @foreach ($jurnals as $jurnal)
                                            @if ($jurnal->datas->first()->nama_akun == 'Kas di Bank B')
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun != 'Kas di Bank B')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('m F Y')}}</td>
                                                            <td>{{$data->nama_akun}}</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>-</td>
                                                            <td>{{formatRupiah($saldo = $saldo + $data->kredit)}}</td>
                                                        </tr>    
                                                    @endif
                                                @endforeach
                                            @else
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun == 'Kas di Bank B')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('d F Y')}}</td>
                                                            <td>{{$jurnal->datas->first()->nama_akun}}</td>
                                                            <td>-</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                            {{-- /.Kas di Bank B --}}
                            {{-- Kas di Bank C --}}
                            <div id="Kas di Bank C" class="tabcontent">
                                <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                                <h2>KAS DI BANK C</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        @foreach ($jurnals as $jurnal)
                                            @if ($jurnal->datas->first()->nama_akun == 'Kas di Bank C')
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun != 'Kas di Bank C')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('m F Y')}}</td>
                                                            <td>{{$data->nama_akun}}</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>-</td>
                                                            <td>{{formatRupiah($saldo = $saldo + $data->kredit)}}</td>
                                                        </tr>    
                                                    @endif
                                                @endforeach
                                            @else
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun == 'Kas di Bank C')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('d F Y')}}</td>
                                                            <td>{{$jurnal->datas->first()->nama_akun}}</td>
                                                            <td>-</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                            {{-- /.Kas di Bank C --}}
                            {{-- Kas Kecil --}}
                            <div id="Kas Kecil" class="tabcontent">
                                <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                                <h2>KAS KECIL</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        @foreach ($jurnals as $jurnal)
                                            @if ($jurnal->datas->first()->nama_akun == 'Kas Kecil')
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun != 'Kas Kecil')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('m F Y')}}</td>
                                                            <td>{{$data->nama_akun}}</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>-</td>
                                                            <td>{{formatRupiah($saldo = $saldo + $data->kredit)}}</td>
                                                        </tr>    
                                                    @endif
                                                @endforeach
                                            @else
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun == 'Kas Kecil')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('d F Y')}}</td>
                                                            <td>{{$jurnal->datas->first()->nama_akun}}</td>
                                                            <td>-</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                            {{-- /.Kas Kecil --}}
                            {{-- Giro --}}
                            <div id="Giro" class="tabcontent">
                                <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                                <h2>GIRO</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        @foreach ($jurnals as $jurnal)
                                            @if ($jurnal->datas->first()->nama_akun == 'Giro')
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun != 'Giro')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('m F Y')}}</td>
                                                            <td>{{$data->nama_akun}}</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>-</td>
                                                            <td>{{formatRupiah($saldo = $saldo + $data->kredit)}}</td>
                                                        </tr>    
                                                    @endif
                                                @endforeach
                                            @else
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun == 'Giro')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('d F Y')}}</td>
                                                            <td>{{$jurnal->datas->first()->nama_akun}}</td>
                                                            <td>-</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                            {{-- /.Giro --}}
                            {{-- Deposito --}}
                            <div id="Deposito" class="tabcontent">
                                <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                                <h2>DEPOSITO</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        @foreach ($jurnals as $jurnal)
                                            @if ($jurnal->datas->first()->nama_akun == 'Deposito')
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun != 'Deposito')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('m F Y')}}</td>
                                                            <td>{{$data->nama_akun}}</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>-</td>
                                                            <td>{{formatRupiah($saldo = $saldo + $data->kredit)}}</td>
                                                        </tr>    
                                                    @endif
                                                @endforeach
                                            @else
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun == 'Deposito')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('d F Y')}}</td>
                                                            <td>{{$jurnal->datas->first()->nama_akun}}</td>
                                                            <td>-</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                            {{-- /.Deposito --}}
                            {{-- Piutang Usaha --}}
                            <div id="Piutang Usaha" class="tabcontent">
                                <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                                <h2>PIUTANG USAHA</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        @foreach ($jurnals as $jurnal)
                                            @if ($jurnal->datas->first()->nama_akun == 'Piutang Usaha')
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun != 'Piutang Usaha')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('m F Y')}}</td>
                                                            <td>{{$data->nama_akun}}</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>-</td>
                                                            <td>{{formatRupiah($saldo = $saldo + $data->kredit)}}</td>
                                                        </tr>    
                                                    @endif
                                                @endforeach
                                            @else
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun == 'Piutang Usaha')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('d F Y')}}</td>
                                                            <td>{{$jurnal->datas->first()->nama_akun}}</td>
                                                            <td>-</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                            {{-- /.Piutang Usaha --}}
                            {{-- Persediaan Barang Dagangan --}}
                            <div id="Persediaan Barang Dagangan" class="tabcontent">
                                <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                                <h2>PERSEDIAAN BARANG DAGANGAN</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        @foreach ($jurnals as $jurnal)
                                            @if ($jurnal->datas->first()->nama_akun == 'Persediaan Barang Dagangan')
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun != 'Persediaan Barang Dagangan')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('m F Y')}}</td>
                                                            <td>{{$data->nama_akun}}</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>-</td>
                                                            <td>{{formatRupiah($saldo = $saldo + $data->kredit)}}</td>
                                                        </tr>    
                                                    @endif
                                                @endforeach
                                            @else
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun == 'Persediaan Barang Dagangan')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('d F Y')}}</td>
                                                            <td>{{$jurnal->datas->first()->nama_akun}}</td>
                                                            <td>-</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                            {{-- /.Persediaan Barang Dagangan --}}
                            {{-- Persediaan Makan dan Minuman --}}
                            <div id="Persediaan Makan dan Minuman" class="tabcontent">
                                <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                                <h2>PERSEDIAAN MAKAN DAN MINUMAN</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        @foreach ($jurnals as $jurnal)
                                            @if ($jurnal->datas->first()->nama_akun == 'Persediaan Makan dan Minuman')
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun != 'Persediaan Makan dan Minuman')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('m F Y')}}</td>
                                                            <td>{{$data->nama_akun}}</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>-</td>
                                                            <td>{{formatRupiah($saldo = $saldo + $data->kredit)}}</td>
                                                        </tr>    
                                                    @endif
                                                @endforeach
                                            @else
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun == 'Persediaan Makan dan Minuman')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('d F Y')}}</td>
                                                            <td>{{$jurnal->datas->first()->nama_akun}}</td>
                                                            <td>-</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                            {{-- /.Persediaan Makan dan Minuman --}}
                            {{-- Perlengkapan --}}
                            <div id="Perlengkapan" class="tabcontent">
                                <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                                <h2>PERLENGKAPAN</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        @foreach ($jurnals as $jurnal)
                                            @if ($jurnal->datas->first()->nama_akun == 'Perlengkapan')
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun != 'Perlengkapan')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('m F Y')}}</td>
                                                            <td>{{$data->nama_akun}}</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>-</td>
                                                            <td>{{formatRupiah($saldo = $saldo + $data->kredit)}}</td>
                                                        </tr>    
                                                    @endif
                                                @endforeach
                                            @else
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun == 'Perlengkapan')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('d F Y')}}</td>
                                                            <td>{{$jurnal->datas->first()->nama_akun}}</td>
                                                            <td>-</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                            {{-- /.Perlengkapan --}}
                            {{-- Sewa Dibayar Dimuka --}}
                            <div id="Sewa Dibayar Dimuka" class="tabcontent">
                                <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                                <h2>SEWA DIBAYAR DIMUKA</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        @foreach ($jurnals as $jurnal)
                                            @if ($jurnal->datas->first()->nama_akun == 'Sewa Dibayar Dimuka')
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun != 'Sewa Dibayar Dimuka')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('m F Y')}}</td>
                                                            <td>{{$data->nama_akun}}</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>-</td>
                                                            <td>{{formatRupiah($saldo = $saldo + $data->kredit)}}</td>
                                                        </tr>    
                                                    @endif
                                                @endforeach
                                            @else
                                                @foreach ($jurnal->datas as $data)
                                                    @if ($data->nama_akun == 'Sewa Dibayar Dimuka')
                                                        <tr>
                                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                                            <td>{{$jurnal->tanggal->format('d F Y')}}</td>
                                                            <td>{{$jurnal->datas->first()->nama_akun}}</td>
                                                            <td>-</td>
                                                            <td>{{$data->formatRupiah('kredit')}}</td>
                                                            <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                            {{-- /.Sewa Dibayar Dimuka --}}
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

    
    <script>
        function openAkun(evt, akunName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(akunName).style.display = "block";
          evt.currentTarget.className += " active";
        }
    </script>
@endsection