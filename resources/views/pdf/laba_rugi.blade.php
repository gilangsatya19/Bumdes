@extends('layouts.laporan_keuangan')

@section("content")

    <div id="headline">
        <h2 id="headline-title">Laporan Laba Rugi</h2>
        <p id="headline-company">PT. Bambang Berkarya</p>
        <p id="headline-date">01/01/2023 - 31/12/2023</p>
    </div>

    <br/>

    <div>
        <table class="account-table" style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
            <tr class="account-head">
                <td style="font-weight: 600; font-size: 1.15rem;">Pendapatan Operasional</td>
            </tr>
            @foreach($akuns_pendapatan as $akun)
                <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                             :kode-rekening="$akun->kode_rekening"
                                             :nominal="formatRupiah($akun->detailakun->saldo)"
                                             :is-negative="false"/>
            @endforeach
            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom">Total Pendapatan Operasional</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom">Rp. {{ $pendapatan }}</td>
            </tr>
        </table>

        <table style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
            <tr class="account-head">
                <td style="font-weight: 600; font-size: 1.15rem;">Beban Operasional</td>
            </tr>

            @foreach($akuns_beban as $akun)
                <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                             :kode-rekening="$akun->detailakun->kode_rekening"
                                             :nominal="formatRupiah($akun->detailakun->saldo)"
                                             :is-negative="false"/>

            @endforeach

            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom; color: red">Total Beban Operasional</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom; color: red;">
                    - Rp. {{ $beban }}</td>
            </tr>
        </table>
        <table style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom">Total Pendapatan Bersih Operasional</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom">
                    Rp. {{ $pendapatan_bersih_operasional }}</td>
            </tr>
        </table>

        <table class="account-table" style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
            <tr class="account-head">
                <td style="font-weight: 600; font-size: 1.15rem;">Pendapatan Non-Operasional</td>
            </tr>
            @foreach($akuns_pendapatan_lain as $akun)
                <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                             :kode-rekening="$akun->kode_rekening"
                                             :nominal="formatRupiah($akun->detailakun->saldo)"
                                             :is-negative="false"/>
            @endforeach
            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom">Total Pendapatan Non-Operasional</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom">
                    Rp. {{ $pendapatan_lain }}</td>
            </tr>
        </table>

        
        <table class="account-table"
               style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
            <tr class="account-head">
                <td style="font-weight: 600; font-size: 1.15rem;">Beban Non-Operasional</td>
            </tr>
            @foreach($akuns_beban_lain as $akun)
                <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                             :kode-rekening="$akun->kode_rekening"
                                             :nominal="formatRupiah($akun->detailakun->saldo)"
                                             :is-negative="false"/>
            @endforeach
            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom; color: red;">Total Beban Non-Operasional
                </td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom; color: red;">
                    - Rp. {{ $beban_lain }}</td>
            </tr>
        </table>
        

        <table style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom">Total Pendapatan Bersih</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom">
                    Rp. {{ $pendapatan_bersih }}</td>
            </tr>
        </table>
    </div>

@endsection
