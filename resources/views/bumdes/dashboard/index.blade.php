@extends('bumdes.dashboard.layouts.main')

@section('content')
    <div style="margin-top:3rem;background-color:white" class="px-5 rounded-3 pb-1">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <h1 class="h2">Selamat Datang, {{auth()->user()->nama}} di {{auth()->user()->company->nama}}</h1>

        </div>
    </div>

    <div class="d-flex justify-content-center border-0">

        <div class="card mx-4 my-5 border-0" style="width: 18rem;background-color: #D9D9D9;">
            <div class="card-body rounded-4" style="background-color: #38C976">
                <p class="card-text"><small class=" text-white">25/10/2021</small></p>
                <h5 class="card-title fs-4 text-white">Total Pemasukan</h5>
                <p class="card-text fs-5 fw-semibold text-white">Rp. 22.500.000</p>
            </div>
        </div>
        <div class="card mx-4 my-5 border-0" style="width: 18rem;background-color: #D9D9D9;">
            <div class="card-body rounded-4" style="background-color: #FE5050">
                <p class="card-text"><small class=" text-white">25/10/2021</small></p>
                <h5 class="card-title fs-4 text-white">Total Pengeluaran</h5>
                <p class="card-text fs-5 fw-semibold text-white">Rp. 22.500.000</p>
            </div>
        </div>
        <div class="card mx-4 my-5 border-0" style="width: 18rem;background-color: #D9D9D9;">
            <div class="card-body rounded-4" style="background-color: #3EAEFF">
                <p class="card-text"><small class=" text-white">25/10/2021</small></p>
                <h5 class="card-title fs-4 text-white">Laba Bersih</h5>
                <p class="card-text fs-5 fw-semibold text-white">Rp. 22.500.000</p>
            </div>
        </div>
        <div class="card mx-4 my-5 border-0" style="width: 18rem;background-color: #D9D9D9;">
            <div class="card-body rounded-4" style="background-color: #FFA23A">
                <p class="card-text"><small class=" text-white">25/10/2021</small></p>
                <h5 class="card-title fs-4 text-white">Laba Kotor</h5>
                <p class="card-text fs-5 fw-semibold text-white">Rp. 22.500.000</p>
            </div>
        </div>
    </div>


@endsection
