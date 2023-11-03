@extends('bumdes.dashboard.layouts.main')

@section('content')
    <style>
        .tabcontent {
            display: none;
            padding: 6px 12px;

            border-top: none;
        }

        p.hide {
            visibility: hidden;
        }

        .form-group {
            padding-right: 5px
        }
    </style>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Buku Besar</h3>
                            </div>


                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    id="dropdownMenuButton">
                                                    <span id="selectedAkun">Nama Akun</span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-start"
                                                    style="max-height: 400px; overflow-y: auto;"
                                                    aria-labelledby="dropdownMenuButton">
                                                    @foreach ($nama_akuns as $nama_akun)
                                                        @if ($nama_akun->detailakun->d_k != '')
                                                            <li><a type="button" class="dropdown-item tablinks"
                                                                    onclick="openAkun(event, '{{ $nama_akun->nama }}')">{{ $nama_akun->nama }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @foreach ($nama_akuns as $nama_akun)
                                    @if ($nama_akun->detailakun->d_k != '')
                                        <div id="{{ $nama_akun->nama }}" class="tabcontent">
                                            <p class="hide">{{ $iterasi = 0 }}{{ $saldo = 0 }}</p>
                                            <h2 id="judulAkun">{{ $nama_akun->nama }}</h2>
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead class="text-center">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Tanggal</th>
                                                        <th>Keterangan</th>
                                                        <th>Debit</th>
                                                        <th>Kredit</th>
                                                        <th>Saldo</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">

                                                    @foreach ($jurnals as $jurnal)
                                                        @if (isset($jurnal->datas->first()->nama_akun))
                                                            @foreach($jurnal->datas as $data)
                                                                @if($data->nama_akun == $nama_akun->nama)
                                                                    <tr>
                                                                        <td>{{ $iterasi = $iterasi + 1 }}</td>
                                                                        <td>{{ $jurnal->tanggal->format('d F Y') }}</td>
                                                                        <td>{{ $jurnal->jenis_transaksi }}</td>
                                                                        @if($data->debit != 0)
                                                                            <td>{{ formatRupiah($data->debit) }}</td>
                                                                            <td>-</td>
                                                                            <td>{{ formatRupiah($saldo = $saldo + $data->debit) }}</td>

                                                                        @else
                                                                            <td>-</td>
                                                                            <td>{{ formatRupiah($data->kredit) }}</td>
                                                                            <td>{{ formatRupiah($saldo = $saldo - $data->kredit) }}</td>
                                                                        @endif
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                            
                                                        @endif
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    @endif
                                @endforeach
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


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Simpan referensi ke submenu Kas
            var submenuKas = document.getElementById("Kas");

            // Simpan referensi ke tombol dropdown "Nama Akun"
            var dropdownButton = document.getElementById("nama_akun");

            // Buka submenu Kas dan tambahkan kelas "active" secara otomatis
            submenuKas.style.display = "block";
            dropdownButton.classList.add("active");
        });

        function openAkun(evt, akunName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(akunName).style.display = "block";
            evt.currentTarget.className += " active";

            // Perbarui teks di atas tabel dengan nama akun yang dipilih
            document.getElementById("selectedAkun").textContent = akunName;
        }
    </script>
@endsection
