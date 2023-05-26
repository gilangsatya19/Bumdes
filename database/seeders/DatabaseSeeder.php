<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


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

        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-02'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-03'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-04'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);
        // DB::table('jurnal_umum')->insert([
        //     'tanggal' => Carbon::parse('2000-01-01'),
        //     'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
        //     'user_id' => '1',
        // ]);





        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '5000000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '1',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Penyertaan Modal Masyarakat',
        //     'noref' => '3102',
        //     'debit' => '0',
        //     'kredit' => '5000000',
        //     'jurnal_umum_id' => '1',
        // ]);

        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Piutang Desa',
        //     'noref' => '1115',
        //     'debit' => '15000000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '2',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Pendapatan Dari Desa (PADES)',
        //     'noref' => '7102',
        //     'debit' => '0',
        //     'kredit' => '15000000',
        //     'jurnal_umum_id' => '2',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Sewa dibayar dimuka',
        //     'noref' => '1112',
        //     'debit' => '12000000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '3',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '12000000',
        //     'jurnal_umum_id' => '3',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Peralatan dan meubeliar',
        //     'noref' => '1304',
        //     'debit' => '4200000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '4',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '4200000',
        //     'jurnal_umum_id' => '4',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Piutang Usaha',
        //     'noref' => '1108',
        //     'debit' => '1200000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '5',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Pendapatan Sewa',
        //     'noref' => '4304',
        //     'debit' => '0',
        //     'kredit' => '1200000',
        //     'jurnal_umum_id' => '5',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '1200000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '6',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Piutang Usaha',
        //     'noref' => '1108',
        //     'debit' => '0',
        //     'kredit' => '1200000',
        //     'jurnal_umum_id' => '6',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '350000000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '7',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Pendapatan Sewa',
        //     'noref' => '4304',
        //     'debit' => '0',
        //     'kredit' => '350000000',
        //     'jurnal_umum_id' => '7',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '350000000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '8',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Pendapatan Jasa',
        //     'noref' => '4305',
        //     'debit' => '0',
        //     'kredit' => '350000000',
        //     'jurnal_umum_id' => '8',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '15000000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '9',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Piutang Desa',
        //     'noref' => '1115',
        //     'debit' => '0',
        //     'kredit' => '15000000',
        //     'jurnal_umum_id' => '9',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Beban PADES',
        //     'noref' => '6136',
        //     'debit' => '50000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '10',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '50000',
        //     'jurnal_umum_id' => '10',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Perlengkapan',
        //     'noref' => '1111',
        //     'debit' => '250000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '11',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '250000',
        //     'jurnal_umum_id' => '11',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kendaraan',
        //     'noref' => '1306',
        //     'debit' => '25000000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '12',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '25000000',
        //     'jurnal_umum_id' => '12',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Tanah',
        //     'noref' => '1301',
        //     'debit' => '300000000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '13',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '100000000',
        //     'jurnal_umum_id' => '13',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Utang Usaha',
        //     'noref' => '2101',
        //     'debit' => '0',
        //     'kredit' => '200000000',
        //     'jurnal_umum_id' => '13',
        // ]);

        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Gedung dan bangunan',
        //     'noref' => '1302',
        //     'debit' => '250000000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '14',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '250000000',
        //     'jurnal_umum_id' => '14',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Utang usaha',
        //     'noref' => '2112',
        //     'debit' => '200000000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '15',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '200000000',
        //     'jurnal_umum_id' => '15',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas di Bank A',
        //     'noref' => '1102',
        //     'debit' => '150000000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '16',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Utang Usaha',
        //     'noref' => '2112',
        //     'debit' => '0',
        //     'kredit' => '150000000',
        //     'jurnal_umum_id' => '16',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Beban Administrasi Bank',
        //     'noref' => '6113',
        //     'debit' => '50000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '17',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '50000',
        //     'jurnal_umum_id' => '17',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas di Bank A',
        //     'noref' => '1101',
        //     'debit' => '50000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '18',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Pendapatan Bunga',
        //     'noref' => '7101',
        //     'debit' => '0',
        //     'kredit' => '50000',
        //     'jurnal_umum_id' => '18',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas Kecil',
        //     'noref' => '1105',
        //     'debit' => '2500000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '19',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '2500000',
        //     'jurnal_umum_id' => '19',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '10000000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '20',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Penyertaan Modal Desa',
        //     'noref' => '3102',
        //     'debit' => '0',
        //     'kredit' => '10000000',
        //     'jurnal_umum_id' => '20',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Asuransi Dibayar Dimuka',
        //     'noref' => '1113',
        //     'debit' => '50000000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '21',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '50000000',
        //     'jurnal_umum_id' => '21',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Utang Gaji dan Tunjangan',
        //     'noref' => '2106',
        //     'debit' => '50000000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '22',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '50000000',
        //     'jurnal_umum_id' => '22',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Utang Gaji dan Tunjangan',
        //     'noref' => '2106',
        //     'debit' => '12000000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '23',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '12000000',
        //     'jurnal_umum_id' => '23',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Utang Listrik',
        //     'noref' => '2107',
        //     'debit' => '250000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '24',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Utang Telepon dan Internet',
        //     'noref' => '2107',
        //     'debit' => '250000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '24',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '500000',
        //     'jurnal_umum_id' => '24',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Beban Gaji dan Tunjangan',
        //     'noref' => '6101',
        //     'debit' => '12000000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '25',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '12000000',
        //     'jurnal_umum_id' => '25',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Beban Listrik',
        //     'noref' => '6107',
        //     'debit' => '0',
        //     'kredit' => '250000',
        //     'jurnal_umum_id' => '26',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Beban Telepon dan Internet',
        //     'noref' => '6108',
        //     'debit' => '250000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '26',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '500000',
        //     'jurnal_umum_id' => '26',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Beban Air',
        //     'noref' => '6109',
        //     'debit' => '150000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '27',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '150000',
        //     'jurnal_umum_id' => '27',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '750000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '28',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Pendapatan dari Desa (PADES)',
        //     'noref' => '7102',
        //     'debit' => '0',
        //     'kredit' => '750000',
        //     'jurnal_umum_id' => '28',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '2000000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '29',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Pendapatan Bantuan/Sumangan/Hibah',
        //     'noref' => '7103',
        //     'debit' => '0',
        //     'kredit' => '2000000',
        //     'jurnal_umum_id' => '29',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Perlengkapan',
        //     'noref' => '1101',
        //     'debit' => '750000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '30',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas Kecil',
        //     'noref' => '7102',
        //     'debit' => '0',
        //     'kredit' => '750000',
        //     'jurnal_umum_id' => '30',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Beban Honor Lembur',
        //     'noref' => '6102',
        //     'debit' => '5000000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '31',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '5000000',
        //     'jurnal_umum_id' => '31',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Beban Transportasi',
        //     'noref' => '6111',
        //     'debit' => '100000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '32',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '100000',
        //     'jurnal_umum_id' => '32',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Beban Parkir',
        //     'noref' => '6112',
        //     'debit' => '100000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '33',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '100000',
        //     'jurnal_umum_id' => '33',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Beban Keamanan',
        //     'noref' => '6114',
        //     'debit' => '250000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '34',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '250000',
        //     'jurnal_umum_id' => '34',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Beban Fotocopy',
        //     'noref' => '6118',
        //     'debit' => '200000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '35',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '200000',
        //     'jurnal_umum_id' => '35',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Beban Pemeliharaan dan Perbaikan',
        //     'noref' => '6119',
        //     'debit' => '300000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '36',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '300000',
        //     'jurnal_umum_id' => '36',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Beban ATK',
        //     'noref' => '6116',
        //     'debit' => '200000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '37',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '200000',
        //     'jurnal_umum_id' => '37',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Beban Kebersihan',
        //     'noref' => '6115',
        //     'debit' => '50000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '38',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '50000',
        //     'jurnal_umum_id' => '38',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Beban Administrasi Umum dan Lainnya',
        //     'noref' => '6199',
        //     'debit' => '200000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '39',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '200000',
        //     'jurnal_umum_id' => '39',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Beban Seragam Pegawai',
        //     'noref' => '6106',
        //     'debit' => '300000',
        //     'kredit' => '0',
        //     'jurnal_umum_id' => '40',
        // ]);
        // DB::table('data_jurnal_umum')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '300000',
        //     'jurnal_umum_id' => '40',
        // ]);




        // Table pemasukan kas
        // DB::table('pemasukan_kas')->insert([ //1
        //     'tanggal' => '01/01/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pemasukan_kas')->insert([ //2
        //     'tanggal' => '27/01/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pemasukan_kas')->insert([ //3
        //     'tanggal' => '05/02/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pemasukan_kas')->insert([ //4
        //     'tanggal' => '08/02/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pemasukan_kas')->insert([ //5
        //     'tanggal' => '10/02/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pemasukan_kas')->insert([ //6
        //     'tanggal' => '05/06/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pemasukan_kas')->insert([ //7
        //     'tanggal' => '01/07/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pemasukan_kas')->insert([ //8
        //     'tanggal' => '11/08/2022',
        //     'user_id' => '1',
        // ]);
        

        // DB::table('data_pemasukan_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '5000000',
        //     'kredit' => '0',
        //     'pemasukan_kas_id' => '1',
        // ]);
        // DB::table('data_pemasukan_kas')->insert([
        //     'nama_akun' => 'Penyertaan Modal Desa',
        //     'noref' => '3101',
        //     'debit' => '0',
        //     'kredit' => '5000000',
        //     'pemasukan_kas_id' => '1',
        // ]);

        // DB::table('data_pemasukan_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '1200000',
        //     'kredit' => '0',
        //     'pemasukan_kas_id' => '2',
        // ]);
        // DB::table('data_pemasukan_kas')->insert([
        //     'nama_akun' => 'Piutang Usaha',
        //     'noref' => '1108',
        //     'debit' => '0',
        //     'kredit' => '5000000',
        //     'pemasukan_kas_id' => '2',
        // ]);
        // DB::table('data_pemasukan_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '350000000',
        //     'kredit' => '0',
        //     'pemasukan_kas_id' => '3',
        // ]);
        // DB::table('data_pemasukan_kas')->insert([
        //     'nama_akun' => 'Pendapatan Sewa',
        //     'noref' => '1108',
        //     'debit' => '0',
        //     'kredit' => '350000000',
        //     'pemasukan_kas_id' => '3',
        // ]);
        // DB::table('data_pemasukan_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '350000000',
        //     'kredit' => '0',
        //     'pemasukan_kas_id' => '4',
        // ]);
        // DB::table('data_pemasukan_kas')->insert([
        //     'nama_akun' => 'Pendapatan Jasa',
        //     'noref' => '1108',
        //     'debit' => '0',
        //     'kredit' => '350000000',
        //     'pemasukan_kas_id' => '4',
        // ]);
        // DB::table('data_pemasukan_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '15000000',
        //     'kredit' => '0',
        //     'pemasukan_kas_id' => '5',
        // ]);
        // DB::table('data_pemasukan_kas')->insert([
        //     'nama_akun' => 'Piutang Desa',
        //     'noref' => '1115',
        //     'debit' => '0',
        //     'kredit' => '15000000',
        //     'pemasukan_kas_id' => '5',
        // ]);
        // DB::table('data_pemasukan_kas')->insert([
        //     'nama_akun' => 'Kas di Bank A',
        //     'noref' => '1102',
        //     'debit' => '50000',
        //     'kredit' => '0',
        //     'pemasukan_kas_id' => '6',
        // ]);
        // DB::table('data_pemasukan_kas')->insert([
        //     'nama_akun' => 'Pendapatan Bunga',
        //     'noref' => '7101',
        //     'debit' => '0',
        //     'kredit' => '50000',
        //     'pemasukan_kas_id' => '6',
        // ]);
        // DB::table('data_pemasukan_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '10000000',
        //     'kredit' => '0',
        //     'pemasukan_kas_id' => '7',
        // ]);
        // DB::table('data_pemasukan_kas')->insert([
        //     'nama_akun' => 'Penyertaan Modal Desa',
        //     'noref' => '3102',
        //     'debit' => '0',
        //     'kredit' => '10000000',
        //     'pemasukan_kas_id' => '7',
        // ]);
        // DB::table('data_pemasukan_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '750000',
        //     'kredit' => '0',
        //     'pemasukan_kas_id' => '8',
        // ]);
        // DB::table('data_pemasukan_kas')->insert([
        //     'nama_akun' => 'Pendapatan dari Desa',
        //     'noref' => '7102',
        //     'debit' => '0',
        //     'kredit' => '750000',
        //     'pemasukan_kas_id' => '8',
        // ]);


        // Table pengeluaran kas
        // DB::table('pengeluaran_kas')->insert([ //1
        //     'tanggal' => '04/01/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pengeluaran_kas')->insert([ //2
        //     'tanggal' => '12/02/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pengeluaran_kas')->insert([ //3
        //     'tanggal' => '10/02/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pengeluaran_kas')->insert([ //4
        //     'tanggal' => '14/02/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pengeluaran_kas')->insert([ //5
        //     'tanggal' => '25/05/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pengeluaran_kas')->insert([ //6
        //     'tanggal' => '04/06/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pengeluaran_kas')->insert([ //7
        //     'tanggal' => '04/06/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pengeluaran_kas')->insert([ //8
        //     'tanggal' => '07/08/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pengeluaran_kas')->insert([ //9
        //     'tanggal' => '10/08/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pengeluaran_kas')->insert([ //10
        //     'tanggal' => '03/09/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pengeluaran_kas')->insert([ //11
        //     'tanggal' => '05/09/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pengeluaran_kas')->insert([ //12
        //     'tanggal' => '06/09/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pengeluaran_kas')->insert([ //13
        //     'tanggal' => '09/09/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pengeluaran_kas')->insert([ //14
        //     'tanggal' => '10/09/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pengeluaran_kas')->insert([ //15
        //     'tanggal' => '11/09/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pengeluaran_kas')->insert([ //16
        //     'tanggal' => '12/09/2022',
        //     'user_id' => '1',
        // ]);
        // DB::table('pengeluaran_kas')->insert([ //17
        //     'tanggal' => '13/09/2023',
        //     'user_id' => '1',
        // ]);
        // DB::table('pengeluaran_kas')->insert([ //18
        //     'tanggal' => '14/09/2023',
        //     'user_id' => '1',
        // ]);
        // DB::table('pengeluaran_kas')->insert([ //19
        //     'tanggal' => '15/09/2023',
        //     'user_id' => '1',
        // ]);
        

        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Peralatan dan Meubeliar',
        //     'noref' => '1304',
        //     'debit' => '4200000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '1',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '4200000',
        //     'pengeluaran_kas_id' => '1',
        // ]);

        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Perlengkapan',
        //     'noref' => '1111',
        //     'debit' => '250000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '2',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '250000',
        //     'pengeluaran_kas_id' => '2',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Beban PADES',
        //     'noref' => '6136',
        //     'debit' => '50000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '3',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '50000',
        //     'pengeluaran_kas_id' => '3',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kendaraan',
        //     'noref' => '1306',
        //     'debit' => '25000000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '4',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '25000000',
        //     'pengeluaran_kas_id' => '4',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Utang Usaha',
        //     'noref' => '2101',
        //     'debit' => '200000000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '5',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '200000000',
        //     'pengeluaran_kas_id' => '5',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Utang Usaha',
        //     'noref' => '2101',
        //     'debit' => '150000000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '6',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '150000000',
        //     'pengeluaran_kas_id' => '6',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Beban Administrasi Bank',
        //     'noref' => '6113',
        //     'debit' => '50000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '7',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '50000',
        //     'pengeluaran_kas_id' => '7',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Beban Listrik',
        //     'noref' => '6107',
        //     'debit' => '250000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '8',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Beban Telepon dan Internet',
        //     'noref' => '6108',
        //     'debit' => '250000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '8',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '500000',
        //     'pengeluaran_kas_id' => '8',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Beban Air',
        //     'noref' => '6109',
        //     'debit' => '150000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '9',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '150000',
        //     'pengeluaran_kas_id' => '9',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Beban Honor Lembur',
        //     'noref' => '6102',
        //     'debit' => '5000000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '10',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '5000000',
        //     'pengeluaran_kas_id' => '10',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Beban Transportasi',
        //     'noref' => '6111',
        //     'debit' => '100000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '11',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '100000',
        //     'pengeluaran_kas_id' => '11',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Beban Parkir',
        //     'noref' => '6112',
        //     'debit' => '100000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '12',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '100000',
        //     'pengeluaran_kas_id' => '12',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Beban Keamanan',
        //     'noref' => '6114',
        //     'debit' => '250000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '13',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '250000',
        //     'pengeluaran_kas_id' => '13',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Beban Fotocopy',
        //     'noref' => '6118',
        //     'debit' => '200000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '14',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '200000',
        //     'pengeluaran_kas_id' => '14',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Beban Pemeliharaan dan Perbaikan',
        //     'noref' => '6119',
        //     'debit' => '300000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '15',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '300000',
        //     'pengeluaran_kas_id' => '15',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Beban ATK',
        //     'noref' => '6116',
        //     'debit' => '200000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '16',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '200000',
        //     'pengeluaran_kas_id' => '16',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Beban Kebersihan',
        //     'noref' => '6115',
        //     'debit' => '200000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '17',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '200000',
        //     'pengeluaran_kas_id' => '17',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Beban Administrasi Umum dan Lainnya',
        //     'noref' => '6199',
        //     'debit' => '200000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '18',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '200000',
        //     'pengeluaran_kas_id' => '18',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Beban Seragam Pegawai',
        //     'noref' => '6106',
        //     'debit' => '300000',
        //     'kredit' => '0',
        //     'pengeluaran_kas_id' => '19',
        // ]);
        // DB::table('data_pengeluaran_kas')->insert([
        //     'nama_akun' => 'Kas',
        //     'noref' => '1101',
        //     'debit' => '0',
        //     'kredit' => '300000',
        //     'pengeluaran_kas_id' => '19',
        // ]);
        
        




        

        // Table nama akun

        DB::table('nama_akuns')->insert([
            'nama' => 'Aset',
            'kode_rekening' => '1000',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Aset Lancar',
            'kode_rekening' => '1100',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Kas',
            'kode_rekening' => '1101',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Kas di Bank A',
            'kode_rekening' => '1102',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Kas di Bank B',
            'kode_rekening' => '1103',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Kas di Bank C',
            'kode_rekening' => '1103',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Kas Kecil',
            'kode_rekening' => '1105',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Giro',
            'kode_rekening' => '1106',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Deposito',
            'kode_rekening' => '1107',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Piutang Usaha',
            'kode_rekening' => '1108',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Persediaan Barang Dagangan',
            'kode_rekening' => '1109',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Persediaan Makan dan Minuman',
            'kode_rekening' => '1110',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Perlengkapan',
            'kode_rekening' => '1111',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Sewa Dibayar Dimuka',
            'kode_rekening' => '1112',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Asuransi Dibayar Dimuka',
            'kode_rekening' => '1113',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'PPh 25',
            'kode_rekening' => '1114',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Piutang Desa',
            'kode_rekening' => '1115',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Aset Lancar Lainnya',
            'kode_rekening' => '1199',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Investasi',
            'kode_rekening' => '1200',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Aset Tetap',
            'kode_rekening' => '1300',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Tanah',
            'kode_rekening' => '1301',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Gedung dan Bangunan',
            'kode_rekening' => '1302',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Akumulasi Penyusutan Gedung dan Bangunan',
            'kode_rekening' => '1303',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Peralatan dan Meubeliar',
            'kode_rekening' => '1304',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Akumulasi Penyusutan Peralatan dan Meubeliar',
            'kode_rekening' => '1305',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Kendaraan',
            'kode_rekening' => '1306',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Akumulasi Penyusutan Kendaraan',
            'kode_rekening' => '1307',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Aset Tetap Lainnya',
            'kode_rekening' => '1399',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Kewajiban',
            'kode_rekening' => '2000',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Kewajiban Jangka Pendek',
            'kode_rekening' => '2100',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Utang Usaha',
            'kode_rekening' => '2102',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'PPn Keluaran',
            'kode_rekening' => '2103',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'PPh 21',
            'kode_rekening' => '2103',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'PPh 23',
            'kode_rekening' => '2104',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'PPh 29',
            'kode_rekening' => '2105',
            'd_k' => 'Kredit',
            
        ]);
    
        DB::table('nama_akuns')->insert([
            'nama' => 'Utang Gaji dan Tunjangan',
            'kode_rekening' => '2106',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Utang Listrik',
            'kode_rekening' => '2107',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Utang Telepon dan Internet',
            'kode_rekening' => '2108',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Utang Utilitas Lainnya',
            'kode_rekening' => '2109',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Utang Jangka Pendek Lainnya',
            'kode_rekening' => '2110',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Kewajiban Jangka Panjang',
            'kode_rekening' => '2111',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Utang Ke Bank',
            'kode_rekening' => '2112',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Utang Jangka Panjang Lainnya',
            'kode_rekening' => '2199',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Ekuitas',
            'kode_rekening' => '3000',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Modal Pemilik',
            'kode_rekening' => '3100',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Penyertaan Modal Desa',
            'kode_rekening' => '3101',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Penyertaan Modal Masyarakat',
            'kode_rekening' => '3102',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pengambilan Oleh Pemilik',
            'kode_rekening' => '3200',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Bagi Hasil Penyertaan Modal Desa',
            'kode_rekening' => '3201',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Bagi Hasil Penyertaan Modal Masyarakat',
            'kode_rekening' => '3202',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Laba Ditahan dan Pencadangan',
            'kode_rekening' => '3300',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Laba Ditahan',
            'kode_rekening' => '3301',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'RK Unit Usaha',
            'kode_rekening' => '3400',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'RK Unit Toko Desa',
            'kode_rekening' => '3401',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'RK Unit Rekreasi',
            'kode_rekening' => '3402',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Ikhtisar Laba Rugi',
            'kode_rekening' => '3500',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan',
            'kode_rekening' => '4000',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Tiket',
            'kode_rekening' => '4100',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Tiket Masuk Perseorangan',
            'kode_rekening' => '4101',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Tiket Masuk Rombongan',
            'kode_rekening' => '4102',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Tiket Lainnya',
            'kode_rekening' => '4199',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Rupa-rupa',
            'kode_rekening' => '4300',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Komisi',
            'kode_rekening' => '4301',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Parkir',
            'kode_rekening' => '4302',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Toilet',
            'kode_rekening' => '4303',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Sewa',
            'kode_rekening' => '4304',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Jasa',
            'kode_rekening' => '4305',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Rupa-rupa Lainnya',
            'kode_rekening' => '4399',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban',
            'kode_rekening' => '6000',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Administrasi dan Umum',
            'kode_rekening' => '6100',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Gaji dan Tunjangan',
            'kode_rekening' => '6101',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Honor Lembur',
            'kode_rekening' => '6102',
            'd_k' => 'Debit',

            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Honor Narasumber',
            'kode_rekening' => '6103',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Insentif (Bonus)',
            'kode_rekening' => '6104',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Komisi',
            'kode_rekening' => '6105',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Seragam Pegawai',
            'kode_rekening' => '6106',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Listrik',
            'kode_rekening' => '6107',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Telepon dan Internet',
            'kode_rekening' => '6108',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Air',
            'kode_rekening' => '6109',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Utilitas Lainnya',
            'kode_rekening' => '6110',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Transportasi',
            'kode_rekening' => '6111',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Parkir',
            'kode_rekening' => '6112',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Administrasi Bank',
            'kode_rekening' => '6113',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Keamanan',
            'kode_rekening' => '6114',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Kebersihan',
            'kode_rekening' => '6115',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban ATK',
            'kode_rekening' => '6116',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Perlengkapan Lainnya',
            'kode_rekening' => '6117',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Fotocopy',
            'kode_rekening' => '6118',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Pemeliharaan dan Perbaikan',
            'kode_rekening' => '6119',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Sewa',
            'kode_rekening' => '6120',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Asuransi',
            'kode_rekening' => '6121',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Konsumsi rapat',
            'kode_rekening' => '6122',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Perjalanan Dinas',
            'kode_rekening' => '6123',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Penyusutan Peralatan dan Meubeliar',
            'kode_rekening' => '6124',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Penyusutan Gedung dan Bangunan',
            'kode_rekening' => '6125',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Pentusutan Kendaraan',
            'kode_rekening' => '6126',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Pajak Air Permukaan',
            'kode_rekening' => '6127',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Pajak Bunga Bank',
            'kode_rekening' => '6128',
            'd_k' => 'Debit',
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Pajak Daerah',
            'kode_rekening' => '6129',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Pajak Hiburan',
            'kode_rekening' => '6130',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Pajak Reklame',
            'kode_rekening' => '6131',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban PPh 21',
            'kode_rekening' => '6132',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban PPh 23',
            'kode_rekening' => '6133',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban PPh 25',
            'kode_rekening' => '6134',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban PPh 29',
            'kode_rekening' => '6135',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban PADes',
            'kode_rekening' => '6136',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Administrasi Umum dan Lainnya',
            'kode_rekening' => '6199',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan dan Beban Lain-lain',
            'kode_rekening' => '7000',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Lain-lain',
            'kode_rekening' => '7100',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Bunga',
            'kode_rekening' => '7101',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan dari Desa',
            'kode_rekening' => '7102',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Bantuan/Sumbangan/Hibah',
            'kode_rekening' => '7103',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Pendapatan Lain-lain',
            'kode_rekening' => '7199',
            'd_k' => 'Kredit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Lain-lain',
            'kode_rekening' => '7200',
            'd_k' => '',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Bunga',
            'kode_rekening' => '7201',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Pajak',
            'kode_rekening' => '7202',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Denda',
            'kode_rekening' => '7203',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Diskon',
            'kode_rekening' => '7204',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban yang Masih Harus Dibayar',
            'kode_rekening' => '7205',
            'd_k' => 'Debit',
            
        ]);
        DB::table('nama_akuns')->insert([
            'nama' => 'Beban Lain-lainnya',
            'kode_rekening' => '7299',
            'd_k' => 'Debit',
            
        ]);

        

    }
}
