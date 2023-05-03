<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin'),
        ]);

        DB::table('jurnal_umum')->insert([
            'tanggal' => '19/04/2001',
            'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
            'user_id' => '1',
        ]);

        DB::table('nama_akuns')->insert([
            'nama' => 'Aset',
            'kode_rekening' => '1000',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Aset Lancar',
            'kode_rekening' => '1100',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Kas',
            'kode_rekening' => '1101',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Kas di Bank A',
            'kode_rekening' => '1102',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Kas di Bank B',
            'kode_rekening' => '1103',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Kas di Bank C',
            'kode_rekening' => '1103',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Kas Kecil',
            'kode_rekening' => '1105',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Giro',
            'kode_rekening' => '1106',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Deposito',
            'kode_rekening' => '1107',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Piutang Usaha',
            'kode_rekening' => '1108',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Persediaan Barang Dagangan',
            'kode_rekening' => '1109',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Persediaan Makan dan Minuman',
            'kode_rekening' => '1110',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Perlengkapan',
            'kode_rekening' => '1111',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Sewa Dibayar Dimuka',
            'kode_rekening' => '1112',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Asuransi Dibayar Dimuka',
            'kode_rekening' => '1113',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'PPh 25',
            'kode_rekening' => '1114',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Piutang Desa',
            'kode_rekening' => '1115',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Aset Lancar Lainnya',
            'kode_rekening' => '1199',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Investasi',
            'kode_rekening' => '1200',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Aset Tetap',
            'kode_rekening' => '1300',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Tanah',
            'kode_rekening' => '1301',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Gedung dan Bangunan',
            'kode_rekening' => '1302',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Akumulasi Penyusutan Gedung dan Bangunan',
            'kode_rekening' => '1303',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Peralatan dan Meubeliar',
            'kode_rekening' => '1304',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Akumulasi Penyusutan Peralatan dan Meubeliar',
            'kode_rekening' => '1305',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Kendaraan',
            'kode_rekening' => '1306',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Akumulasi Penyusutan Kendaraan',
            'kode_rekening' => '1307',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Aset Tetap Lainnya',
            'kode_rekening' => '1399',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Kewajiban',
            'kode_rekening' => '2000',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Kewajiban Jangka Pendek',
            'kode_rekening' => '2100',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Utang Usaha',
            'kode_rekening' => '2102',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'PPn Keluaran',
            'kode_rekening' => '2103',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'PPh 21',
            'kode_rekening' => '2103',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'PPh 23',
            'kode_rekening' => '2104',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'PPh 29',
            'kode_rekening' => '2105',
            
        ]);
    
        DB::table('nama_akuns')->insert([
            'nama' => 'Utang Gaji dan Tunjangan',
            'kode_rekening' => '2106',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Utang Listrik',
            'kode_rekening' => '2107',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Utang Telepon dan Internet',
            'kode_rekening' => '2108',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Utang Utilitas Lainnya',
            'kode_rekening' => '2109',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Utang Jangka Pendek Lainnya',
            'kode_rekening' => '2110',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Kewajiban Jangka Panjang',
            'kode_rekening' => '2111',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Utang Ke Bank',
            'kode_rekening' => '2112',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Utang Jangka Panjang Lainnya',
            'kode_rekening' => '2199',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Ekuitas',
            'kode_rekening' => '3000',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Modal Pemilik',
            'kode_rekening' => '3100',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Penyertaan Modal Desa',
            'kode_rekening' => '3101',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Penyertaan Modal Masyarakat',
            'kode_rekening' => '3102',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pengambilan Oleh Pemilik',
            'kode_rekening' => '3200',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Bagi Hasil Penyertaan Modal Desa',
            'kode_rekening' => '3201',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Bagi Hasil Penyertaan Modal Masyarakat',
            'kode_rekening' => '3202',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Laba Ditahan dan Pencadangan',
            'kode_rekening' => '3300',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Laba Ditahan',
            'kode_rekening' => '3301',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'RK Unit Usaha',
            'kode_rekening' => '3400',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'RK Unit Toko Desa',
            'kode_rekening' => '3401',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'RK Unit Rekreasi',
            'kode_rekening' => '3402',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Ikhtisar Laba Rugi',
            'kode_rekening' => '3500',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan',
            'kode_rekening' => '4000',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Tiket',
            'kode_rekening' => '4100',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Tiket Masuk Perseorangan',
            'kode_rekening' => '4101',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Tiket Masuk Rombongan',
            'kode_rekening' => '4102',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Tiket Lainnya',
            'kode_rekening' => '4199',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Rupa-rupa',
            'kode_rekening' => '4300',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Komisi',
            'kode_rekening' => '4301',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Parkir',
            'kode_rekening' => '4302',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Toilet',
            'kode_rekening' => '4303',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Sewa',
            'kode_rekening' => '4304',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Jasa',
            'kode_rekening' => '4305',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Rupa-rupa Lainnya',
            'kode_rekening' => '4399',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban',
            'kode_rekening' => '6000',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Administrasi dan Umum',
            'kode_rekening' => '6100',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Gaji dan Tunjangan',
            'kode_rekening' => '6101',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Honor Lembur',
            'kode_rekening' => '6102',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Honor Narasumber',
            'kode_rekening' => '6103',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Insentif (Bonus)',
            'kode_rekening' => '6104',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Komisi',
            'kode_rekening' => '6105',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Seragam Pegawai',
            'kode_rekening' => '6106',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Listrik',
            'kode_rekening' => '6107',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Telepon dan Internet',
            'kode_rekening' => '6108',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Air',
            'kode_rekening' => '6109',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Utilitas Lainnya',
            'kode_rekening' => '6110',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Transportasi',
            'kode_rekening' => '6111',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Parkir',
            'kode_rekening' => '6112',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Administrasi Bank',
            'kode_rekening' => '6113',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Keamanan',
            'kode_rekening' => '6114',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Kebersihan',
            'kode_rekening' => '6115',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban ATK',
            'kode_rekening' => '6116',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Perlengkapan Lainnya',
            'kode_rekening' => '6117',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Fotocopy',
            'kode_rekening' => '6118',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Pemeliharaan dan Perbaikan',
            'kode_rekening' => '6119',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Sewa',
            'kode_rekening' => '6120',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Asuransi',
            'kode_rekening' => '6121',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Konsumsi rapat',
            'kode_rekening' => '6122',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Perjalanan Dinas',
            'kode_rekening' => '6123',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Penyusutan Peralatan dan Meubeliar',
            'kode_rekening' => '6124',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Penyusutan Gedung dan Bangunan',
            'kode_rekening' => '6125',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Pentusutan Kendaraan',
            'kode_rekening' => '6126',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Pajak Air Permukaan',
            'kode_rekening' => '6127',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Pajak Bunga Bank',
            'kode_rekening' => '6128',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Pajak Daerah',
            'kode_rekening' => '6129',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Pajak Hiburan',
            'kode_rekening' => '6130',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Pajak Reklame',
            'kode_rekening' => '6131',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban PPh 21',
            'kode_rekening' => '6132',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban PPh 23',
            'kode_rekening' => '6133',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban PPh 25',
            'kode_rekening' => '6134',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban PPh 29',
            'kode_rekening' => '6135',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban PADes',
            'kode_rekening' => '6136',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Administrasi Umum dan Lainnya',
            'kode_rekening' => '6199',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan dan Beban Lain-lain',
            'kode_rekening' => '7000',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Lain-lain',
            'kode_rekening' => '7100',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Bunga',
            'kode_rekening' => '7101',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan dari Desa',
            'kode_rekening' => '7102',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Bantuan/Sumbangan/Hibah',
            'kode_rekening' => '7103',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Lain-lain',
            'kode_rekening' => '7199',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Lain-lain',
            'kode_rekening' => '7200',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Bunga',
            'kode_rekening' => '7201',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Pajak',
            'kode_rekening' => '7202',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Denda',
            'kode_rekening' => '7203',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Diskon',
            'kode_rekening' => '7204',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban yang Masih Harus Dibayar',
            'kode_rekening' => '7205',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Lain-lainnya',
            'kode_rekening' => '7299',
            
        ]);

        

    }
}
