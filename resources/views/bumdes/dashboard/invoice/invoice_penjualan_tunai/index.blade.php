@extends('bumdes.dashboard.layouts.main')

@section('content')
    {{-- stye untuk table responsive dan btn ubah/unduh --}}
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >INVOICE PENJUALAN TUNAI</h1>
            <div class="ms-auto">
                @include('bumdes.dashboard.layouts.form')
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="text-white text-center" style="background-color: #3C4B64">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">No. Invoice</th>
                        <th scope="col">Nama Konsumen</th>
                        <th scope="col">Telp Konsumen</th>
                        <th scope="col">Barang</th>
                        <th scope="col">Jumlah Barang</th>
                        <th scope="col">Bukti Transaksi</th>
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
                            <th scope="row" rowspan="">20/04/23</th> <!-- tanggal -->
                            <td>1A001</td> <!-- no invoice -->
                            <td>Sulaiman</td> <!-- nama konsumen -->
                            <td>0821-2223-4433</td> <!-- telp konsumen --> 
                            <td>Telur</td> <!-- barang -->    
                            <td>10 kg</td> <!-- jumlah barang -->                  
                            <td><button class="btn btn-primary btn-unduh">Unduh</button></td>                       
                        </tr>
                </tbody>
            </table>
        </div>
    </div>

    
@endsection