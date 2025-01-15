<?php

// app/Models/Barang.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // Nama tabel (optional jika sesuai dengan konvensi)
    protected $table = 'barangs';

    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'nama',
        'kategoris_id',
        'jumlah',
    ];

    // Relasi dengan model Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategoris_id');
    }

    // Relasi dengan model SupplierBarang
    public function supplierbarangs()
    {
        return $this->hasMany(SupplierBarang::class, 'barangs_id');
    }
}
