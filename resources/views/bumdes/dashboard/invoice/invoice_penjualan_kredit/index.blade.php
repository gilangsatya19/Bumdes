@extends('bumdes.dashboard.layouts.main')

@section('content')
    {{-- stye untuk table responsive dan btn ubah/unduh --}}
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >INVOICE PENJUALAN KREDIT</h1>
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
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telp</th>
                        <th scope="col">Tanggal Jatuh Tempo</th>
                        <th scope="col">Barang</th>
                        <th scope="col">Jumlah Barang</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-center">
                    {{-- 
                        foreach datas as data
                        <tr>
                            <td>data->tanggal</td>
                            <td>data->no_invoice</td>
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
                            <th scope="row" rowspan="">21/04/23</th> <!-- tanggal -->
                            <td>1B001</td> <!-- no invoice -->
                            <td>Dono</td> <!-- nama -->
                            <td>sukabirus</td> <!-- alamat  --> 
                            <td>0823-5678-0091</td> <!-- telpon -->    
                            <td>21/05/23</td> <!-- tanggal jatuh tempo -->
                            <td>Telur</td> <!-- barang -->
                            <td>25 kg</td> <!-- jumlah barang -->                  
                            <td><button class="btn btn-primary btn-unduh">Unduh</button></td>                       
                        </tr>
                </tbody>
            </table>
        </div>
    </div>

    
@endsection