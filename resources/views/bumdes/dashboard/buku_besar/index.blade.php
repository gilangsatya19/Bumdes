@extends('bumdes.dashboard.layouts.main')

@section('content')
<link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >BUKU BESAR</h1>
            <div class="ms-auto">
                @include('bumdes.dashboard.layouts.form')
            </div>
        </div>
        <div class="d-flex fs-5">
            <div class="me-5">

                <label for="nama_akun" ><b>Nama Akun</b></label>
                <select class="form-select mb-3 border-1 border-black" aria-label=".form-select example" name="nama_akun" style="max-width: 300px">
                    
                    <option value="kas" selected>Kas</option>
                    <option value="modal_awal">Modal Awal</option>
                    <option value="piutang_desa">Piutang Desa</option>
                    <option value="pendapatan_dari_desa">Pendapatan dari Desa</option>
                    <option value="peralatan_dan_meubeliar">Peralatan dan Meubeliar</option>
                    <option value="piutang_dagang">Piutang Dagang</option>
                    <option value="penjualan">Penjualan</option>
                    
                </select>
            </div>
            <div>

                <label for="no_akun"><b>No. Akun</b></label>
                <input type="no_akun" class="form-control border-1 border-black" id="no_akun" style="max-width: 300px">
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="text-white text-center" style="background-color: #3C4B64">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Debit</th>
                        <th scope="col">Kredit</th>
                        <th scope="col">Saldo</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-center">
                    <tr>
                        {{-- No --}}
                        <td>1</td>
                        {{-- tanggal --}}
                        <td>02/01/2022</td>
                        {{-- Keterangan --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>5.000.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                        {{-- Saldo --}}
                        <td>-</td>
                    </tr>

                    {{-- KAS --}}

                    <tr>
                        {{-- No --}}
                        <td>1</td>
                        {{-- tanggal --}}
                        <td>02/01/2022</td>
                        {{-- Keterangan --}}
                        <td>Penyertaan modal masyarakat</td>
                        {{-- Debit --}}
                        <td>5.000.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                        {{-- Saldo --}}
                        <td>5.000.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>2</td>
                        {{-- tanggal --}}
                        <td>02/01/2022</td>
                        {{-- Keterangan --}}
                        <td>Sewa dibayar di muka</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>12.000.000</td>
                        {{-- Saldo --}}
                        <td>-7.000.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>3</td>
                        {{-- tanggal --}}
                        <td>04/01/2022</td>
                        {{-- Keterangan --}}
                        <td>Peralatan dan meubeliar</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>4.200.000</td>
                        {{-- Saldo --}}
                        <td>-11.200.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>4</td>
                        {{-- tanggal --}}
                        <td>27/01/2022</td>
                        {{-- Keterangan --}}
                        <td>Piutang usaha</td>
                        {{-- Debit --}}
                        <td>1.200.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                        {{-- Saldo --}}
                        <td>-10.000.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>5</td>
                        {{-- tanggal --}}
                        <td>05/02/2022</td>
                        {{-- Keterangan --}}
                        <td>Pendapatan sewa</td>
                        {{-- Debit --}}
                        <td>350.000.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                        {{-- Saldo --}}
                        <td>340.000.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>6</td>
                        {{-- tanggal --}}
                        <td>08/02/2022</td>
                        {{-- Keterangan --}}
                        <td>Pendapatan jasa</td>
                        {{-- Debit --}}
                        <td>350.000.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                        {{-- Saldo --}}
                        <td>690.000.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>7</td>
                        {{-- tanggal --}}
                        <td>10/02/2022</td>
                        {{-- Keterangan --}}
                        <td>Piutang desa</td>
                        {{-- Debit --}}
                        <td>15.000.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                        {{-- Saldo --}}
                        <td>705.000.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>8</td>
                        {{-- tanggal --}}
                        <td>10/02/2022</td>
                        {{-- Keterangan --}}
                        <td>Beban PADES</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>50.000</td>
                        {{-- Saldo --}}
                        <td>704.950.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>9</td>
                        {{-- tanggal --}}
                        <td>12/02/2022</td>
                        {{-- Keterangan --}}
                        <td>Perlengkapan</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>250.000</td>
                        {{-- Saldo --}}
                        <td>704.700.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>10</td>
                        {{-- tanggal --}}
                        <td>14/02/2022</td>
                        {{-- Keterangan --}}
                        <td>Kendaraan</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>25.000.000</td>
                        {{-- Saldo --}}
                        <td>697.700.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>11</td>
                        {{-- tanggal --}}
                        <td>28/03/2022</td>
                        {{-- Keterangan --}}
                        <td>Tanah</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>100.000.000</td>
                        {{-- Saldo --}}
                        <td>597.700.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>12</td>
                        {{-- tanggal --}}
                        <td>17/04/2022</td>
                        {{-- Keterangan --}}
                        <td>Gedung dan bangunan</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>250.000.000</td>
                        {{-- Saldo --}}
                        <td>329.700.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>13</td>
                        {{-- tanggal --}}
                        <td>25/05/2022</td>
                        {{-- Keterangan --}}
                        <td>Utang usaha</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>200.000.000</td>
                        {{-- Saldo --}}
                        <td>129.700.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>14</td>
                        {{-- tanggal --}}
                        <td>04/06/2022</td>
                        {{-- Keterangan --}}
                        <td>Beban administrasi bank</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>50.000</td>
                        {{-- Saldo --}}
                        <td>129.650.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>15</td>
                        {{-- tanggal --}}
                        <td>07/06/2022</td>
                        {{-- Keterangan --}}
                        <td>Kas Kecil</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>2.500.000</td>
                        {{-- Saldo --}}
                        <td>127.150.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>16</td>
                        {{-- tanggal --}}
                        <td>01/07/2022</td>
                        {{-- Keterangan --}}
                        <td>Penyertaan Modal Desa</td>
                        {{-- Debit --}}
                        <td>10.000.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                        {{-- Saldo --}}
                        <td>137.150.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>17</td>
                        {{-- tanggal --}}
                        <td>01/07/2022</td>
                        {{-- Keterangan --}}
                        <td>Asuransi dibayar di muka</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>50.000.000</td>
                        {{-- Saldo --}}
                        <td>87.150.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>18</td>
                        {{-- tanggal --}}
                        <td>31/07/2022</td>
                        {{-- Keterangan --}}
                        <td>Utang Gaji dan Tunjangan</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>50.000.000</td>
                        {{-- Saldo --}}
                        <td>37.150.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>19</td>
                        {{-- tanggal --}}
                        <td>04/08/2022</td>
                        {{-- Keterangan --}}
                        <td>Utang Gaji dan Tunjangan</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>12.000.000</td>
                        {{-- Saldo --}}
                        <td>25.150.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>20</td>
                        {{-- tanggal --}}
                        <td>04/08/2022</td>
                        {{-- Keterangan --}}
                        <td>Utang Listrik</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>250.000</td>
                        {{-- Saldo --}}
                        <td>24.900.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>21</td>
                        {{-- tanggal --}}
                        <td>04/08/2022</td>
                        {{-- Keterangan --}}
                        <td>Utang Telepon & Internet</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>250.000</td>
                        {{-- Saldo --}}
                        <td>24.650.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>22</td>
                        {{-- tanggal --}}
                        <td>05/08/2022</td>
                        {{-- Keterangan --}}
                        <td>Beban Gaji dan Tunjangan</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>12.000.000</td>
                        {{-- Saldo --}}
                        <td>12.650.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>23</td>
                        {{-- tanggal --}}
                        <td>07/08/2022</td>
                        {{-- Keterangan --}}
                        <td>Utang Listrik</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>250.000</td>
                        {{-- Saldo --}}
                        <td>12.400.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>24</td>
                        {{-- tanggal --}}
                        <td>07/08/2022</td>
                        {{-- Keterangan --}}
                        <td>Utang Telepon & Internet</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>250.000</td>
                        {{-- Saldo --}}
                        <td>12.150.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>25</td>
                        {{-- tanggal --}}
                        <td>10/08/2022</td>
                        {{-- Keterangan --}}
                        <td>Beban Air</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>150.000</td>
                        {{-- Saldo --}}
                        <td>12.000.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>26</td>
                        {{-- tanggal --}}
                        <td>11/08/2022</td>
                        {{-- Keterangan --}}
                        <td>Pendapatan dari Desa</td>
                        {{-- Debit --}}
                        <td>750.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                        {{-- Saldo --}}
                        <td>12.750.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>27</td>
                        {{-- tanggal --}}
                        <td>30/08/2022</td>
                        {{-- Keterangan --}}
                        <td>Pendapatan Bantuan/Sumbangan/Hibah</td>
                        {{-- Debit --}}
                        <td>2.000.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                        {{-- Saldo --}}
                        <td>14.750.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>28</td>
                        {{-- tanggal --}}
                        <td>03/09/2022</td>
                        {{-- Keterangan --}}
                        <td>Beban Honor Lembur</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>5.000.000</td>
                        {{-- Saldo --}}
                        <td>9.750.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>29</td>
                        {{-- tanggal --}}
                        <td>05/09/2022</td>
                        {{-- Keterangan --}}
                        <td>Beban Transportasi</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>100.000</td>
                        {{-- Saldo --}}
                        <td>9.650.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>30</td>
                        {{-- tanggal --}}
                        <td>06/09/2022</td>
                        {{-- Keterangan --}}
                        <td>Beban Parkir</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>100.000</td>
                        {{-- Saldo --}}
                        <td>9.550.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>31</td>
                        {{-- tanggal --}}
                        <td>09/09/2022</td>
                        {{-- Keterangan --}}
                        <td>Beban Keamanan</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>250.000</td>
                        {{-- Saldo --}}
                        <td>9.300.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>32</td>
                        {{-- tanggal --}}
                        <td>10/09/2022</td>
                        {{-- Keterangan --}}
                        <td>Beban Fotocopy</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>200.000</td>
                        {{-- Saldo --}}
                        <td>9.100.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>33</td>
                        {{-- tanggal --}}
                        <td>11/09/2022</td>
                        {{-- Keterangan --}}
                        <td>Beban Pemeliharaan dan Perbaikan</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>300.000</td>
                        {{-- Saldo --}}
                        <td>8.800.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>34</td>
                        {{-- tanggal --}}
                        <td>12/09/2022</td>
                        {{-- Keterangan --}}
                        <td>Beban ATK</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>200.000</td>
                        {{-- Saldo --}}
                        <td>8.600.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>35</td>
                        {{-- tanggal --}}
                        <td>13/09/2022</td>
                        {{-- Keterangan --}}
                        <td>Beban Kebersihan</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>50.000</td>
                        {{-- Saldo --}}
                        <td>8.550.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>36</td>
                        {{-- tanggal --}}
                        <td>14/09/2022</td>
                        {{-- Keterangan --}}
                        <td>Beban Administrasi Umum dan Lainnya</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>200.000</td>
                        {{-- Saldo --}}
                        <td>8.350.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>37</td>
                        {{-- tanggal --}}
                        <td>15/09/2022</td>
                        {{-- Keterangan --}}
                        <td>Beban Seragam Pegawai</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>300.000</td>
                        {{-- Saldo --}}
                        <td>8.050.000</td>
                    </tr>
                    <tr>
                        {{-- No --}}
                        <td>38</td>
                        {{-- tanggal --}}
                        <td>16/09/2022</td>
                        {{-- Keterangan --}}
                        <td>Beban Konsumsi Rapat</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>250.000</td>
                        {{-- Saldo --}}
                        <td>7.800.000</td>
                    </tr>
                    


                </tbody>
            </table>
        </div>
    </div>
@endsection