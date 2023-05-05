@extends('bumdes.dashboard.layouts.main')

@section('content')
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <link href="{{asset('css/stylecalk.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >LAPORAN KEUANGAN - CALK</h1>
            <div class="ms-auto">
                @include('bumdes.dashboard.layouts.form')
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-borderless">
                <thead class="text-white text-center" style="background-color: #3C4B64">
                    <tr>
                        <th>Entitas Jasa / Dagang</th>
                    </tr>
                    <tr>
                        <th>Catatan Atas Laporan Keuangan</th>
                    </tr>
                    <tr>
                        <th>31 Desember 2022 dan 2021</th>
                    </tr>
                </thead>
            </table>
            <div>
                <form action="/action_page.php">
                    <label for="fname" class="flabel">1. Umum</label>
                    <a href="#divOne2" class="ftextarea">Masukkan Text</a>
                    <label for="fname" class="flabel">2. Ikhtisar Kebijakan Akuntansi</label>
                    <select id="###" name="###" class="fbox">
                        <option value="" disabled selected hidden>Pilihan Anda</option>
                        <option value="###">a. Pernyataan Kepatuhan</option>
                        <option value="###">b. Dasar Penyusunan</option>
                        <option value="###">c. Piutang Usaha</option>
                        <option value="###">d. Aset Tetap</option>
                        <option value="###">e. Pengakuan Pendapatan dan Beban</option>
                        <option value="###">f. Pajak Penghasilan</option>
                    </select>
                    <a href="#divOne2" class="ftextarea">Masukkan Text</a>
                    <select id="###" name="###" placeholder="Pilihan Anda" class="fbox">
                        <option value="" disabled selected hidden>Pilihan Anda</option>
                        <option value="###">3. Kas</option>
                        <option value="###">4. Giro</option>
                        <option value="###">5. Deposito</option>
                        <option value="###">6. Piutang Usaha</option>
                        <option value="###">7. Beban Dibayar Dimuka</option>
                        <option value="###">8. Utang Bank</option>
                        <option value="###">9. Ikhtisar Laba Rugi</option>
                        <option value="###">10.Pendapatan Penjualan</option>
                        <option value="###">11. Beban Lain-Lain</option>
                        <option value="###">12. Beban Pajak Penghasilan</option>
                    </select>
                    <a href="#divOne" class="linkbutton">Masukkan Text</a>
                </form>
                <div class="overlay" id="divOne">
                    <div class="wrapper">
                        <a href="#" class="close">&times;</a>
                        <div class="container">
                            <form class="form2">
                                <label>Keterangan</label>
                                <input type="text" placeholder="Isi Keterangan.." required>
                                <label>Tahun</label>
                                <input type="text" placeholder="Isi Rentang Tahun Pertama.." required>
                                <label>Tahun</label>
                                <input type="text" placeholder="Isi Rentang Tahun Terakhir.." required>
                                <input type="submit" value="Simpan">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="overlay" id="divOne2">
                    <div class="wrapper">
                        <a href="#" class="close">&times;</a>
                        <div class="container">
                            <form>
                                <textarea placeholder="Masukkan Text.." class="ftextarea"></textarea>
                                <input type="submit" value="Simpan">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection