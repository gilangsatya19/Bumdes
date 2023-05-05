@extends('bumdes.dashboard.layouts.main')

@section('content')
    {{-- stye untuk table responsive dan btn ubah/unduh --}}
    
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex justify-content-center mb-4" style="margin-top: -50px">
            
            <form action="/pembelian/create/..." method="post" class="form-container">
                @csrf
                <div class="d-flex">
                    
                    <div>

                        <div class="text-center">
                            <h1>Form Tambah Data</h1>
                        </div>
                        <p class="fs-5" style="color: #8F9CA9">isi form dibawah ini untuk menambah data</p>

                        <label for="tanggal" class="fs-5"><b>Tanggal</b></label>
                        <input type="text" placeholder="DD/MM/YYYY" name="tanggal" required>

                        <label for="keterangan" class="fs-5"><b>Keterangan</b></label>
                        <input type="text" placeholder="Ketik Masukkan.." name="Keterangan" required>

                        <label for="noref" class="fs-5"><b>Ref</b></label>
                        <input type="text" placeholder="Ketik Masukkan.." name="noref" required>

                        <h4>Debit</h4>
                        <label for="pembelian" class="fs-5"><b>Pembelian</b></label>
                        <input type="number" name="pembelian" class="form-control bg-grey" value="0" required>

                        <label for="akun" class="fs-5"><b>Akun</b></label>
                        <input type="text" placeholder="Ketik Masukan.." name="noref">
                        <label for="jumlah" class="fs-5"><b>Jumlah</b></label>
                        <input type="text" placeholder="Ketik Masukkan" name="noref">

                        <h4>Kredit</h4>
                        <label for="utang_dagang" class="fs-5"><b>Utang Dagang</b></label>
                        <input type="number" name="utang-dagang" class="form-control" value="0" required> 
        
                        <button type="submit" class="btn" style="background-color: #3C4B64">Tambah</button>
                    </div>
                    
                </div>
            </form>
            
            
            
        </div>
        
    </div>
    </div>

    
@endsection