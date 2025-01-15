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
        Schema::create('supplierbarangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barangs_id')->constrained('barangs')->onDelete('cascade');
            $table->foreignId('suppliers_id')->constrained('suppliers')->onDelete('cascade');
            $table->date('tanggal_pasok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplierbarangs');
    }
};
