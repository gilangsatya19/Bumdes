@extends('bumdes.dashboard.layouts.main')

@section('content')
    {{-- stye untuk table responsive dan btn ubah/unduh --}}
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >DATA MASTER - Kode Rekening</h1>
            <div>
                
            </div>
            
        </div>
        <label for="jenis_akun" class="fs-4"><b> Jenis Account </b></label>
        <select class="form-select mb-3 border-1 border-black" aria-label=".form-select example" name="jenis_akun" style="max-width: 300px">
                
            <option value="kas" selected>Rill Account</option>
            <option value="modal_awal">Nominal Account</option>
            
        </select>
        <div class="table-responsive">
            <h2>Rill Account</h2>
            <table class="table table-striped table-borderless">
                <thead class="text-white text-center" style="background-color: #3C4B64">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Rekening</th>
                        <th scope="col">Nama Akun</th>
                        <th scope="col">D/K</th>
                        
                    </tr>
                </thead>
                <tbody class="fw-semibold text-center">
                    @foreach ($datas as $data)
                        @if ($data->id < 57)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->kode_rekening}}</td>
                            </tr>    
                        @endif
                    @endforeach
                </tbody>
            </table>
            <h2>Nominal Account</h2>
            <table class="table table-striped table-borderless">
                <thead class="text-white text-center" style="background-color: #3C4B64">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Rekening</th>
                        <th scope="col">Nama Akun</th>
                        <th scope="col">D/K</th>
                        
                    </tr>
                </thead>
                <tbody class="fw-semibold text-center">
                    @foreach ($datas as $data)
                        @if ($data->id >= 57)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->kode_rekening}}</td>
                            </tr>    
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    
@endsection