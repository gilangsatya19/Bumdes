@extends('bumdes.dashboard.layouts.main')

@section('content')
    <link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >JURNAL KHUSUS - PENGELUARAN KAS</h1>
            <div class="ms-auto">
                @include('bumdes.dashboard.jurnal_khusus.pengeluaran_kas.form')
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-borderless">
                <thead class="text-white text-center" style="background-color: #3C4B64">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Kelola Akun</th>
                        <th scope="col">Uraian Jurnal</th>
                        <th scope="col">Debit</th>
                        <th scope="col">Kredit</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-center">
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>04/01/2022</td>
                        {{-- Kelola Akun --}}
                        <td>1304</td>
                        {{-- Uraian Jurnal --}}
                        <td>Peralatan dan Meubeliar</td>
                        {{-- Debit --}}
                        <td>4.200.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>4.200.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>12/02/2022</td>
                        {{-- Kelola Akun --}}
                        <td>1111</td>
                        {{-- Uraian Jurnal --}}
                        <td>Perlengkapan</td>
                        {{-- Debit --}}
                        <td>250.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>250.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>10/02/2022</td>
                        {{-- Kelola Akun --}}
                        <td>6136</td>
                        {{-- Uraian Jurnal --}}
                        <td>Beban PADES</td>
                        {{-- Debit --}}
                        <td>50.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>50.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>14/02/2022</td>
                        {{-- Kelola Akun --}}
                        <td>1306</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kendaraan</td>
                        {{-- Debit --}}
                        <td>25.000.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>25.000.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>25/05/2022</td>
                        {{-- Kelola Akun --}}
                        <td>2101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Utang Usaha</td>
                        {{-- Debit --}}
                        <td>200.000.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>200.000.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>04/06/2022</td>
                        {{-- Kelola Akun --}}
                        <td>2101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Utang Usaha</td>
                        {{-- Debit --}}
                        <td>150.000.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>150.000.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>04/06/2022</td>
                        {{-- Kelola Akun --}}
                        <td>6113</td>
                        {{-- Uraian Jurnal --}}
                        <td>Beban administrasi bank</td>
                        {{-- Debit --}}
                        <td>50.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>50.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>07/08/2022</td>
                        {{-- Kelola Akun --}}
                        <td>6107</td>
                        {{-- Uraian Jurnal --}}
                        <td>Beban Listrik</td>
                        {{-- Debit --}}
                        <td>250.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>6108</td>
                        {{-- Uraian Jurnal --}}
                        <td>Beban Telepon dan Internet</td>
                        {{-- Debit --}}
                        <td>250.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>500.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>10/08/2022</td>
                        {{-- Kelola Akun --}}
                        <td>6109</td>
                        {{-- Uraian Jurnal --}}
                        <td>Beban Air</td>
                        {{-- Debit --}}
                        <td>150.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>150.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>03/09/2022</td>
                        {{-- Kelola Akun --}}
                        <td>6102</td>
                        {{-- Uraian Jurnal --}}
                        <td>Beban Honor Lembur</td>
                        {{-- Debit --}}
                        <td>5.000.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>5.000.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>05/09/2022</td>
                        {{-- Kelola Akun --}}
                        <td>6111</td>
                        {{-- Uraian Jurnal --}}
                        <td>Beban Transportasi</td>
                        {{-- Debit --}}
                        <td>100.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>100.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>06/09/2022</td>
                        {{-- Kelola Akun --}}
                        <td>6112</td>
                        {{-- Uraian Jurnal --}}
                        <td>Beban Parkir</td>
                        {{-- Debit --}}
                        <td>100.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>100.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>09/09/2022</td>
                        {{-- Kelola Akun --}}
                        <td>6114</td>
                        {{-- Uraian Jurnal --}}
                        <td>Beban Keamanan</td>
                        {{-- Debit --}}
                        <td>250.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>250.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>10/09/2022</td>
                        {{-- Kelola Akun --}}
                        <td>6118</td>
                        {{-- Uraian Jurnal --}}
                        <td>Beban Fotocopy</td>
                        {{-- Debit --}}
                        <td>200.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>200.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>11/09/2022</td>
                        {{-- Kelola Akun --}}
                        <td>6119</td>
                        {{-- Uraian Jurnal --}}
                        <td>Beban Pemeliharaan dan Perbaikan</td>
                        {{-- Debit --}}
                        <td>300.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>300.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>12/09/2022</td>
                        {{-- Kelola Akun --}}
                        <td>6116</td>
                        {{-- Uraian Jurnal --}}
                        <td>Beban ATK</td>
                        {{-- Debit --}}
                        <td>200.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>200.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>13/09/2023</td>
                        {{-- Kelola Akun --}}
                        <td>6115</td>
                        {{-- Uraian Jurnal --}}
                        <td>Beban Kebersihan</td>
                        {{-- Debit --}}
                        <td>50.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>50.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>14/09/2023</td>
                        {{-- Kelola Akun --}}
                        <td>6199</td>
                        {{-- Uraian Jurnal --}}
                        <td>Beban Administrasi Umum dan Lainnya</td>
                        {{-- Debit --}}
                        <td>200.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>200.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>15/09/2023</td>
                        {{-- Kelola Akun --}}
                        <td>6106</td>
                        {{-- Uraian Jurnal --}}
                        <td>Beban Seragam Pegawai</td>
                        {{-- Debit --}}
                        <td>300.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>300.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>
                    
                    <tr>
                        {{-- tanggal --}}
                        <td>16/09/2023</td>
                        {{-- Kelola Akun --}}
                        <td>6122</td>
                        {{-- Uraian Jurnal --}}
                        <td>Beban Konsumsi Rapat</td>
                        {{-- Debit --}}
                        <td>250.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>250.000</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td></td>
                        {{-- Uraian Jurnal --}}
                        <td></td>
                        {{-- Debit --}}
                        <td></td>
                        {{-- Kredit --}}
                        <td></td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
@endsection