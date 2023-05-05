@extends('bumdes.dashboard.layouts.main')

@section('content')
<link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
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

    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >BUKU BESAR</h1>
            
        </div>
       
        <div>
            <ul class="nav nav-tabs">
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-black fw-bold fs-4" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Nama Akun</a>
                  <ul class="dropdown-menu">
                    @foreach ($nama_akuns as $nama_akun)
                        {{-- @if ($nama_akun->d_k != '')
                            <li><a type="button" class="dropdown-item tablinks" onclick="openAkun(event, '{{$nama_akun->nama}}')">{{$nama_akun->nama}}</a></li>        
                        @endif --}}
                        @if ($nama_akun->id < '15' && $nama_akun->d_k != '')
                            <li><a type="button" class="dropdown-item tablinks" onclick="openAkun(event, '{{$nama_akun->nama}}')">{{$nama_akun->nama}}</a></li>        
                        @endif
                    @endforeach
                    
                    {{-- <li><a type="button" class="dropdown-item tablinks" onclick="openAkun(event, 'another')">Another action</a></li>
                    <li><a type="button" class="dropdown-item tablinks" onclick="openAkun(event, 'something')">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li> --}}
                  </ul>
                </li>
                
            </ul>
        </div>
        <div class="table-responsive">
            {{-- Kas --}}
            <div id="Kas" class="tabcontent">
                <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                <p class="fs-3 fw-bold mx-3">KAS</p>
                <table class="table table-striped table-borderless">
                    <thead class="text-white text-center" style="background-color: #3C4B64">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Debit</th>
                            <th scope="col">Kredit</th>
                            <th scope="col">Saldo</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-center">
                        @foreach ($jurnals as $jurnal)
                            @if ($jurnal->datas->first()->nama_akun == 'Kas')
                                @foreach ($jurnal->datas as $data)
                                    @if ($data->nama_akun != 'Kas')
                                        <tr>
                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                            <td>{{$jurnal->tanggal}}</td>
                                            <td>{{$data->nama_akun}}</td>
                                            <td>{{formatRupiah($data->kredit)}}</td>
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
                                            <td>{{$jurnal->tanggal}}</td>
                                            <td>{{$jurnal->datas->first()->nama_akun}}</td>
                                            <td>-</td>
                                            <td>{{formatRupiah($data->kredit)}}</td>
                                            <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div id="Kas di Bank A" class="tabcontent">
                <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                <p class="fs-3 fw-bold mx-3">KAS DI BANK A</p>
                <table class="table table-striped table-borderless">
                    <thead class="text-white text-center" style="background-color: #3C4B64">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Debit</th>
                            <th scope="col">Kredit</th>
                            <th scope="col">Saldo</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-center">
                        @foreach ($jurnals as $jurnal)
                            @if ($jurnal->datas->first()->nama_akun == 'Kas di Bank A')
                                @foreach ($jurnal->datas as $data)
                                    @if ($data->nama_akun != 'Kas di Bank A')
                                        <tr>
                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                            <td>{{$jurnal->tanggal}}</td>
                                            <td>{{$data->nama_akun}}</td>
                                            <td>{{formatRupiah($data->kredit)}}</td>
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
                                            <td>{{$jurnal->tanggal}}</td>
                                            <td>{{$jurnal->datas->first()->nama_akun}}</td>
                                            <td>-</td>
                                            <td>{{formatRupiah($data->kredit)}}</td>
                                            <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div id="Kas di Bank B" class="tabcontent">
                <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                <p class="fs-3 fw-bold mx-3">KAS DI BANK B</p>
                <table class="table table-striped table-borderless">
                    <thead class="text-white text-center" style="background-color: #3C4B64">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Debit</th>
                            <th scope="col">Kredit</th>
                            <th scope="col">Saldo</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-center">
                        @foreach ($jurnals as $jurnal)
                            @if ($jurnal->datas->first()->nama_akun == 'Kas di Bank B')
                                @foreach ($jurnal->datas as $data)
                                    @if ($data->nama_akun != 'Kas di Bank B')
                                        <tr>
                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                            <td>{{$jurnal->tanggal}}</td>
                                            <td>{{$data->nama_akun}}</td>
                                            <td>{{formatRupiah($data->kredit)}}</td>
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
                                            <td>{{$jurnal->tanggal}}</td>
                                            <td>{{$jurnal->datas->first()->nama_akun}}</td>
                                            <td>-</td>
                                            <td>{{formatRupiah($data->kredit)}}</td>
                                            <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div id="Kas di Bank C" class="tabcontent">
                <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                <p class="fs-3 fw-bold mx-3">KAS DI BANK C</p>
                <table class="table table-striped table-borderless">
                    <thead class="text-white text-center" style="background-color: #3C4B64">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Debit</th>
                            <th scope="col">Kredit</th>
                            <th scope="col">Saldo</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-center">
                        @foreach ($jurnals as $jurnal)
                            @if ($jurnal->datas->first()->nama_akun == 'Kas di Bank C')
                                @foreach ($jurnal->datas as $data)
                                    @if ($data->nama_akun != 'Kas di Bank C')
                                        <tr>
                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                            <td>{{$jurnal->tanggal}}</td>
                                            <td>{{$data->nama_akun}}</td>
                                            <td>{{formatRupiah($data->kredit)}}</td>
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
                                            <td>{{$jurnal->tanggal}}</td>
                                            <td>{{$jurnal->datas->first()->nama_akun}}</td>
                                            <td>-</td>
                                            <td>{{formatRupiah($data->kredit)}}</td>
                                            <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div id="Kas Kecil" class="tabcontent">
                <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                <p class="fs-3 fw-bold mx-3">KAS KECIL</p>
                <table class="table table-striped table-borderless">
                    <thead class="text-white text-center" style="background-color: #3C4B64">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Debit</th>
                            <th scope="col">Kredit</th>
                            <th scope="col">Saldo</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-center">
                        @foreach ($jurnals as $jurnal)
                            @if ($jurnal->datas->first()->nama_akun == 'Kas Kecil')
                                @foreach ($jurnal->datas as $data)
                                    @if ($data->nama_akun != 'Kas Kecil')
                                        <tr>
                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                            <td>{{$jurnal->tanggal}}</td>
                                            <td>{{$data->nama_akun}}</td>
                                            <td>{{formatRupiah($data->kredit)}}</td>
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
                                            <td>{{$jurnal->tanggal}}</td>
                                            <td>{{$jurnal->datas->first()->nama_akun}}</td>
                                            <td>-</td>
                                            <td>{{formatRupiah($data->kredit)}}</td>
                                            <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div id="Giro" class="tabcontent">
                <p class="hide">{{$iterasi = 0}}{{$saldo = 0}}</p>
                <p class="fs-3 fw-bold mx-3">GIRO</p>
                <table class="table table-striped table-borderless">
                    <thead class="text-white text-center" style="background-color: #3C4B64">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Debit</th>
                            <th scope="col">Kredit</th>
                            <th scope="col">Saldo</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-center">
                        @foreach ($jurnals as $jurnal)
                            @if ($jurnal->datas->first()->nama_akun == 'Giro')
                                @foreach ($jurnal->datas as $data)
                                    @if ($data->nama_akun != 'Giro')
                                        <tr>
                                            <td>{{$iterasi = $iterasi + 1}}</td>
                                            <td>{{$jurnal->tanggal}}</td>
                                            <td>{{$data->nama_akun}}</td>
                                            <td>{{formatRupiah($data->kredit)}}</td>
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
                                            <td>{{$jurnal->tanggal}}</td>
                                            <td>{{$jurnal->datas->first()->nama_akun}}</td>
                                            <td>-</td>
                                            <td>{{formatRupiah($data->kredit)}}</td>
                                            <td>{{formatRupiah($saldo = $saldo - $data->kredit)}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

            
            
        </div>
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