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
                            <h3 class="card-title">Data Master - Vendor</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="d-flex mb-3" >
                                <div class="ms-auto">
                                    <div>
                                        @include('bumdes.dashboard.jurnal_umum.form')
                                    </div>
                                </div>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="text-center" style="background-color:#3C4B64; color:white">
                                    <tr>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama Perusahaan</th>
                                    <th scope="col">Nama PIC</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Nomor Telepon</th>
                                    <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                {{-- 
                                    foreach datas as data
                                        <tr>
                                            <td>data->id</td>
                                            <td>data->tanggal</td>
                                            foreach items as item
                                            <td>item->nama_akun</td>
                                            <td>item->noref</td>
                                            if item->debit = 0
                                                <td>-</td>
                                                <td>item->kredit</td>
                                            else
                                                <td>item->debit</td>
                                                <td>-</td>
                                            endif
                                            <td>btn</td>
                                            <td>btn</td>
                                        </tr>
                                    endforeach
                                --}}
                                    <tr>
                                        <th scope="row" rowspan="">001</th> <!-- kode -->
                                        <td>PT Muawanah Al Ma'soem</td> <!-- nama perusahaan -->
                                        <td>-</td> <!-- nama pic -->
                                        <td>Jl. Raya Cikalang No.168, Cimekar, Kec. Cileunyi, Kabupaten Bandung, Jawa Barat 40393</td> <!-- alamat -->
                                        <td>0811-2275-555</td> <!-- nomor telepon -->
                                        <td>-</td> <!-- aksi -->
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">002</th> <!-- kode -->
                                        <td>Sachio Baso dan Agen telur</td> <!-- nama perusahaan -->
                                        <td>-</td> <!-- nama pic -->
                                        <td>Jl. Kamarasan residence Bl. D1 No.3, Buahbatu, Bojongsoang, Bandung, Jawa Barat 40287, Indonesia, Kota Bandung, Jawa Barat.</td> <!-- alamat -->
                                        <td>0877-0055-8668</td> <!-- nomor telepon -->
                                        <td>-</td> <!-- aksi -->
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">003</th> <!-- kode -->
                                        <td>Rairaka sport</td> <!-- nama perusahaan -->
                                        <td>-</td> <!-- nama pic -->
                                        <td>J. Raya Bojongsoang No. 229 Kota Bandung, Jawa Barat</td> <!-- alamat -->
                                        <td>0857-2116-5695</td> <!-- nomor telepon -->
                                        <td>-</td> <!-- aksi -->
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">004</th> <!-- kode -->
                                        <td>Air al masoem bojongsoang</td> <!-- nama perusahaan -->
                                        <td>-</td> <!-- nama pic -->
                                        <td>Perum Griya Bandung Asri, Blk. I No.47, Bojongsoang, Kec. Bojongsoang, Kabupaten Bandung, Jawa Barat 40288</td> <!-- alamat -->
                                        <td>0811-2194-362</td> <!-- nomor telepon -->
                                        <td>-</td> <!-- aksi -->
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">005</th> <!-- kode -->
                                        <td>Toko Sembako Anugrah Mandiri</td> <!-- nama perusahaan -->
                                        <td>-</td> <!-- nama pic -->
                                        <td>Cangkuang Kulon, Dayeuhkolot, Kabupaten Bandung</td> <!-- alamat -->
                                        <td>0812-7170-6505</td> <!-- nomor telepon -->
                                        <td>-</td> <!-- aksi -->
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