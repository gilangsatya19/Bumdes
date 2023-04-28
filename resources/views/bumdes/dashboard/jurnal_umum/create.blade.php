@extends('bumdes.dashboard.layouts.main')

@section('content')
    {{-- stye untuk table responsive dan btn ubah/unduh --}}
    
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex justify-content-center mb-4" style="margin-top: -50px">
            
            <form action="/jurnal_umum/create" method="post" class="form-container">
                @csrf
                <div class="d-flex">
                    
                    <div>

                        <h1 >Form Tambah Data</h1>
                        <p class="fs-5" style="color: #8F9CA9">isi form dibawah ini untuk menambah data</p>
                        
                        {{-- <label for="tanggal" class="form-label"><b>Tanggal Transaksi</b></label>
                        <input type="text" class="form-control" placeholder="DD/MM/YYYY" name="tanggal" required> --}}
                        
                        {{-- <label for="nama_akun" ><b>Nama Akun</b></label>
                        <select class="form-select mb-3" aria-label=".form-select example" name="nama_akun">
                            
                            <option value="kas_debit">Kas(D)</option>
                        <option value="kas_kredit">Kas(K)</option>
                        <option value="modal_awal">Modal Awal</option>
                        <option value="piutang_desa">Piutang Desa</option>
                        <option value="pendapatan_dari_desa">Pendapatan dari Desa</option>
                        <option value="peralatan_dan_meubeliar">Peralatan dan Meubeliar</option>
                        <option value="piutang_dagang">Piutang Dagang</option>
                        <option value="penjualan">Penjualan</option>
                        
                        </select> --}}

                        <label for="nama_akun" class="form-label"><b>Nama Akun</b></label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Akun" name="nama_akun" required>

                        <label for="noref" class="form-label"><b>No Referensi</b></label>
                        <input type="text" class="form-control" placeholder="Masukkan Nomor Referensi" name="noref" required>

                        
                        <label for="debit" class="form-label"><b>Debit</b></label>
                        <input type="number" class="form-control" placeholder="Masukkan Jumlah Debit" name="debit" value="0" required>

                        <label for="kredit" class="form-label"><b>Kredit</b></label>
                        <input type="number" class="form-control" placeholder="Masukkan Jumlah Kredit" name="kredit" value="0" required>
                    
                        
                        <button type="submit" class="btn mt-5 fw-semibold" style="background-color: #3C4B64">Tambah</button>
                        <a href="/jurnal_umum" type="button" class="btn btn-success mt-3  fw-semibold" style="">Selesai</a>
                    </div>
                    
                </div>
            </form>
            
            
            
        </div>
        
    </div>
    </div>

    
@endsection