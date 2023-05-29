<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_besars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies');
            $table->float('saldo_kas', 12, 2);
            $table->float('saldo_kas_di_bank_a', 12, 2);
            $table->float('saldo_kas_di_bank_b', 12, 2);
            $table->float('saldo_kas_di_bank_c', 12, 2);
            $table->float('saldo_kas_kecil', 12, 2);
            $table->float('saldo_giro', 12, 2);
            $table->float('saldo_deposito', 12, 2);
            $table->float('saldo_piutang_usaha', 12, 2);
            $table->float('saldo_persediaan_barang_dagang', 12, 2);
            $table->float('saldo_persediaan_makan_dan_minuman', 12, 2);
            $table->float('saldo_perlengkapan', 12, 2);
            $table->float('saldo_sewa_dibayar_dimuka', 12, 2);
            $table->float('saldo_asuransi_dibayar_dimuka', 12, 2);
            $table->float('saldo_pph25', 12, 2);
            $table->float('saldo_piutang_desa', 12, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku_besars');
    }
};
