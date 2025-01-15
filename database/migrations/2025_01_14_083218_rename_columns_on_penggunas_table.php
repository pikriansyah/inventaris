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
        Schema::table('penggunas', function (Blueprint $table) {
            $table->renameColumn('nama', 'name');  // Mengubah nama kolom 'nama' menjadi 'name'
            $table->renameColumn('katasandi', 'password');  // Mengubah nama kolom 'katasandi' menjadi 'password'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penggunas', function (Blueprint $table) {
            $table->renameColumn('name', 'nama');  // Mengembalikan nama kolom 'name' menjadi 'nama'
            $table->renameColumn('password', 'katasandi');  // Mengembalikan nama kolom 'password' menjadi 'katasandi'
        });
    }
};
