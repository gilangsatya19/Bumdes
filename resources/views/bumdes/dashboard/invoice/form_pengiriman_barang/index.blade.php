@extends('bumdes.dashboard.layouts.main')

@section('content')
    {{-- stye untuk table responsive dan btn ubah/unduh --}}
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >FORMULIR PENGIRIMAN BARANG</h1>
            <div class="ms-auto">
                @include('bumdes.dashboard.layouts.form')
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="text-white text-center" style="background-color: #3C4B64">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama Penerima</th>
                        <th scope="col">Alamat Penerima</th>
                        <th scope="col">Telp Penerima</th>
                        <th scope="col">Nama Pengirim</th>
                        <th scope="col">Alamat Pengirim</th>
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
                            <th scope="row" rowspan="">17/04/23</th> <!-- tanggal -->
                            <td>Syamsudin (BUMDes Sejahtera)</td> <!-- nama penerima -->
                            <td>Jl. Sukapura No 1006 Bandung</td> <!-- alamat penerima -->
                            <td>0899-9923-3522</td> <!-- telp penerima --> 
                            <td>Mamat (Sachio Baso dan Agen Telur)</td> <!-- nama pengirim -->    
                            <td>Jl. Kamarasan Residence BI D1 No. 3, Buah Batu, Bojongsoang, Bandung, Jawa Barat 40287</td> <!-- alamat pengirim -->                  
                            <td><button class="btn btn-primary btn-unduh">Unduh</button></td>                       
                        </tr>
                </tbody>
            </table>
        </div>
    </div>

    
@endsection