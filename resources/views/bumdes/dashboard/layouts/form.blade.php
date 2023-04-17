<button class="open-button" onclick="openForm()">+ Tambah</button>
<div class="form-popup" id="myForm">
  <form action="" class="form-container">
    <div class="mx-4">
        <div class="" style="margin-left: 100%">

            <button type="button" class="btn-close" aria-label="Close" onclick="closeForm()"></button>
        </div>
        <h1>Tambah Data</h1>
        <p class="fs-5" style="color: #8F9CA9">isi form dibawah ini untuk menambah data</p>
        
        <label for="tanggal_transaksi" ><b>Tanggal Transaksi</b></label>
        <input type="text" placeholder="DD/MM/YYYY" name="tanggal_transaksi" required>

        <label for="nama_akun" ><b>Nama Akun</b></label>
        <select class="form-select mb-3" aria-label=".form-select example" name="nama_akun">
            
            <option value="kas_debit">Kas(D)</option>
            <option value="kas_kredit">Kas(K)</option>
            <option value="modal_awal">Modal Awal</option>
            <option value="piutang_desa">Piutang Desa</option>
            <option value="pendapatan_dari_desa">Pendapatan dari Desa</option>
            <option value="peralatan_dan_meubeliar">Peralatan dan Meubeliar</option>
            <option value="piutang_dagang">Piutang Dagang</option>
            <option value="penjualan">Penjualan</option>
            
          </select>

        <label for="nominal" ><b>Nominal</b></label>
        <input type="text" placeholder="Masukkan nominal" name="nominal" required>
        
        {{-- <label for=""><b>Upload Bukti Pembayaran</b></label>
        <input type="file" class="form-control"  name="bukti_pembayaran" required> --}}
        <div class="mb-4">
            <label for="bukti_pembayaran"><b>Upload Bukti Pembayaran</b></label>
            <input type="file" class="form-control"  name="bukti_pembayaran" required>
        </div>
        
        <button type="submit" class="btn" style="background-color: #3C4B64">Simpan</button>
        
    </div>
  </form>
  <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
</script>
</div>