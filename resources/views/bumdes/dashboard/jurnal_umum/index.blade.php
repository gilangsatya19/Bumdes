@extends('bumdes.dashboard.layouts.main')

@section('content')
    {{-- stye untuk table responsive dan btn ubah/unduh --}}
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >JURNAL UMUM</h1>
            <div class="ms-auto">
                @include('bumdes.dashboard.jurnal_umum.form')
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
                        @if (isset($jurnals))
                            @foreach ($jurnals as $jurnal)
                                @foreach ($jurnal->datas as $data)
                                <tr>
                                    <td>{{$jurnal->id}}</td>
                                    <td>{{$jurnal->tanggal}}</td>
                                    {{-- <td>{{$jurnal->datas}}</td> --}}
                                    <td>-</td>
                                    {{-- <td>{{$jurnal->datas->first()}}</td> --}}
                                    
                                            <td>{{$data->nama_akun}}</td>
                                            <td>{{$data->noref}}</td>
                                            @if ($data->debit == 0)
                                                <td>-</td>
                                                <td>{{$data->kredit}}</td>
                                            @else
                                                <td>{{$data->debit}}</td>
                                                <td>-</td>
                                            @endif
                                            <td><a href="" type="button" class="btn btn-primary btn-unduh">Unduh</a></td>
                                            <td><a href="/jurnal_umum/{{$data->id}}/edit" type="button" class="btn btn-primary btn-ubah">Ubah</a></td>
                                            
                                            
                                        </tr>
                                        
                                @endforeach
                            @endforeach
                        @endif
                    
                    
                </tbody>
            </table>
        </div>
    </div>

    
@endsection