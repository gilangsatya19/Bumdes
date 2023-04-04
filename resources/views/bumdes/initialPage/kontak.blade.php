@extends('layouts.initial')
 
@section('title', 'Kontak Kami')
 
@section('sidebar')
    @parent
 
    
@endsection
 
@section('content')

    <div class="container my-5" style="height:80%">
        <div class="d-flex justify-content-center mt-5">
            <div class="text-center">
                <p style="font-size: 20px;color:black">Kontak Kami</p>
                <h3 class="fw-bold">Kontak Informasi</h3>
            </div>
            
        </div>
        <div  >
            <table class="d-flex justify-content-center my-5">
                <tr>
                    <td colspan="2">
                        <table >
                            <tr class="mb-4 " >
                                <td>
                                    <img class="me-4 my-3" src="{{asset('BUMDES/assets/halaman_awal/Alamat.png')}}" width="70px" height="70px" alt="Alamat-icon">
                                </td>
                                <td>Alamat <br> Gedung D, Bandung Techno Park, Bandung Indonesia</td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="me-4 my-3" src="{{asset('BUMDES/assets/halaman_awal/Telepon.png')}}" width="70px" height="70px alt="Telepon-icon">
                                </td>
                                <td>Telepon <br> +62 815-7214-5069</td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="me-4 my-3" src="{{asset('BUMDES/assets/halaman_awal/Email.png')}}" width="70px" height="70px alt="Email-icon">
                                </td>
                                <td>Email <br> siabdeswebapp@gmail.com</td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <img class="d-flex justify-content-end" src="{{asset('BUMDES/assets/halaman_awal/customerSupport.png')}}" alt="customer-support-icon">
                    </td>
                </tr>
            </table>
        </div>
    </div>

@endsection