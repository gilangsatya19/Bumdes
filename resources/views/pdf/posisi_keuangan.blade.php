@extends('layouts.laporan_keuangan')

@section('content')
    <div id="headline" class="d-flex justify-content-center">
        <h2 id="headline-title" style="text-align: center">{{auth()->user()->company->nama}}</h2>
    </div>
    <div id="headline" class="d-flex justify-content-center">
        <h3 id="headline-title" style="text-align: center">Laporan Posisi Keuangan</h3>
    </div>

    <div id="headline" class="d-flex justify-content-center">
        <p id="headline-date" style="text-align: center">01/10/2023 - 31/10/2023</p>
    </div>
    <div id="headline" class="d-flex justify-content-center">
        <p id="headline-date" style="font-size: 15px; text-align: center">(Dalam Rupiah)</p>
    </div>

    <br/>

    <div>
        <table class="account-table" style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
            <tr class="account-head">
                <td style="font-weight: 600; font-size: 1.15rem;">ASET</td>
            </tr>

            @if($akuns_aset_lancar->count() > 0)
                <tr>
                    <td style="padding-left: 1rem; font-weight: 600; padding-top: 0.5rem">Aset Lancar</td>
                </tr>
                @foreach($akuns_aset_lancar as $akun)
                    <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                                 :kode-rekening="$akun->kode_rekening"
                                                 :nominal="formatRupiah($akun->detailakun->saldo + $akun->detailakun->penyesuaian)"
                                                 :is-negative="false"/>
                @endforeach

                <tr class="account-subtotal">
                    <td style="font-weight: 600; padding-top: 0.5rem; vertical-align: bottom; padding-left: 1rem; font-size: 1.10rem">Total
                        Aset Lancar
                    </td>
                    <td style="text-align: right; font-weight: 600; vertical-align: bottom; font-size: 1.10rem">
                        {{ formatRupiah($total_aset_lancar) }}</td>
                </tr>
            @endif

            @if($akuns_aset_tetap->count() > 0)
                <tr>
                    <td style="padding-left: 1rem; font-weight: 600; padding-top: 1.5rem">Aset Tetap</td>
                </tr>

                @foreach($akuns_aset_tetap as $akun)
                    @if($akun->kode_rekening != 1303 && $akun->kode_rekening != 1305 && $akun->kode_rekening != 1307)
                        <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                                     :kode-rekening="$akun->kode_rekening"
                                                     :nominal="formatRupiah($akun->detailakun->saldo + $akun->detailakun->penyesuaian)"
                                                     :is-negative="false"/>
                    @else
                        <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                                     :kode-rekening="$akun->kode_rekening"
                                                     :nominal="formatRupiah(($akun->detailakun->saldo + $akun->detailakun->penyesuaian)*-1)"
                                                     :is-negative="false"/>
                    @endif
                @endforeach

                <tr class="account-subtotal">
                    <td style="font-weight: 600; padding-top: 0.5rem; vertical-align: bottom; padding-left: 1rem; font-size: 1.10rem">Total
                        Aset Tetap
                    </td>
                    <td style="text-align: right; font-weight: 600; vertical-align: bottom; font-size: 1.10rem">
                        {{ formatRupiah($total_aset_tetap) }}</td>
                </tr>
            @endif

            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom; font-size: 1.10rem">TOTAL ASET</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom; font-size: 1.10rem">
                    {{ formatRupiah($total_aset) }}</td>
            </tr>
        </table>

        <table class="account-table" style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
            <tr class="account-head">
                <td style="font-weight: 600; font-size: 1.15rem;">LIABILITAS DAN EKUITAS</td>
            </tr>
            <tr>
                <td style="padding-left: 1rem; font-weight: 600;font-size: 20px; padding-top: 0.5rem">Liabilitas</td>
            </tr>
            @if($akuns_kewajiban_pendek->count() > 0)
            <tr>
                <td style="padding-left: 1rem; font-weight: 600; padding-top: 0.5rem">Liabilitas Jangka Pendek</td>
            </tr>
            @foreach($akuns_kewajiban_pendek as $akun)
                <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                             :kode-rekening="$akun->kode_rekening"
                                             :nominal="formatRupiah($akun->detailakun->saldo + $akun->detailakun->penyesuaian)"
                                             :is-negative="false"/>
            @endforeach

            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 0.5rem; vertical-align: bottom; padding-left: 1rem; font-size: 1.10rem">Total
                    Liabilitas Jangka Pendek
                </td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom; font-size: 1.10rem">
                    {{ formatRupiah($total_kewajiban_pendek) }}</td>
            </tr>
            @endif

            @if($akuns_kewajiban_panjang->count() > 0)
            <tr>
                <td style="padding-left: 1rem; font-weight: 600; padding-top: 0.5rem">Liabilitas Jangka panjang</td>
            </tr>
            @foreach($akuns_kewajiban_panjang as $akun)
                <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                             :kode-rekening="$akun->kode_rekening"
                                             :nominal="formatRupiah($akun->detailakun->saldo + $akun->detailakun->penyesuaian)"
                                             :is-negative="false"/>
            @endforeach

            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 0.5rem; vertical-align: bottom; padding-left: 1rem; font-size: 1.10rem">Total
                    Liabilitas Jangka Panjang
                </td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom; font-size: 1.10rem">
                    {{ formatRupiah($total_kewajiban_panjang) }}</td>
            </tr>
            @endif

            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 0.5rem; vertical-align: bottom; padding-left: 1rem; font-size: 1.10rem">Total
                    Liabilitas
                </td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom; font-size: 1.10rem">
                    {{ formatRupiah($total_kewajiban_panjang + $total_kewajiban_pendek) }}</td>
            </tr>


            <tr>
                <td style="padding-left: 1rem; font-weight: 600; padding-top: 1rem">Ekuitas</td>
            </tr>
            @foreach($akuns_equitas as $akun)
                <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                             :kode-rekening="$akun->kode_rekening"
                                             :nominal="formatRupiah($akun->detailakun->saldo + $akun->detailakun->penyesuaian)"
                                             :is-negative="false"/>
            @endforeach
                <x-pdf.laporan-keuangan-item nama="Cadangan"
                                            :kode-rekening="3301"
                                            :nominal="formatRupiah($cadangan)"
                                            :is-negative="false"/>
            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 0.5rem; vertical-align: bottom; padding-left: 1rem; font-size: 1.10rem">Total
                    Ekuitas
                </td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom; font-size: 1.10rem">
                    {{ formatRupiah($total_equitas + $cadangan) }}</td>
            </tr>

            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom; font-size: 1.10rem">TOTAL LIABILITAS DAN EKUITAS
                </td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom; font-size: 1.10rem">
                    {{ formatRupiah($total_equitas_kewajiban_cadangan) }}</td>
            </tr>
        </table>



    </div>

@endsection
