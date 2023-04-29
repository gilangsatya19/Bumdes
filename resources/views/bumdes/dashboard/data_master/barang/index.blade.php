@extends('bumdes.dashboard.layouts.main')

@section('content')
    {{-- stye untuk table responsive dan btn ubah/unduh --}}
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >DATA MASTER - BARANG</h1>
            <div class="ms-auto">
                @include('bumdes.dashboard.layouts.form')
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="text-white text-center" style="background-color: #3C4B64">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga Jual</th>
                        <th scope="col">Harga Beli</th>
                        <th scope="col">Jumlah Barang</th>
                        <th scope="col">Aksi</th>
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
                        <th scope="row" rowspan="">01/01/22</th> <!-- tgl -->
                        <td>A001</td> <!-- kode barang -->
                        <td>Telur</td> <!-- nama barang -->
                        <td>-</td> <!-- harga jual -->
                        <td>-</td> <!-- harga beli -->
                        <td>100</td> <!-- Jumlah Barang -->
                        <td>-</td> <!-- aksi -->
                       
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    
@endsection