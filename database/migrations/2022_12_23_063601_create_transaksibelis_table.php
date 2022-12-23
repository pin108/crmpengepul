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
        Schema::create('transaksibelis', function (Blueprint $table) {
            $table->id();
            $table->date('transaksibeli_tanggal');
            $table->string('transaksibeli_namapetani');
            $table->string('transaksibeli_alamat');
            $table->string('transaksibeli_kabupaten');
            $table->float('transaksibeli_taksiranpanen');
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
        Schema::dropIfExists('transaksibelis');
    }
};
