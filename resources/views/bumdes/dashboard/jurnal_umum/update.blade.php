@extends('bumdes.dashboard.layouts.main')

@section('content')
    {{-- stye untuk table responsive dan btn ubah/unduh --}}
    
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex justify-content-center mb-4" style="margin-top: -50px">
            
            <form action="/jurnal_umum/{{$data->id}}/update" method="post" class="form-container">
                @csrf
                <div class="d-flex">
                    
                    <div>

                        <h1 >Edit Data</h1>
                        {{--
                            1 transaksi ~~ 2 Mb 
                            1 minggu = 50 transaksi
                            1 tahun = 52 minggu
                            52minggu x 50 transaksi = 2600 transaksi
                            2600 x 2 = 5200Mb

                            --}}
                        
                        

                        <label for="nama_akun" class="form-label"><b>Nama Akun</b></label>
                        <input type="text" class="form-control" value="{{isset($data)?$data->nama_akun:''}}" name="nama_akun" required>

                        <label for="noref" class="form-label"><b>No Referensi</b></label>
                        <input type="text" class="form-control" value="{{isset($data)?$data->noref:''}}" name="noref" required>

                        
                        <label for="debit" class="form-label"><b>Debit</b></label>
                        <input type="number" class="form-control" value="{{isset($data)?$data->debit:''}}" name="debit" required>

                        <label for="kredit" class="form-label"><b>Kredit</b></label>
                        <input type="number" class="form-control" value="{{isset($data)?$data->kredit:''}}" name="kredit" required>
                    
                        
                        <button type="submit" class="btn mt-5 fw-semibold" style="background-color: #3C4B64">Simpan</button>
                    </div>
                    
                </div>
            </form>
            
            
            
        </div>
        
    </div>
    </div>

    
@endsection