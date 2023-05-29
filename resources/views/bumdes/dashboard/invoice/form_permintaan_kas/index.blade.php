@extends('bumdes.dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  
                  <!-- /.card -->
                    
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Formulir Permintaan Kas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="d-flex mb-3" >
                                <div class="ms-auto">
                                    <a href="/form_permintaan_kas/create" type="button" class="btn btn-primary" style="
                                    text-decoration: none; 
                                    color: white;
                                    background-color: #0b297c;
                                    color: white;
                                    padding: 16px 20px;
                                    border: none;
                                    cursor: pointer;
                                    opacity: 0.8;
                                    width: 150px;
                                    border-radius: 10px;
                                    font-size: 15px;
                                    font-weight: 500;">+ Tambah</a>
                                </div>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="text-center">
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Dana Untuk Departemen</th>
                                        <th>Dana Awal Kas Kecil</th>
                                        <th>Saldo</th>
                                        <th>Keterangan</th>
                                        <th>Total</th>
                                        <th>Bukti Transaksi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                
                                    <tr>
                                        @foreach ($datas as $data)
                                            <td>{{$data->tanggal->format('d F Y')}}</td>
                                            <td>{{$data->dana_untuk_departemen}}</td>
                                            <td>{{$data->dana_awal}}</td>
                                            <td>{{$data->saldo}}</td>
                                            <td>{{$data->keterangan}}</td>
                                            <td>{{$data->total}}</td>
                                            <td><button class="btn btn-primary btn-unduh">Unduh</button></td>
                                            <td>
                                                <a href="/form_permintaan_kas/{{$data->id}}/edit" class="nav-icon fas fa-edit"></a>
                                                
                                                <form action="/form_permintaan_kas/{{$data->id}}/delete" method="POST" class="d-inline">
                                                @csrf
                                                    <button class="fa fa-trash border-0" onclick="return confirm('Apakah Kamu Yakin Ingin Menghapus Data?')"></button>
                                                </form>
                                                
                                            </td>
                                        @endforeach
                                                          
                                    </tr>
                                
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </section>
    </div>
@endsection