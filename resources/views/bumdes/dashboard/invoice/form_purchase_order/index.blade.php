@extends('bumdes.dashboard.layouts.main')

@section('content')
    {{-- stye untuk table responsive dan btn ubah/unduh --}}
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >FORMULIR PURCHASE ORDER</h1>
            <div class="ms-auto">
                @include('bumdes.dashboard.layouts.form')
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="text-white text-center" style="background-color: #3C4B64">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">No PO</th>
                        <th scope="col">Barang</th>
                        <th scope="col">Jumlah Barang</th>
                        <th scope="col">Vendor</th>
                        <th scope="col">Tanggal Pengiriman</th>
                        <th scope="col">Bukti Transaksi</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-center">
                    {{-- 
                        foreach datas as data
                        
                        <tr>
                            <td>data->tanggal</td>
                            <td>data->nopo</td>
                            <td>data->barang</td>
                            <td>data->jumlahbarang</td>
                            <td>data->vendor</td>
                            <td>data->tanggalpengiriman</td>                            
                            <td>btn</td>
                            
                        </tr>
                        endforeach
                     --}}
                         <tr>
                            <th scope="row" rowspan="">12/04/22</th> <!-- tanggal -->
                            <td>A1002F4</td> <!-- no po -->
                            <td>Telur</td> <!-- barang -->
                            <td>100 kg</td> <!-- jumlah barang --> 
                            <td>mamat</td> <!-- vendor -->    
                            <td>17/04/23</td> <!-- tanggal pengiriman -->                  
                            <td><button class="btn btn-primary btn-unduh">Unduh</button></td>                       
                        </tr>

                        
                </tbody>
            </table>
        </div>
    </div>

    
@endsection