@extends('bumdes.dashboard.layouts.main')

@section('content')
<link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >JURNAL KHUSUS - PEMASUKAN KAS</h1>
            <div class="ms-auto">
                @include('bumdes.dashboard.jurnal_khusus.pemasukan_kas.form')
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-borderless">
                <thead class="text-white text-center " style="background-color: #3C4B64">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Kelola Akun</th>
                        <th scope="col">Uraian Jurnal</th>
                        <th scope="col">Debit</th>
                        <th scope="col">Kredit</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-center">
                    @if (isset($jurnals))
                            @foreach ($jurnals as $jurnal)
                                @foreach ($jurnal->datas as $data)
                                <tr>
                                    <td>{{$jurnal->id}}</td>
                                    <td>{{$jurnal->tanggal}}</td>
                                    
                                    
                                    <td>{{$data->noref}}</td>
                                    <td>{{$data->nama_akun}}</td>
                                    @if ($data->debit == 0)
                                        <td>-</td>
                                        <td>{{formatRupiah($data->kredit)}}</td>
                                    @else
                                        <td>{{formatRupiah($data->debit)}}</td>
                                        <td>-</td>
                                    @endif
                                </tr>
                                @endforeach
                            @endforeach
                        @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection