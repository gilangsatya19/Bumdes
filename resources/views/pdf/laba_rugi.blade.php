@extends('layouts.laporan_keuangan')

@section("content")

    <div id="headline" class="d-flex justify-content-center">
        <h2 id="headline-title" style="text-align: center">{{auth()->user()->company->nama}}</h2>
    </div>
    <div id="headline" class="d-flex justify-content-center">
        <h3 id="headline-title" style="text-align: center">Laporan Laba Rugi</h3>
    </div>
    
    <div id="headline" class="d-flex justify-content-center">
        <p id="headline-date" style="text-align: center">01/10/2023 - 31/10/2023</p>
    </div>
    <div id="headline" class="d-flex justify-content-center">
        <p id="headline-date" style="font-size: 15px; text-align: center">(Dalam Rupiah)</p>
    </div>

    <br/>

    <div>
        <table class="account-table" style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem">
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
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom; color: blue; font-size: 1.10rem">Total Pendapatan Operasional</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom; color: blue; font-size: 1.10rem">{{ $pendapatan }}</td>
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
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom; color: red; font-size: 1.10rem">Total Beban Operasional</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom; color: red; font-size: 1.10rem">
                    {{ $beban }}</td>
            </tr>
        </table>
        <table style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem">
            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom; font-size: 1.10rem">Total Laba/Rugi Operasional</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom; font-size: 1.10rem">
                    {{ $pendapatan_bersih_operasional }}</td>
            </tr>
        </table>

        <table class="account-table" style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem">
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
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom; color: blue; font-size: 1.10rem">Total Pendapatan Non-Operasional</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom; color: blue; font-size: 1.10rem">
                    {{ $pendapatan_lain }}</td>
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
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom; color: red; font-size: 1.10rem">Total Beban Non-Operasional</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom; color: red; font-size: 1.10rem">
                    {{ $beban_lain }}</td>
            </tr>
        </table>
        

        <table style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem">
            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom; font-size: 1.10rem">Total Laba/Rugi Non-Operasional</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom; font-size: 1.10rem">
                    {{ $pendapatan_bersih }}</td>
            </tr>
        </table>

        <table style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem">
            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom; font-size: 1.10rem">Total Laba/Rugi Sebelum Pajak</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom; font-size: 1.10rem">
                    {{ $pendapatan_bersih }}</td>
            </tr>
        </table>

        <table style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem; color: red">
            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom; font-size: 1.10rem">Beban Pajak Terkini</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom; font-size: 1.10rem">
                    {{ $beban_pajak_terkini }}</td>
            </tr>
        </table>

        <table style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem">
            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom; font-size: 1.10rem">Total Laba/Rugi Setelah Pajak</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom; font-size: 1.10rem">
                    {{ formatRupiah($pendapatan_setelah_pajak)}}</td>
            </tr>
        </table>
    </div>

@endsection
