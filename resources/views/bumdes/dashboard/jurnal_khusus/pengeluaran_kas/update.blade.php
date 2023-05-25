@extends('bumdes.dashboard.layouts.main')

@section('content')
<div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
    <div class="d-flex justify-content-center mb-4" style="margin-top: -50px">
        
        <form action="/pengeluaran_kas/{{$data->id}}/update" method="post" class="form-container">
            @csrf
            <div class="d-flex">
                
                <div>

                    <div class="text-center">
                        <h1>Form Ubah Data</h1>
                    </div>
                    <p class="fs-5" style="color: #8F9CA9">isi form dibawah ini untuk mengubah data</p>

                    <div class="mt-3">

                        <label for="nama_akun" class="form-label fs-4"><b>Uraian Jurnal</b></label>
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

                    <label for="debit" class="fs-5"><b>Debit</b></label>
                    <input type="number" name="debit" class="form-control bg-grey" value="{{isset($data)?$data->debit:''}}" required>

                    <label for="kredit" class="fs-5"><b>Kredit</b></label>
                    <input type="number" name="kredit" class="form-control bg-grey" value="{{isset($data)?$data->kredit:''}}" required>
    
                    <button type="submit" class="btn mt-5" style="background-color: #3C4B64">Simpan</button>
                </div>
                
            </div>
        </form>
        
        
        
    </div>
    
</div>
</div>
    
@endsection