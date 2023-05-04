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

                        <label for="tanggal" ><b>Tanggal Transaksi</b></label>
                        <input type="text" placeholder="DD/MM/YYYY" name="tanggal" required>

                        <label for="keterangan" ><b>Keterangan</b></label>
                        <input type="text" placeholder="Ketik Masukkan.." name="Keterangan" required>

                        <label for="noref" ><b>Ref</b></label>
                        <input type="text" placeholder="Ketik Masukkan.." name="noref" required>

                        <h4>Debit</h4>
                        <label for="noref" ><b>Pembelian</b></label>
                        <input type="text" placeholder="Ketik Masukkan.." name="noref" required>

                        <h5>Serba Serbi</h5>
                        <label for="noref" ><b>Akun</b></label>
                        <input type="text" placeholder="Ketik Masukan.." name="noref">
                        <label for="noref" ><b>Jumlah</b></label>
                        <input type="text" placeholder="Ketik Masukkan" name="noref">

                        <div class="mb-4">
                        <label for="bukti_pembayaran"><b>Upload Bukti Pembayaran</b></label>
                        <input type="file" class="form-control"  name="bukti_pembayaran" required>
                        </div>
        
                        <button type="submit" class="btn" style="background-color: #3C4B64">Tambah</button>
                    </div>
                    
                </div>
            </form>
            
            
            
        </div>
        
    </div>
    </div>

    
@endsection