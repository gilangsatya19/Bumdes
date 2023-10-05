@extends('layouts.laporan_keuangan')

<style>
    #headline-company {
        color: #545454;
        font-size: 1.15rem;
    }
</style>

@section("content")

    <header>
        <div id="headline">
            <h2 id="headline-title">Laporan Laba Rugi</h2>
            <p id="headline-company">PT. Bambang Berkarya</p>
            <p id="headline-date">01/01/2022 - 31/12/2022</p>
        </div>

        <br/>

        <div>
            <table class="account-table" style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
                <tr class="account-head">
                    <td style="font-weight: 600; font-size: 1.15rem;">Pendapatan Penjualan Beras</td>
                </tr>
                <tr class="account-item">
                    <td style="padding-left: 1rem">Penjualan Beras</td>
                    <td style="text-align: right">Rp. 60.250.000</td>
                </tr>
                <tr class="account-item">
                    <td style="padding-left: 1rem">Gagal Panen Beras</td>
                    <td style="text-align: right">-Rp. 12.250.000</td>
                </tr>
                <tr class="account-subtotal">
                    <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom">Total Pendapatan</td>
                    <td style="text-align: right; font-weight: 600; vertical-align: bottom">Rp. 50.000.000</td>
                </tr>
            </table>

            <table style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
                <tr class="account-head">
                    <td style="font-weight: 600; font-size: 1.15rem;">Biaya Operasional</td>
                </tr>
                <tr class="account-item">
                    <td style="padding-left: 1rem">Bibit Padi</td>
                    <td style="text-align: right">Rp. 10.000.000</td>
                </tr>
                <tr class="account-item">
                    <td style="padding-left: 1rem">Pupuk Organik</td>
                    <td style="text-align: right">Rp. 15.000.000</td>
                </tr>
                <tr class="account-item">
                    <td style="padding-left: 1rem">Bahan Bakar Traktor</td>
                    <td style="text-align: right">Rp. 5.000.000</td>
                </tr>

                <tr class="account-subtotal">
                    <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom">Total Biaya Operasional</td>
                    <td style="text-align: right; font-weight: 600; vertical-align: bottom">Rp. 30.000.000</td>
                </tr>
            </table>

            <table style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
                <tr class="account-head">
                    <td style="font-weight: 600; font-size: 1.15rem;">Pendapatan Bersih</td>
                </tr>
                <tr class="account-item">
                    <td style="padding-left: 1rem">Pendapatan Penjualan Beras</td>
                    <td style="text-align: right">Rp. 50.000.000</td>
                </tr>
                <tr class="account-item">
                    <td style="padding-left: 1rem">Biaya Operasional</td>
                    <td style="text-align: right">-Rp. 30.000.000</td>
                </tr>

                <tr class="account-subtotal">
                    <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom">Total Pendapatan Bersih</td>
                    <td style="text-align: right; font-weight: 600; vertical-align: bottom">Rp. 20.000.000</td>
                </tr>
            </table>
        </div>
    </header>

@endsection
