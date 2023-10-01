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
        Schema::create('buku_besar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies');
            $table->float('1101', 12, 2);
            $table->float('1102', 12, 2);
            $table->float('1103', 12, 2);
            $table->float('1104', 12, 2);
            $table->float('1105', 12, 2);
            $table->float('1106', 12, 2);
            $table->float('1107', 12, 2);
            $table->float('1108', 12, 2);
            $table->float('1109', 12, 2);
            $table->float('1110', 12, 2);
            $table->float('1111', 12, 2);
            $table->float('1112', 12, 2);
            $table->float('1113', 12, 2);
            $table->float('1114', 12, 2);
            $table->float('1115', 12, 2);
            $table->float('1199', 12, 2);
            $table->float('1301', 12, 2);
            $table->float('1302', 12, 2);
            $table->float('1303', 12, 2);
            $table->float('1304', 12, 2);
            $table->float('1305', 12, 2);
            $table->float('1306', 12, 2);
            $table->float('1307', 12, 2);
            $table->float('1399', 12, 2);
            $table->float('2101', 12, 2);
            $table->float('2102', 12, 2);
            $table->float('2103', 12, 2);
            $table->float('2104', 12, 2);
            $table->float('2105', 12, 2);
            $table->float('2106', 12, 2);
            $table->float('2107', 12, 2);
            $table->float('2108', 12, 2);
            $table->float('2109', 12, 2);
            $table->float('2110', 12, 2);
            $table->float('2112', 12, 2);
            $table->float('2199', 12, 2);
            $table->float('3101', 12, 2);
            $table->float('3102', 12, 2);
            $table->float('3201', 12, 2);
            $table->float('3202', 12, 2);
            $table->float('3301', 12, 2);
            $table->float('3400', 12, 2);
            $table->float('3401', 12, 2);
            $table->float('3402', 12, 2);
            $table->float('4101', 12, 2);
            $table->float('4102', 12, 2);
            $table->float('4199', 12, 2);
            $table->float('4301', 12, 2);
            $table->float('4302', 12, 2);
            $table->float('4303', 12, 2);
            $table->float('4304', 12, 2);
            $table->float('4305', 12, 2);
            $table->float('4399', 12, 2);
            $table->float('6101', 12, 2);
            $table->float('6102', 12, 2);
            $table->float('6103', 12, 2);
            $table->float('6104', 12, 2);
            $table->float('6105', 12, 2);
            $table->float('6106', 12, 2);
            $table->float('6107', 12, 2);
            $table->float('6108', 12, 2);
            $table->float('6109', 12, 2);
            $table->float('6110', 12, 2);
            $table->float('6111', 12, 2);
            $table->float('6112', 12, 2);
            $table->float('6113', 12, 2);
            $table->float('6114', 12, 2);
            $table->float('6115', 12, 2);
            $table->float('6116', 12, 2);
            $table->float('6117', 12, 2);
            $table->float('6118', 12, 2);
            $table->float('6119', 12, 2);
            $table->float('6120', 12, 2);
            $table->float('6121', 12, 2);
            $table->float('6122', 12, 2);
            $table->float('6123', 12, 2);
            $table->float('6124', 12, 2);
            $table->float('6125', 12, 2);
            $table->float('6126', 12, 2);
            $table->float('6127', 12, 2);
            $table->float('6128', 12, 2);
            $table->float('6129', 12, 2);
            $table->float('6130', 12, 2);
            $table->float('6131', 12, 2);
            $table->float('6132', 12, 2);
            $table->float('6133', 12, 2);
            $table->float('6134', 12, 2);
            $table->float('6135', 12, 2);
            $table->float('6136', 12, 2);
            $table->float('6199', 12, 2);
            $table->float('7101', 12, 2);
            $table->float('7102', 12, 2);
            $table->float('7103', 12, 2);
            $table->float('7199', 12, 2);
            $table->float('7201', 12, 2);
            $table->float('7202', 12, 2);
            $table->float('7203', 12, 2);
            $table->float('7204', 12, 2);
            $table->float('7205', 12, 2);
            $table->float('7299', 12, 2);
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
        Schema::dropIfExists('buku_besar');
    }
};
