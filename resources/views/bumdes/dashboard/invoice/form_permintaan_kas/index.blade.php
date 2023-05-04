@extends('bumdes.dashboard.layouts.main')

@section('content')
    {{-- stye untuk table responsive dan btn ubah/unduh --}}
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >FORMULIR PERMINTAAN KAS</h1>
            <div class="ms-auto">
                @include('bumdes.dashboard.layouts.form')
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="text-white text-center" style="background-color: #3C4B64">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Dana Untuk Departemen</th>
                        <th scope="col">Dana Awal Kas Kecil</th>
                        <th scope="col">Saldo</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Total</th>
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
                            <th scope="row" rowspan="">01/04/23 - 30/04/23</th> <!-- tanggal -->
                            <td>Keuangan</td> <!-- dana untuk departemen -->
                            <td>10.000.000</td> <!-- dana awal kas kecil -->
                            <td>2.000.000</td> <!-- saldo -->                            
                            <td><button class="btn btn-primary btn-ubah">Read More</button></td> <!-- keterangan -->
                            <td>8.000.000</td> <!-- total -->
                            <td><button class="btn btn-primary btn-unduh">Unduh</button></td>                       
                        </tr>
                        
                </tbody>
            </table>
        </div>
    </div>

    
@endsection