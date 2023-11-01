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
                                <h3 class="card-title">Working Trial Balance</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="pt-3 mb-3">
                                    <div>
                                        <a href="/jurnal_penyesuaian">
                                            <button class="open-button">Tambah Jurnal Penyesuaian</button>
                                        </a>
                                        {{-- @include('bumdes.dashboard.wtb.form') --}}
                                    </div>
                                </div>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr class="align-middle">
                                            <th rowspan="2">No.</th>
                                            <th rowspan="2">Nama Akun</th>
                                            <th colspan="2">Neraca Saldo</th>
                                            <th colspan="2">Penyesuaian</th>
                                            <th colspan="2">Neraca Setelahnya</th>
                                            <th colspan="2">Laba Rugi</th>
                                            <th colspan="2">Posisi Keuangan</th>
                                            {{-- <th rowspan="2">Action</th> --}}
                                        </tr>
                                        <tr class="align-top">
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">

                                        @foreach ($nama_akuns as $nama_akun)
                                            @if ($nama_akun->detailakun->d_k != '')
                                                @if ($i < 44)
                                                    <tr>
                                                        <th scope="row" rowspan="">{{ $i += 1 }}</th>
                                                        <td>{{ $nama_akun->nama }}</td> <!-- // nama akun -->
                                                        <!-- saldo normal debit -->
                                                        @if ($nama_akun->detailakun->d_k == 'Debit')
                                                            <!-- neraca saldo -->
                                                            @if ($nama_akun->detailakun->saldo > 0)
                                                                <td>{{ formatRupiah($nama_akun->detailakun->saldo) }}</td>
                                                                <!-- neraca saldo debit -->
                                                                <td>-</td>
                                                                <p hidden>
                                                                    {{ $neraca_saldo_debit += $nama_akun->detailakun->saldo }}
                                                                </p>
                                                            @elseif($nama_akun->detailakun->saldo < 0)
                                                                <td>-</td> <!-- neraca saldo kredit -->
                                                                <td>{{ formatRupiah($nama_akun->detailakun->saldo * -1) }}
                                                                </td>
                                                                <p hidden>
                                                                    {{ $neraca_saldo_kredit += $nama_akun->detailakun->saldo * -1 }}
                                                                </p>
                                                            @else
                                                                <td>-</td>
                                                                <td>-</td>
                                                            @endif

                                                            <!-- Penyesuaian -->
                                                            @if ($nama_akun->detailakun->penyesuaian > 0)
                                                                <td>{{ formatRupiah($nama_akun->detailakun->penyesuaian) }}
                                                                </td> <!-- penyesuaian debit -->
                                                                <td>-</td>
                                                                <p hidden>
                                                                    {{ $penyesuaian_debit += $nama_akun->detailakun->penyesuaian }}
                                                                </p>
                                                            @elseif($nama_akun->detailakun->penyesuaian < 0)
                                                                <td>-</td>
                                                                <td>{{ formatRupiah($nama_akun->detailakun->penyesuaian * -1) }}
                                                                </td> <!-- penyesuaian kredit -->
                                                                <p hidden>
                                                                    {{ $penyesuaian_kredit += $nama_akun->detailakun->penyesuaian * -1 }}
                                                                </p>
                                                            @else
                                                                <td>-</td>
                                                                <td>-</td>
                                                            @endif

                                                            <!-- Neraca Setelahnya -->
                                                            @if ($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian > 0)
                                                                <td>{{ formatRupiah($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian) }}
                                                                </td> <!-- neraca setelahnya debit -->
                                                                <td>-</td>
                                                                <p hidden>
                                                                    {{ $neraca_setelahnya_debit += $nama_akun->detailakun->penyesuaian + $nama_akun->detailakun->saldo }}
                                                                </p>
                                                            @elseif($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian < 0)
                                                                <td>-</td>
                                                                <td>{{ formatRupiah(($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian) * -1) }}
                                                                </td> <!-- neraca setelahnya kredit -->
                                                                <p hidden>
                                                                    {{ $neraca_setelahnya_kredit += ($nama_akun->detailakun->penyesuaian + $nama_akun->detailakun->saldo) * -1 }}
                                                                </p>
                                                            @else
                                                                <td>-</td>
                                                                <td>-</td>
                                                            @endif

                                                            <!-- Laba Rugi -->
                                                            <td>-</td>
                                                            <td>-</td>

                                                            <!-- Neraca -->
                                                            @if ($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian > 0)
                                                                <td>{{ formatRupiah($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian) }}
                                                                </td> <!-- neraca debit -->
                                                                <td>-</td>
                                                                <p hidden>
                                                                    {{ $neraca_debit += $nama_akun->detailakun->penyesuaian + $nama_akun->detailakun->saldo }}
                                                                </p>
                                                            @elseif($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian < 0)
                                                                <td>-</td>
                                                                <td>{{ formatRupiah(($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian) * -1) }}
                                                                </td> <!-- neraca kredit -->
                                                                <p hidden>
                                                                    {{ $neraca_kredit += ($nama_akun->detailakun->penyesuaian + $nama_akun->detailakun->saldo) * -1 }}
                                                                </p>
                                                            @else
                                                                <td>-</td>
                                                                <td>-</td>
                                                            @endif
                                                            <!-- saldo normal kredit -->
                                                        @else
                                                            <!-- neraca saldo -->
                                                            @if ($nama_akun->detailakun->saldo < 0)
                                                                <td>{{ formatRupiah($nama_akun->detailakun->saldo * -1) }}
                                                                </td> <!-- neraca saldo debit -->
                                                                <td>-</td>
                                                                <p hidden>
                                                                    {{ $neraca_saldo_debit += $nama_akun->detailakun->saldo * -1 }}
                                                                </p>
                                                            @elseif($nama_akun->detailakun->saldo > 0)
                                                                <td>-</td> <!-- neraca saldo kredit -->
                                                                <td>{{ formatRupiah($nama_akun->detailakun->saldo) }}</td>
                                                                <p hidden>
                                                                    {{ $neraca_saldo_kredit += $nama_akun->detailakun->saldo }}
                                                                </p>
                                                            @else
                                                                <td>-</td>
                                                                <td>-</td>
                                                            @endif

                                                            <!-- Penyesuaian -->
                                                            @if ($nama_akun->detailakun->penyesuaian > 0)
                                                                <td>{{ formatRupiah($nama_akun->detailakun->penyesuaian) }}
                                                                </td> <!-- penyesuaian debit -->
                                                                <td>-</td>
                                                                <p hidden>
                                                                    {{ $penyesuaian_debit += $nama_akun->detailakun->penyesuaian }}
                                                                </p>
                                                            @elseif($nama_akun->detailakun->penyesuaian < 0)
                                                                <td>-</td>
                                                                <td>{{ formatRupiah($nama_akun->detailakun->penyesuaian * -1) }}
                                                                </td> <!-- penyesuaian kredit -->
                                                                <p hidden>
                                                                    {{ $penyesuaian_kredit += $nama_akun->detailakun->penyesuaian * -1 }}
                                                                </p>
                                                            @else
                                                                <td>-</td>
                                                                <td>-</td>
                                                            @endif

                                                            <!-- Neraca Setelahnya -->
                                                            @if ($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian * -1 < 0)
                                                                <td>{{ formatRupiah(($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian * -1) * -1) }}
                                                                </td> <!-- neraca setelahnya debit -->
                                                                <td>-</td>
                                                                <p hidden>
                                                                    {{ $neraca_setelahnya_debit += ($nama_akun->detailakun->penyesuaian * -1 + $nama_akun->detailakun->saldo) * -1 }}
                                                                </p>
                                                            @elseif($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian * -1 > 0)
                                                                <td>-</td>
                                                                <td>{{ formatRupiah($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian * -1) }}
                                                                </td> <!-- neraca setelahnya kredit -->
                                                                <p hidden>
                                                                    {{ $neraca_setelahnya_kredit += $nama_akun->detailakun->penyesuaian * -1 + $nama_akun->detailakun->saldo }}
                                                                </p>
                                                            @else
                                                                <td>-</td>
                                                                <td>-</td>
                                                            @endif

                                                            <!-- Laba Rugi -->
                                                            <td>-</td>
                                                            <td>-</td>

                                                            <!-- Neraca -->
                                                            @if ($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian * -1 < 0)
                                                                <td>{{ formatRupiah(($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian * -1) * -1) }}
                                                                </td> <!-- neraca debit -->
                                                                <td>-</td>
                                                                <p hidden>
                                                                    {{ $neraca_debit += ($nama_akun->detailakun->penyesuaian * -1 + $nama_akun->detailakun->saldo) * -1 }}
                                                                </p>
                                                            @elseif($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian * -1 > 0)
                                                                <td>-</td>
                                                                <td>{{ formatRupiah($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian * -1) }}
                                                                </td> <!-- neraca kredit -->
                                                                <p hidden>
                                                                    {{ $neraca_kredit += $nama_akun->detailakun->penyesuaian * -1 + $nama_akun->detailakun->saldo }}
                                                                </p>
                                                            @else
                                                                <td>-</td>
                                                                <td>-</td>
                                                            @endif
                                                        @endif
                                                        {{-- <td>
                                                            <a href="/wtb/{{ $nama_akun->detailakun->id }}/edit"
                                                                class="nav-icon fas fa-edit"></a>
                                                        </td> --}}
                                                    </tr>
                                                @else
                                                    <tr>
                                                        <th scope="row" rowspan="">{{ $i += 1 }}</th>
                                                        <td>{{ $nama_akun->nama }}</td> <!-- // nama akun -->
                                                        <!-- saldo normal debit -->
                                                        @if ($nama_akun->detailakun->d_k == 'Debit')
                                                            <!-- neraca saldo -->
                                                            @if ($nama_akun->detailakun->saldo > 0)
                                                                <td>{{ formatRupiah($nama_akun->detailakun->saldo) }}</td>
                                                                <!-- neraca saldo debit -->
                                                                <td>-</td>
                                                                <p hidden>
                                                                    {{ $neraca_saldo_debit += $nama_akun->detailakun->saldo }}
                                                                </p>
                                                            @elseif($nama_akun->detailakun->saldo < 0)
                                                                <td>-</td> <!-- neraca saldo kredit -->
                                                                <td>{{ formatRupiah($nama_akun->detailakun->saldo * -1) }}
                                                                </td>
                                                                <p hidden>
                                                                    {{ $neraca_saldo_kredit += $nama_akun->detailakun->saldo * -1 }}
                                                                </p>
                                                            @else
                                                                <td>-</td>
                                                                <td>-</td>
                                                            @endif

                                                            <!-- Penyesuaian -->
                                                            @if ($nama_akun->detailakun->penyesuaian > 0)
                                                                <td>{{ formatRupiah($nama_akun->detailakun->penyesuaian) }}
                                                                </td> <!-- penyesuaian debit -->
                                                                <td>-</td>
                                                                <p hidden>
                                                                    {{ $penyesuaian_debit += $nama_akun->detailakun->penyesuaian }}
                                                                </p>
                                                            @elseif($nama_akun->detailakun->penyesuaian < 0)
                                                                <td>-</td>
                                                                <td>{{ formatRupiah($nama_akun->detailakun->penyesuaian * -1) }}
                                                                </td> <!-- penyesuaian kredit -->
                                                                <p hidden>
                                                                    {{ $penyesuaian_kredit += $nama_akun->detailakun->penyesuaian * -1 }}
                                                                </p>
                                                            @else
                                                                <td>-</td>
                                                                <td>-</td>
                                                            @endif

                                                            <!-- Neraca Setelahnya -->
                                                            @if ($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian > 0)
                                                                <td>{{ formatRupiah($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian) }}
                                                                </td> <!-- neraca setelahnya debit -->
                                                                <td>-</td>
                                                                <p hidden>
                                                                    {{ $neraca_setelahnya_debit += $nama_akun->detailakun->penyesuaian + $nama_akun->detailakun->saldo }}
                                                                </p>
                                                            @elseif($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian < 0)
                                                                <td>-</td>
                                                                <td>{{ formatRupiah(($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian) * -1) }}
                                                                </td> <!-- neraca setelahnya kredit -->
                                                                <p hidden>
                                                                    {{ $neraca_setelahnya_kredit += ($nama_akun->detailakun->penyesuaian + $nama_akun->detailakun->saldo) * -1 }}
                                                                </p>
                                                            @else
                                                                <td>-</td>
                                                                <td>-</td>
                                                            @endif

                                                            <!-- Laba Rugi -->
                                                            @if ($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian > 0)
                                                                <td>{{ formatRupiah($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian) }}
                                                                </td> <!-- Laba rugi debit -->
                                                                <td>-</td>
                                                                <p hidden>
                                                                    {{ $laba_rugi_debit += $nama_akun->detailakun->penyesuaian + $nama_akun->detailakun->saldo }}
                                                                </p>
                                                            @elseif($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian < 0)
                                                                <td>-</td>
                                                                <td>{{ formatRupiah(($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian) * -1) }}
                                                                </td> <!-- Laba rugi kredit -->
                                                                <p hidden>
                                                                    {{ $laba_rugi_kredit += ($nama_akun->detailakun->penyesuaian + $nama_akun->detailakun->saldo) * -1 }}
                                                                </p>
                                                            @else
                                                                <td>-</td>
                                                                <td>-</td>
                                                            @endif

                                                            <!-- Neraca -->
                                                            <td>-</td>
                                                            <td>-</td>

                                                            <!-- saldo normal kredit -->
                                                        @else
                                                            <!-- neraca saldo -->
                                                            @if ($nama_akun->detailakun->saldo < 0)
                                                                <td>{{ formatRupiah($nama_akun->detailakun->saldo * -1) }}
                                                                </td> <!-- neraca saldo debit -->
                                                                <td>-</td>
                                                                <p hidden>
                                                                    {{ $neraca_saldo_debit += $nama_akun->detailakun->saldo * -1 }}
                                                                </p>
                                                            @elseif($nama_akun->detailakun->saldo > 0)
                                                                <td>-</td> <!-- neraca saldo kredit -->
                                                                <td>{{ formatRupiah($nama_akun->detailakun->saldo) }}</td>
                                                                <p hidden>
                                                                    {{ $neraca_saldo_kredit += $nama_akun->detailakun->saldo }}
                                                                </p>
                                                            @else
                                                                <td>-</td>
                                                                <td>-</td>
                                                            @endif

                                                            <!-- Penyesuaian -->
                                                            @if ($nama_akun->detailakun->penyesuaian > 0)
                                                                <td>{{ formatRupiah($nama_akun->detailakun->penyesuaian) }}
                                                                </td> <!-- penyesuaian debit -->
                                                                <td>-</td>
                                                                <p hidden>
                                                                    {{ $penyesuaian_debit += $nama_akun->detailakun->penyesuaian }}
                                                                </p>
                                                            @elseif($nama_akun->detailakun->penyesuaian < 0)
                                                                <td>-</td>
                                                                <td>{{ formatRupiah($nama_akun->detailakun->penyesuaian * -1) }}
                                                                </td> <!-- penyesuaian kredit -->
                                                                <p hidden>
                                                                    {{ $penyesuaian_kredit += $nama_akun->detailakun->penyesuaian * -1 }}
                                                                </p>
                                                            @else
                                                                <td>-</td>
                                                                <td>-</td>
                                                            @endif

                                                            <!-- Neraca Setelahnya -->
                                                            @if ($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian * -1 < 0)
                                                                <td>{{ formatRupiah(($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian * -1) * -1) }}
                                                                </td> <!-- neraca setelahnya debit -->
                                                                <td>-</td>
                                                                <p hidden>
                                                                    {{ $neraca_setelahnya_debit += ($nama_akun->detailakun->penyesuaian * -1 + $nama_akun->detailakun->saldo) * -1 }}
                                                                </p>
                                                            @elseif($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian * -1 > 0)
                                                                <td>-</td>
                                                                <td>{{ formatRupiah($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian * -1) }}
                                                                </td> <!-- neraca setelahnya kredit -->
                                                                <p hidden>
                                                                    {{ $neraca_setelahnya_kredit += $nama_akun->detailakun->penyesuaian * -1 + $nama_akun->detailakun->saldo }}
                                                                </p>
                                                            @else
                                                                <td>-</td>
                                                                <td>-</td>
                                                            @endif

                                                            <!-- Laba Rugi -->
                                                            @if ($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian * -1 < 0)
                                                                <td>{{ formatRupiah(($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian * -1) * -1) }}
                                                                </td> <!-- Laba rugi debit -->
                                                                <td>-</td>
                                                                <p hidden>
                                                                    {{ $laba_rugi_debit += ($nama_akun->detailakun->penyesuaian * -1 + $nama_akun->detailakun->saldo) * -1 }}
                                                                </p>
                                                            @elseif($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian * -1 > 0)
                                                                <td>-</td>
                                                                <td>{{ formatRupiah($nama_akun->detailakun->saldo + $nama_akun->detailakun->penyesuaian * -1) }}
                                                                </td> <!-- Laba rugi kredit -->
                                                                <p hidden>
                                                                    {{ $laba_rugi_kredit += $nama_akun->detailakun->penyesuaian * -1 + $nama_akun->detailakun->saldo }}
                                                                </p>
                                                            @else
                                                                <td>-</td>
                                                                <td>-</td>
                                                            @endif

                                                            <!-- Neraca -->
                                                            <td>-</td>
                                                            <td>-</td>
                                                        @endif
                                                        {{-- <td>
                                                            <a href="/wtb/{{ $nama_akun->detailakun->id }}/edit"
                                                                class="nav-icon fas fa-edit"></a>
                                                        </td> --}}
                                                    </tr>
                                                @endif
                                            @endif
                                        @endforeach
                                        <!-- ///// -->


                                        <tr>
                                            <th scope="row" rowspan="">{{ $i += 1 }}</th>
                                            <td><b>Jumlah</b></td> <!--// nama akun -->
                                            <td><b>{{ formatRupiah($neraca_saldo_debit) }}</b></td>
                                            <!--// neraca saldo debit -->
                                            <td><b>{{ formatRupiah($neraca_saldo_kredit) }}</b></td>
                                            <!--//neraca saldo kredit -->
                                            <td><b>{{ formatRupiah($penyesuaian_debit) }}</b></td>
                                            <!--// penyesuaian debit -->
                                            <td><b>{{ formatRupiah($penyesuaian_kredit) }}</b></td>
                                            <!--// penyesuaian kredit -->
                                            <td><b>{{ formatRupiah($neraca_setelahnya_debit) }}</b></td>
                                            <!--// neraca setelahnya debit -->
                                            <td><b>{{ formatRupiah($neraca_setelahnya_kredit) }}</b></td>
                                            <!--// neraca setelahnya kredit -->
                                            <td><b>{{ formatRupiah($laba_rugi_debit) }}</b></td> <!--// laba rugi debit -->
                                            <td><b>{{ formatRupiah($laba_rugi_kredit) }}</b></td>
                                            <!--// laba rugi kredit -->
                                            <td><b>{{ formatRupiah($neraca_debit) }}</b></td> <!--// neraca debit -->
                                            <td><b>{{ formatRupiah($neraca_kredit) }}</b></td> <!--// neraca kredit -->
                                        </tr>
                                        <tr>
                                            <th scope="row" rowspan="">{{ $i += 1 }}</th>
                                            <td><b>Laba/Rugi Bersih</b></td> <!--// nama akun -->
                                            <td>-</td> <!--// neraca saldo debit -->
                                            <td>-</td> <!--//neraca saldo kredit -->
                                            <td>-</td> <!--// penyesuaian debit -->
                                            <td>-</td> <!--// penyesuaian kredit -->
                                            <td>-</td> <!--// neraca setelahnya debit -->
                                            <td>-</td> <!--// neraca setelahnya kredit -->
                                            @if ($saldo_akhir->pendapatan_bersih > 0)
                                                @if ($laba_rugi_debit < $laba_rugi_kredit)
                                                    <td><b>{{ formatRupiah($saldo_akhir->pendapatan_bersih) }}</b></td>
                                                    <!--// laba rugi debit -->
                                                    <td>-</td> <!--// laba rugi kredit -->
                                                @else
                                                    <td>-</td> <!--// laba rugi debit -->
                                                    <td><b>{{ formatRupiah($saldo_akhir->pendapatan_bersih) }}</b></td>
                                                    <!--// laba rugi kredit -->
                                                @endif
                                                @if ($neraca_debit < $neraca_kredit)
                                                    <td><b>{{ formatRupiah($saldo_akhir->pendapatan_bersih) }}</b></td>
                                                    <!--// neraca debit -->
                                                    <td>-</td> <!--// neraca kredit -->
                                                @else
                                                    <td>-</td> <!--// neraca debit -->
                                                    <td><b>{{ formatRupiah($saldo_akhir->pendapatan_bersih) }}</b></td>
                                                    <!--// neraca kredit -->
                                                @endif
                                            @else
                                                @if ($laba_rugi_debit < $laba_rugi_kredit)
                                                    <td><b>{{ formatRupiah($saldo_akhir->pendapatan_bersih * -1) }}</b>
                                                    </td> <!--// laba rugi debit -->
                                                    <td>-</td> <!--// laba rugi kredit -->
                                                @else
                                                    <td>-</td> <!--// laba rugi debit -->
                                                    <td><b>{{ formatRupiah($saldo_akhir->pendapatan_bersih * -1) }}</b>
                                                    </td> <!--// laba rugi kredit -->
                                                @endif
                                                @if ($neraca_debit < $neraca_kredit)
                                                    <td><b>{{ formatRupiah($saldo_akhir->pendapatan_bersih * -1) }}</b>
                                                    </td> <!--// neraca debit -->
                                                    <td>-</td> <!--// neraca kredit -->
                                                @else
                                                    <td>-</td> <!--// neraca debit -->
                                                    <td><b>{{ formatRupiah($saldo_akhir->pendapatan_bersih * -1) }}</b>
                                                    </td> <!--// neraca kredit -->
                                                @endif
                                            @endif


                                        </tr>
                                        <tr>
                                            <th scope="row" rowspan="">{{ $i += 1 }}</th>
                                            <td><b>Total</b></td> <!--// nama akun -->
                                            <td><b>{{ formatRupiah($neraca_saldo_debit) }}</b></td>
                                            <!--// neraca saldo debit -->
                                            <td><b>{{ formatRupiah($neraca_saldo_kredit) }}</b></td>
                                            <!--//neraca saldo kredit -->
                                            <td><b>{{ formatRupiah($penyesuaian_debit) }}</b></td>
                                            <!--// penyesuaian debit -->
                                            <td><b>{{ formatRupiah($penyesuaian_kredit) }}</b></td>
                                            <!--// penyesuaian kredit -->
                                            <td><b>{{ formatRupiah($neraca_setelahnya_debit) }}</b></td>
                                            <!--// neraca setelahnya debit -->
                                            <td><b>{{ formatRupiah($neraca_setelahnya_kredit) }}</b></td>
                                            <!--// neraca setelahnya kredit -->
                                            @if ($saldo_akhir->pendapatan_bersih > 0)
                                                @if ($laba_rugi_debit < $laba_rugi_kredit)
                                                    <td><b>{{ formatRupiah($laba_rugi_debit + $saldo_akhir->pendapatan_bersih) }}</b>
                                                    </td> <!--// laba rugi debit -->
                                                    <td><b>{{ formatRupiah($laba_rugi_kredit) }}</b></td>
                                                    <!--// laba rugi kredit -->
                                                @else
                                                    <td><b>{{ formatRupiah($laba_rugi_debit) }}</b></td>
                                                    <!--// laba rugi debit -->
                                                    <td><b>{{ formatRupiah($laba_rugi_kredit + $saldo_akhir->pendapatan_bersih) }}</b>
                                                    </td> <!--// laba rugi kredit -->
                                                @endif
                                                @if ($neraca_debit < $neraca_kredit)
                                                    <td><b>{{ formatRupiah($neraca_debit + $saldo_akhir->pendapatan_bersih) }}</b>
                                                    </td> <!--// neraca debit -->
                                                    <td><b>{{ formatRupiah($neraca_kredit) }}</b></td>
                                                    <!--// neraca kredit -->
                                                @else
                                                    <td><b>{{ formatRupiah($neraca_debit) }}</b></td>
                                                    <!--// neraca debit -->
                                                    <td><b>{{ formatRupiah($neraca_kredit + $saldo_akhir->pendapatan_bersih) }}</b>
                                                    </td> <!--// neraca kredit -->
                                                @endif
                                            @else
                                                @if ($laba_rugi_debit < $laba_rugi_kredit)
                                                    <td><b>{{ formatRupiah($laba_rugi_debit + $saldo_akhir->pendapatan_bersih * -1) }}</b>
                                                    </td> <!--// laba rugi debit -->
                                                    <td><b>{{ formatRupiah($laba_rugi_kredit) }}</b></td>
                                                    <!--// laba rugi kredit -->
                                                @else
                                                    <td><b>{{ formatRupiah($laba_rugi_debit) }}</b></td>
                                                    <!--// laba rugi debit -->
                                                    <td><b>{{ formatRupiah($laba_rugi_kredit + $saldo_akhir->pendapatan_bersih * -1) }}</b>
                                                    </td> <!--// laba rugi kredit -->
                                                @endif
                                                @if ($neraca_debit < $neraca_kredit)
                                                    <td><b>{{ formatRupiah($neraca_debit + $saldo_akhir->pendapatan_bersih * -1) }}</b>
                                                    </td> <!--// neraca debit -->
                                                    <td><b>{{ formatRupiah($neraca_kredit) }}</b></td>
                                                    <!--// neraca kredit -->
                                                @else
                                                    <td><b>{{ formatRupiah($neraca_debit) }}</b></td>
                                                    <!--// neraca debit -->
                                                    <td><b>{{ formatRupiah($neraca_kredit + $saldo_akhir->pendapatan_bersih * -1) }}</b>
                                                    </td> <!--// neraca kredit -->
                                                @endif
                                            @endif
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
