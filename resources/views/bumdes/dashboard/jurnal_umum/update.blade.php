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
                        

                        <div class="mt-3">

                            <label for="nama_akun" class="form-label fs-4"><b>Nama Akun</b></label>
                            <div class="">
                                
                                <select id="nama_akun" name="nama_akun" class="fs-5">
                                    @foreach ($nama_akuns as $nama_akun)
                                    @if ($nama_akun->d_k != '')
                                        <option value="{{$nama_akun->nama}}">{{$nama_akun->nama}}</option>
                                    @endif
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>


                        
                        <label for="debit" class="form-label fs-4 mt-3"><b>Debit</b></label>
                        <input type="number" class="form-control fs-5" placeholder="Masukkan Jumlah Debit" name="debit" value="{{isset($data)?$data->debit:''}}" required>

                        <label for="kredit" class="form-label fs-4 mt-3"><b>Kredit</b></label>
                        <input type="number" class="form-control fs-5" placeholder="Masukkan Jumlah Kredit" name="kredit" value="{{isset($data)?$data->kredit:''}}" required>
                    
                        
                        <button type="submit" class="btn mt-5 fw-semibold" style="background-color: #3C4B64">Simpan</button>
                        
                    </div>
                    
                </div>
            </form>
            
            
            
        </div>
        
    </div>
    </div>
    
@endsection