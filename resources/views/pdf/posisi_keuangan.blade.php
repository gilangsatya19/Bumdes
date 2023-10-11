@extends('layouts.laporan_keuangan')

@section('content')
    <div id="headline">
        <h2 id="headline-title">Laporan Posisi Keuangan</h2>
        <p id="headline-company">PT. Bambang Berkarya</p>
        <p id="headline-date">01/01/2023 - 31/12/2023</p>
    </div>

    <br/>

    <div>
        <table class="account-table" style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
            <tr class="account-head">
                <td style="font-weight: 600; font-size: 1.15rem;">Aset</td>
            </tr>

            @if($akuns_aset_lancar->count() > 0)
                <tr>
                    <td style="padding-left: 1rem; font-weight: 600; padding-top: 0.5rem">Aset Lancar</td>
                </tr>
                @foreach($akuns_aset_lancar as $akun)
                    <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                                 :kode-rekening="$akun->kode_rekening"
                                                 :nominal="formatRupiah($akun->detailakun->saldo)"
                                                 :is-negative="false"/>
                @endforeach

                <tr class="account-subtotal">
                    <td style="font-weight: 600; padding-top: 0.5rem; vertical-align: bottom; padding-left: 1rem">Total
                        Aset Lancar
                    </td>
                    <td style="text-align: right; font-weight: 600; vertical-align: bottom">
                        Rp. {{ formatRupiah($total_aset_lancar) }}</td>
                </tr>
            @endif

            @if($akuns_aset_tetap->count() > 0)
                <tr>
                    <td style="padding-left: 1rem; font-weight: 600; padding-top: 1.5rem">Aset Tetap</td>
                </tr>

                @foreach($akuns_aset_tetap as $akun)
                    <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                                 :kode-rekening="$akun->kode_rekening"
                                                 :nominal="formatRupiah($akun->detailakun->saldo)"
                                                 :is-negative="false"/>
                @endforeach

                <tr class="account-subtotal">
                    <td style="font-weight: 600; padding-top: 0.5rem; vertical-align: bottom; padding-left: 1rem">Total
                        Aset Tetap
                    </td>
                    <td style="text-align: right; font-weight: 600; vertical-align: bottom">
                        Rp. {{ formatRupiah($total_aset_tetap) }}</td>
                </tr>
            @endif

            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom">Total Aset</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom">
                    Rp. {{ formatRupiah($total_aset) }}</td>
            </tr>
        </table>

        <table class="account-table" style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
            <tr class="account-head">
                <td style="font-weight: 600; font-size: 1.15rem;">Liabilitas dan Ekuitas</td>
            </tr>

            @if($akuns_kewajiban_pendek->count() > 0)
            <tr>
                <td style="padding-left: 1rem; font-weight: 600; padding-top: 0.5rem">Liabilitas Jangka Pendek</td>
            </tr>
            @foreach($akuns_kewajiban_pendek as $akun)
                <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                             :kode-rekening="$akun->kode_rekening"
                                             :nominal="formatRupiah($akun->detailakun->saldo)"
                                             :is-negative="false"/>
            @endforeach

            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 0.5rem; vertical-align: bottom; padding-left: 1rem">Total
                    Liabilitas Jangka Pendek
                </td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom">
                    Rp. {{ formatRupiah($total_kewajiban_pendek) }}</td>
            </tr>
            @endif

            @if($akuns_kewajiban_panjang->count() > 0)
            <tr>
                <td style="padding-left: 1rem; font-weight: 600; padding-top: 0.5rem">Liabilitas Jangka panjang</td>
            </tr>
            @foreach($akuns_kewajiban_panjang as $akun)
                <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                             :kode-rekening="$akun->kode_rekening"
                                             :nominal="formatRupiah($akun->detailakun->saldo)"
                                             :is-negative="false"/>
            @endforeach

            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 0.5rem; vertical-align: bottom; padding-left: 1rem">Total
                    Liabilitas Jangka Panjang
                </td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom">
                    Rp. {{ formatRupiah($total_kewajiban_panjang) }}</td>
            </tr>
            @endif

            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 0.5rem; vertical-align: bottom; padding-left: 1rem">Total
                    Liabilitas
                </td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom">
                    Rp. {{ formatRupiah($total_kewajiban_panjang + $total_kewajiban_pendek) }}</td>
            </tr>


            <tr>
                <td style="padding-left: 1rem; font-weight: 600; padding-top: 1rem">Ekuitas</td>
            </tr>
            @foreach($akuns_equitas as $akun)
                <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                             :kode-rekening="$akun->kode_rekening"
                                             :nominal="formatRupiah($akun->detailakun->saldo)"
                                             :is-negative="false"/>
            @endforeach
                <x-pdf.laporan-keuangan-item nama="Cadangan"
                                            :kode-rekening="3301"
                                            :nominal="formatRupiah($cadangan)"
                                            :is-negative="false"/>
            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 0.5rem; vertical-align: bottom; padding-left: 1rem">Total
                    Ekuitas
                </td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom">
                    Rp. {{ formatRupiah($total_equitas) }}</td>
            </tr>

            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom">Total Liabilitas dan Ekuitas
                </td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom">
                    Rp. {{ formatRupiah($total_equitas_kewajiban_cadangan) }}</td>
            </tr>
        </table>

        <div class="page-break"></div>

        <table class="account-table" style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
            <tr class="account-head">
                <td style="font-weight: 600; font-size: 1.15rem;">Rangkuman</td>
            </tr>

            <x-pdf.laporan-keuangan-item nama="Total Aset"
                                         :nominal="formatRupiah($total_aset)"
                                         :is-negative="false"/>

            <x-pdf.laporan-keuangan-item nama="Total Kewajiban, Ekuitas dan Cadangan"
                                         :nominal="formatRupiah($total_equitas_kewajiban_cadangan)"
                                         :is-negative="false"/>
        </table>

    </div>

@endsection
