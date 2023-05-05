@extends('bumdes.dashboard.layouts.main')

@section('content')
    {{-- stye untuk table responsive dan btn ubah/unduh --}}
    
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex justify-content-center mb-4" style="margin-top: -50px">
            
            <form action="/penjualan/create/..." method="post" class="form-container">
                @csrf
                <div class="d-flex">
                    
                    <div>

                        <div class="text-center">
                            <h1>Form Tambah Data</h1>
                        </div>
                        <p class="fs-5" style="color: #8F9CA9">isi form dibawah ini untuk menambah data</p>

                        <label for="tanggal" class="fs-5"><b>Tanggal Transaksi</b></label>
                        <input type="text" placeholder="DD/MM/YYYY" name="tanggal" required>

                        <label for="no_faktur" class="fs-5"><b>No.Faktur</b></label>
                        <input type="text" placeholder="Ketik Masukkan.." name="tanggal" required>

                        <label for="keterangan" class="fs-5"><b>Keterangan</b></label>
                        <input type="text" placeholder="Ketik Masukkan.." name="Keterangan" required>

                        <label for="noref" class="fs-5"><b>Ref</b></label>
                        <input type="text" placeholder="Ketik Masukkan.." name="noref" required>

                        <label for="syarat_pembayaran" class="fs-5"><b>Syarat Pembayaran</b></label>
                        <input type="text" placeholder="Ketik Masukkan.." name="noref" required>

                        <h4>Debit</h4>
                        <label for="piutang_dagang" class="fs-5"><b>Piutang Dagang</b></label>
                        <input type="text" placeholder="Ketik Masukkan.." name="noref" required>

                        <h4>Kredit</h4>
                        <label for="penjualan" class="fs-5"><b>Penjualan</b></label>
                        <input type="text" placeholder="Ketik Masukkan.." name="noref" required>

                        <div class="mb-4">
                        <label for="bukti_pembayaran"><b>Upload Bukti Pembayaran</b></label>
                        <input type="file" class="form-control"  name="bukti_pembayaran" required>
                        </div>
        
                        <button type="submit" class="btn mt-5" style="background-color: #3C4B64">Tambah</button>
                    </div>
                    
                </div>
            </form>
            
            
            
        </div>
        
    </div>
    </div>

    
@endsection