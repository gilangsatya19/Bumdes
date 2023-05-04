@extends('bumdes.dashboard.layouts.main')

@section('content')
<link href="{{asset('css/table-resp-btn.css')}}" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >JURNAL KHUSUS - PEMASUKAN KAS</h1>
            <div class="ms-auto">
                @include('bumdes.dashboard.jurnal_khusus.pemasukan_kas.form')
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-borderless">
                <thead class="text-white text-center " style="background-color: #3C4B64">
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
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>5.000.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>3101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Penyertaan Modal Desa</td>
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
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>1.200.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1108</td>
                        {{-- Uraian Jurnal --}}
                        <td>Piutang Usaha</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>1.200.000</td>
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
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>350.000.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>4304</td>
                        {{-- Uraian Jurnal --}}
                        <td>Pendapatan Sewa</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>350.000.000</td>
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
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>350.000.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>4305</td>
                        {{-- Uraian Jurnal --}}
                        <td>Pendapatan Jasa</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>350.000.000</td>
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
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>15.000.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1115</td>
                        {{-- Uraian Jurnal --}}
                        <td>Piutang desa</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>15.000.000</td>
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
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1102</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas di Bank A</td>
                        {{-- Debit --}}
                        <td>50.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>7101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Pendapatan Bunga</td>
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
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>10.000.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>3102</td>
                        {{-- Uraian Jurnal --}}
                        <td>Penyertaan Modal Desa</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>10.000.000</td>
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
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>750.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>7102</td>
                        {{-- Uraian Jurnal --}}
                        <td>Pendapatan dari Desa</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>750.000</td>
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
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>1101</td>
                        {{-- Uraian Jurnal --}}
                        <td>Kas</td>
                        {{-- Debit --}}
                        <td>2.000.000</td>
                        {{-- Kredit --}}
                        <td>-</td>
                    </tr>
                    <tr>
                        {{-- tanggal --}}
                        <td></td>
                        {{-- Kelola Akun --}}
                        <td>7103</td>
                        {{-- Uraian Jurnal --}}
                        <td>Pendapatan Bantuan/Sumbangan/Hibah</td>
                        {{-- Debit --}}
                        <td>-</td>
                        {{-- Kredit --}}
                        <td>2.000.000</td>
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