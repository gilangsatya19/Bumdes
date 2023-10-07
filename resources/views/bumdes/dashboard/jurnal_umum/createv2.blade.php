@extends('bumdes.dashboard.layouts.main')

@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data BARU - Jurnal Umum</h3>
                        </div>
                        <div class="mx-5 mt-3">
                            <form method="POST" action="/jurnal_umum/createv2" id="form">
                                @csrf <!-- Tambahkan csrf token untuk keamanan -->
                                <div id="akun-container" class="mb-4">
                                    <div class="akun mb-4">
                                        <div class="row justify-content-center text-red" id="error"></div>
                                        <div class="row">
                                            <div class="col">
                                                <p>Nama Akun</p>
                                                <select name="nama_akun[]" class="form-control">
                                                    @foreach ($nama_akuns as $nama_akun)
                                                    @if ($nama_akun->detailakun->d_k != '')
                                                    <option value="{{$nama_akun->nama}}">{{$nama_akun->nama}}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <p>Debit</p>
                                                <input type="number" class="form-control" name="debit[]" placeholder="Debit" value="0">
                                            </div>
                                            <div class="col">
                                                <p>Kredit</p>
                                                <input type="number" class="form-control" name="kredit[]" placeholder="Kredit" value="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4 ">
                                    <button type="button" id="add-akun" class="btn btn-success">Tambah Akun</button>
                                    <button type="button" onclick="removeFunction()" class="btn btn-danger">Hapus Akun</button>
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

        for (let i = 0; i < container.children.length; i++) {
            const debitField = container.children[i].querySelector('input[name="debit[]"]');
            const kreditField = container.children[i].querySelector('input[name="kredit[]"]');
            const debitValue = parseFloat(debitField.value);
            const kreditValue = parseFloat(kreditField.value);

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
        }

        if (!valid) {
            e.preventDefault();
            errorElement.innerText = messages.join(', ');
        } else {
            errorElement.innerText = '';
        }
    });
</script>

@endsection