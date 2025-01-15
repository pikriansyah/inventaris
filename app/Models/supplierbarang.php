<?php

// app/Models/SupplierBarang.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierBarang extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'supplierbarangs';

    // Kolom yang dapat diisi
    protected $fillable = [
        'barangs_id',
        'suppliers_id',
        'tanggal_pasok',
    ];

    // Relasi dengan model Barang
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barangs_id');
    }

    // Relasi dengan model Supplier
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'suppliers_id');
    }
}
