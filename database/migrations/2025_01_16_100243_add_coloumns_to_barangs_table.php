<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('barangs', function (Blueprint $table) {
            $table->foreignId('supplier_id')->constrained('suppliers')->onDelete('cascade'); // Menambahkan supplier_id
            $table->decimal('harga_beli', 10, 2); // Menambahkan harga_beli
            $table->decimal('total_beli', 15, 2); // Menambahkan total_beli
            $table->date('tanggal_masuk'); // Menambahkan tanggal_masuk
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('barangs', function (Blueprint $table) {
            $table->dropColumn(['supplier_id', 'harga_beli', 'total_beli', 'tanggal_masuk']);
        });
    }
};
