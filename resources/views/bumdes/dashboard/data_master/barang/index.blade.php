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
                            <h3 class="card-title">Data Master - Barang</h3>
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
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Kode Barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Satuan</th>
                                    <th scope="col">Stok Awal</th>
                                    <th scope="col">Harga Jual</th>
                                    <th scope="col">Harga Beli</th>
                                    <th scope="col">Jumlah Barang Masuk</th>
                                    <th scope="col">Jumlah Barang Keluar</th>
                                    <th scope="col">Stok Akhir</th>
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
                                        <th scope="row" rowspan="">01/01/22</th> <!-- tgl -->
                                        <td>A001</td> <!-- kode barang -->
                                        <td>Telur</td> <!-- nama barang -->
                                        <td>Kilogram</td> <!-- Satuan -->
                                        <td>100</td> <!-- stock awal -->
                                        <td>25.000/kg</td> <!-- harga jual -->
                                        <td>20.000/kg</td> <!-- harga beli -->
                                        <td>-</td> <!-- Jumlah Barang Masuk -->
                                        <td>-</td> <!-- Jumlah Barang Keluar -->
                                        <td>100</td> <!-- stock akhir -->                       
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">01/01/22</th> <!-- tgl -->
                                        <td>A002</td> <!-- kode barang -->
                                        <td>Shuttlecock</td> <!-- nama barang -->
                                        <td>Buah</td> <!-- Satuan -->
                                        <td>50</td> <!-- stock awal -->
                                        <td>10.000/buah</td> <!-- harga jual -->
                                        <td>7.000/buah</td> <!-- harga beli -->
                                        <td>-</td> <!-- Jumlah Barang Masuk -->
                                        <td>-</td> <!-- Jumlah Barang Keluar -->
                                        <td>50</td> <!-- stock akhir -->                       
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">06/01/22</th> <!-- tgl -->
                                        <td>A002</td> <!-- kode barang -->
                                        <td>Shuttlecock</td> <!-- nama barang -->
                                        <td>Buah</td> <!-- Satuan -->
                                        <td>50</td> <!-- stock awal -->
                                        <td>10.000/buah</td> <!-- harga jual -->
                                        <td>7.000/buah</td> <!-- harga beli -->
                                        <td>-</td> <!-- Jumlah Barang Masuk -->
                                        <td>5</td> <!-- Jumlah Barang Keluar -->
                                        <td>45</td> <!-- stock akhir -->                       
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">08/01/22</th> <!-- tgl -->
                                        <td>A002</td> <!-- kode barang -->
                                        <td>Shuttlecock</td> <!-- nama barang -->
                                        <td>Buah</td> <!-- Satuan -->
                                        <td>45</td> <!-- stock awal -->
                                        <td>10.000/buah</td> <!-- harga jual -->
                                        <td>7.000/buah</td> <!-- harga beli -->
                                        <td>-</td> <!-- Jumlah Barang Masuk -->
                                        <td>8</td> <!-- Jumlah Barang Keluar -->
                                        <td>37</td> <!-- stock akhir -->                       
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">08/01/22</th> <!-- tgl -->
                                        <td>A001</td> <!-- kode barang -->
                                        <td>Telur</td> <!-- nama barang -->
                                        <td>Kilogram</td> <!-- Satuan -->
                                        <td>100</td> <!-- stock awal -->
                                        <td>25.000/kg</td> <!-- harga jual -->
                                        <td>20.000/kg</td> <!-- harga beli -->
                                        <td>-</td> <!-- Jumlah Barang Masuk -->
                                        <td>10</td> <!-- Jumlah Barang Keluar -->
                                        <td>90</td> <!-- stock akhir -->                       
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">12/01/22</th> <!-- tgl -->
                                        <td>A001</td> <!-- kode barang -->
                                        <td>Telur</td> <!-- nama barang -->
                                        <td>Kilogram</td> <!-- Satuan -->
                                        <td>90</td> <!-- stock awal -->
                                        <td>25.000/kg</td> <!-- harga jual -->
                                        <td>20.000/kg</td> <!-- harga beli -->
                                        <td>-</td> <!-- Jumlah Barang Masuk -->
                                        <td>7</td> <!-- Jumlah Barang Keluar -->
                                        <td>83</td> <!-- stock akhir -->                       
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">02/01/22</th> <!-- tgl -->
                                        <td>A003</td> <!-- kode barang -->
                                        <td>AMDK</td> <!-- nama barang -->
                                        <td>Karton</td> <!-- Satuan -->
                                        <td>150</td> <!-- stock awal -->
                                        <td>-</td> <!-- harga jual -->
                                        <td>-</td> <!-- harga beli -->
                                        <td>-</td> <!-- Jumlah Barang Masuk -->
                                        <td>-</td> <!-- Jumlah Barang Keluar -->
                                        <td>150</td> <!-- stock akhir -->                       
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">03/02/22</th> <!-- tgl -->
                                        <td>A001</td> <!-- kode barang -->
                                        <td>Telur</td> <!-- nama barang -->
                                        <td>Kilogram</td> <!-- Satuan -->
                                        <td>83</td> <!-- stock awal -->
                                        <td>25.000/kg</td> <!-- harga jual -->
                                        <td>20.000/kg</td> <!-- harga beli -->
                                        <td>-</td> <!-- Jumlah Barang Masuk -->
                                        <td>16</td> <!-- Jumlah Barang Keluar -->
                                        <td>67</td> <!-- stock akhir -->                       
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">05/03/22</th> <!-- tgl -->
                                        <td>A003</td> <!-- kode barang -->
                                        <td>AMDK</td> <!-- nama barang -->
                                        <td>Karton</td> <!-- Satuan -->
                                        <td>150</td> <!-- stock awal -->
                                        <td>-</td> <!-- harga jual -->
                                        <td>-</td> <!-- harga beli -->
                                        <td>-</td> <!-- Jumlah Barang Masuk -->
                                        <td>30</td> <!-- Jumlah Barang Keluar -->
                                        <td>120</td> <!-- stock akhir -->                       
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">06/03/22</th> <!-- tgl -->
                                        <td>A002</td> <!-- kode barang -->
                                        <td>Shuttlecock</td> <!-- nama barang -->
                                        <td>Buah</td> <!-- Satuan -->
                                        <td>37</td> <!-- stock awal -->
                                        <td>10.000/buah</td> <!-- harga jual -->
                                        <td>7.000/buah</td> <!-- harga beli -->
                                        <td>13</td> <!-- Jumlah Barang Masuk -->
                                        <td>-</td> <!-- Jumlah Barang Keluar -->
                                        <td>50</td> <!-- stock akhir -->                       
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">08/03/22</th> <!-- tgl -->
                                        <td>A001</td> <!-- kode barang -->
                                        <td>Telur</td> <!-- nama barang -->
                                        <td>Kilogram</td> <!-- Satuan -->
                                        <td>67</td> <!-- stock awal -->
                                        <td>25.000/kg</td> <!-- harga jual -->
                                        <td>20.000/kg</td> <!-- harga beli -->
                                        <td>13</td> <!-- Jumlah Barang Masuk -->
                                        <td>-</td> <!-- Jumlah Barang Keluar -->
                                        <td>80</td> <!-- stock akhir -->                       
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">08/03/22</th> <!-- tgl -->
                                        <td>A002</td> <!-- kode barang -->
                                        <td>Shuttlecock</td> <!-- nama barang -->
                                        <td>Buah</td> <!-- Satuan -->
                                        <td>50</td> <!-- stock awal -->
                                        <td>10.000/buah</td> <!-- harga jual -->
                                        <td>7.000/buah</td> <!-- harga beli -->
                                        <td>-</td> <!-- Jumlah Barang Masuk -->
                                        <td>20</td> <!-- Jumlah Barang Keluar -->
                                        <td>30</td> <!-- stock akhir -->                       
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">09/03/22</th> <!-- tgl -->
                                        <td>A001</td> <!-- kode barang -->
                                        <td>Telur</td> <!-- nama barang -->
                                        <td>Kilogram</td> <!-- Satuan -->
                                        <td>80</td> <!-- stock awal -->
                                        <td>25.000/kg</td> <!-- harga jual -->
                                        <td>20.000/kg</td> <!-- harga beli -->
                                        <td>-</td> <!-- Jumlah Barang Masuk -->
                                        <td>35</td> <!-- Jumlah Barang Keluar -->
                                        <td>45</td> <!-- stock akhir -->                       
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">10/03/22</th> <!-- tgl -->
                                        <td>A003</td> <!-- kode barang -->
                                        <td>AMDK</td> <!-- nama barang -->
                                        <td>Karton</td> <!-- Satuan -->
                                        <td>120</td> <!-- stock awal -->
                                        <td>-</td> <!-- harga jual -->
                                        <td>-</td> <!-- harga beli -->
                                        <td>-</td> <!-- Jumlah Barang Masuk -->
                                        <td>17</td> <!-- Jumlah Barang Keluar -->
                                        <td>103</td> <!-- stock akhir -->                       
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">10/03/22</th> <!-- tgl -->
                                        <td>A002</td> <!-- kode barang -->
                                        <td>Shuttlecock</td> <!-- nama barang -->
                                        <td>Buah</td> <!-- Satuan -->
                                        <td>30</td> <!-- stock awal -->
                                        <td>10.000/buah</td> <!-- harga jual -->
                                        <td>7.000/buah</td> <!-- harga beli -->
                                        <td>5</td> <!-- Jumlah Barang Masuk -->
                                        <td>-</td> <!-- Jumlah Barang Keluar -->
                                        <td>35</td> <!-- stock akhir -->                       
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