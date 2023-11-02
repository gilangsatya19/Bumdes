@extends('bumdes.dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Data BARU - Jurnal Penyesuaian</h3>
                            </div>
                            <div class="mx-5 mt-3">
                                <form method="POST" action="/jurnal_penyesuaian/store" id="form">
                                    @csrf <!-- Tambahkan csrf token untuk keamanan -->
                                    <div class="container mb-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jenis_transaksi">Jenis Transaksi</label>
                                                    <input type="text" placeholder="Masukkan Jenis Transaksi"
                                                        name="jenis_transaksi" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tanggal">Tanggal Transaksi</label>
                                                    <input type="date" placeholder="DD/MM/YYYY" name="tanggal"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div id="akun-container" class="mb-4">
                                        <div class="akun mb-4">
                                            <div class="row justify-content-center text-red" id="error"></div>
                                            <div class="row">
                                                <div class="col">
                                                    <p>Nama Akun</p>
                                                    <select name="nama_akun[]" class="form-control">
                                                        @foreach ($nama_akuns as $nama_akun)
                                                            @if ($nama_akun->detailakun->d_k != '')
                                                                <option value="{{ $nama_akun->nama }}">
                                                                    {{ $nama_akun->nama }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <p>Debit</p>
                                                    <input type="number" class="form-control" name="debit[]"
                                                        placeholder="Debit" value="0">
                                                </div>
                                                <div class="col">
                                                    <p>Kredit</p>
                                                    <input type="number" class="form-control" name="kredit[]"
                                                        placeholder="Kredit" value="0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="akun mb-4">
                                            <div class="row">
                                                <div class="col">
                                                    <p>Nama Akun</p>
                                                    <select name="nama_akun[]" class="form-control">
                                                        @foreach ($nama_akuns as $nama_akun)
                                                            @if ($nama_akun->detailakun->d_k != '')
                                                                <option value="{{ $nama_akun->nama }}">
                                                                    {{ $nama_akun->nama }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <p>Debit</p>
                                                    <input type="number" class="form-control" name="debit[]"
                                                        placeholder="Debit" value="0">
                                                </div>
                                                <div class="col">
                                                    <p>Kredit</p>
                                                    <input type="number" class="form-control" name="kredit[]"
                                                        placeholder="Kredit" value="0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-4 ">
                                        <button type="button" id="add-akun" class="btn btn-success">Tambah Akun</button>
                                        <button type="button" onclick="removeFunction()" class="btn btn-danger">Hapus
                                            Akun</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        // Ambil container dari elemen input akun
        const container = document.getElementById("akun-container");
        // Ambil tombol "Tambah Akun Lainnya"
        const addBtn = document.getElementById("add-akun");
        const form = document.getElementById('form');
        const errorElement = document.getElementById('error');

        // Tambahkan event listener ketika tombol "Tambah Akun Lainnya" di klik
        addBtn.addEventListener("click", () => {
            // Kosongkan pesan kesalahan
            errorElement.innerText = '';

            // Clone elemen input akun
            const clone = container.children[0].cloneNode(true);
            // Bersihkan nilai pada elemen input
            const inputs = clone.querySelectorAll("input");
            inputs.forEach((input) => (input.value = "0"));
            // Tambahkan elemen input yang sudah diclone ke dalam container
            container.appendChild(clone);
        });

        function removeFunction() {
            const list = document.getElementById("akun-container");
            if (list.lastElementChild != list.firstElementChild) {
                list.removeChild(list.lastElementChild);
            }
        }

        form.addEventListener('submit', (e) => {
            let messages = [];
            let valid = true;
            let totalDebit = 0;
            let totalKredit = 0;
            let namaAkunValues = [];

            for (let i = 0; i < container.children.length; i++) {
                const namaAkunField = container.children[i].querySelector(
                    'select[name="nama_akun[]"]'); // Ambil elemen input nama akun
                const debitField = container.children[i].querySelector(
                    'input[name="debit[]"]'); // Ambil elemen input debit
                const kreditField = container.children[i].querySelector(
                    'input[name="kredit[]"]'); // Ambil elemen input kredit
                const namaAkunValue = namaAkunField.value; // Ambil nilai dari input nama akun
                const debitValue = parseFloat(debitField.value); // Ambil nilai dari input debit
                const kreditValue = parseFloat(kreditField.value); // Ambil nilai dari input kredit

                // Jika nama akun sudah pernah dimasukkan, maka hentikan submit form dan tampilkan pesan kesalahan
                if (namaAkunValues.includes(namaAkunValue)) {
                    messages.push('Nama Akun tidak boleh sama');
                    valid = false;
                    break; // Keluar dari loop segera setelah ditemukan kesalahan.
                }

                // Tambahkan nama akun ke dalam array namaAkunValues
                namaAkunValues.push(namaAkunValue);

                if (debitValue === 0 && kreditValue === 0) {
                    messages.push('Masukkan nilai Debit Atau Kredit untuk setiap akun');
                    valid = false;
                    break; // Keluar dari loop segera setelah ditemukan kesalahan.
                }

                if (debitValue !== 0 && kreditValue !== 0) {
                    messages.push('Harap mengisikan hanya satu di antara debit atau kredit untuk setiap akun');
                    valid = false;
                    break; // Keluar dari loop segera setelah ditemukan kesalahan.
                }

                if (debitValue < 0 || kreditValue < 0) {
                    messages.push('Nilai Debit atau Kredit tidak boleh negatif');
                    valid = false;
                    break; // Keluar dari loop segera setelah ditemukan kesalahan.
                }

                totalDebit += debitValue; // Tambahkan nilai debit ke total debit
                totalKredit += kreditValue; // Tambahkan nilai kredit ke total kredit
            }

            // Jika terdapat kesalahan, maka hentikan submit form dan tampilkan pesan kesalahan
            if (!valid) {
                e.preventDefault();
                errorElement.innerText = messages.join(', ');
            } else if (totalDebit !==
                totalKredit
            ) { // Jika total debit tidak sama dengan total kredit, maka hentikan submit form dan tampilkan pesan kesalahan
                e.preventDefault();
                errorElement.innerText = 'Total Debit harus sama dengan Total Kredit';
            } else {
                errorElement.innerText = ''; // Kosongkan pesan kesalahan
            }
        });
    </script>
@endsection
