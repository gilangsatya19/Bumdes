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
                            <form method="GET" action="/jurnal_umum/createv2" id="form">
                                @csrf
                                <div id="mahasiswa-container" class="mb-4">
                                    <div class="mahasiswa mb-4">
                                        <div class="row justify-content-center text-red" id="error"></div>
                                        <div class="row">
                                            <div class="col">
                                                <p>Nama Akun</p>
                                                <select id="nama_akun" name="nama_akun" class="form-control" >
                                                    @foreach ($nama_akuns as $nama_akun)
                                                    @if ($nama_akun->d_k != '')
                                                    <option value="{{$nama_akun->nama}}">{{$nama_akun->nama}}</option>
                                                    @endif
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                            <div class="col">
                                                <p>Debit</p>
                                                <input type="number" class="form-control" name="debit" id="debit" placeholder="Debit" value="0">
                                            </div>
                                            <div class="col">
                                                <p>Kredit</p>
                                                <input type="number" class="form-control" name="kredit" id="kredit" placeholder="Kredit" value="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="add-mahasiswa">Add More</button>


                                <button type="submit" class="my-4">Submit</button>
                            </form>

                            <script>
                                // Ambil container dari elemen input mahasiswa
                                const container = document.getElementById("mahasiswa-container");
                                // Ambil tombol "Add More"
                                const addBtn = document.getElementById("add-mahasiswa");

                                // Tambahkan event listener ketika tombol "Add More" di klik
                                addBtn.addEventListener("click", () => {
                                    // Clone elemen input mahasiswa
                                    const clone = container.children[0].cloneNode(true);
                                    // Bersihkan value pada elemen input
                                    const inputs = clone.querySelectorAll("input");
                                    inputs.forEach((input) => (input.value = ""));
                                    // Tambahkan elemen input yang sudah diclone ke dalam container
                                    container.appendChild(clone);
                                });


                                
                            </script>
                            <script defer src="{{asset('js/jurnalUmum.js')}}"></script>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </section>
    </div>
@endsection