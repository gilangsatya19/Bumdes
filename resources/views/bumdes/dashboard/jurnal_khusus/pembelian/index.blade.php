@extends('bumdes.dashboard.layouts.main')

@section('content')
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >JURNAL KHUSUS - PEMBELIAN</h1>
            <div class="ms-auto">
                @include('bumdes.dashboard.layouts.form')
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-borderless" style="">
                <thead class="text-white text-center" style="background-color: #3C4B64" >
                    <tr class="align-middle" >
                        <th scope="col" rowspan="3">Tanggal</th>
                        <th scope="col" rowspan="3">Keterangan</th>
                        <th scope="col" rowspan="3">Ref</th>
                        <th scope="col" colspan="4">Debit</th>
                        <th scope="col">Kredit</th>
                    </tr>
                    <tr class="align-top">
                        <th scope="col" colspan="2" rowspan="2">Pembelian</th>
                        <th scope="col" colspan="2">Serba Serbi</th>
                        <th scope="col" rowspan="2">Utang Dagang</th>
                    </tr>
                    <tr class="align-middle">
                        <th scope="col">Akun</th>
                        <th scope="col">Jumlah</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-center">
                    <tr>
                        <td>20/04/22</td>
                        <td>toko x</td>
                        <td>10000</td>
                        <td>Rp100.000</td>
                        <td></td>
                        <td>-</td>
                        <td>-</td>
                        <td>Rp100.000</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>toko y</td>
                        <td>10000</td>
                        <td>Rp200.000</td>
                        <td></td>
                        <td>-</td>
                        <td>-</td>
                        <td>Rp200.000</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>toko z</td>
                        <td>10000</td>
                        <td>Rp500.000</td>
                        <td></td>
                        <td>-</td>
                        <td>-</td>
                        <td>Rp500.000</td>
                    </tr>
                    <tr>
                        <td></td>    
                        <td>cv z</td>
                        <td>10000</td>
                        <td>Rp1.000.000</td>
                        <td></td>
                        <td>-</td>
                        <td>-</td>
                        <td>Rp1.000.000</td>
                    </tr>
                    <tr>
                        <td></td>    
                        <td>toko raos</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                        <td>-</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>    
                        <td>toko skb</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                        <td>-</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>    
                        <td>toko japra</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                        <td>-</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>    
                        <td>toko kimchi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                        <td>-</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>    
                        <td>toko jabrig</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                        <td>-</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>    
                        <td>toko liquid</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                        <td>-</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>    
                        <td>toko monorejo</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                        <td>-</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>    
                        <td>toko seven laundry</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                        <td>-</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>    
                        <td>toko barber shop</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>-</td>
                        <td>-</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection