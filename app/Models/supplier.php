<?php

// app/Models/Supplier.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    // Nama tabel (optional jika sesuai dengan konvensi)
    protected $table = 'suppliers';

    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'nama',
        'kontak',
        'alamat',
    ];

    // Relasi dengan model SupplierBarang
    public function supplierbarangs()
    {
        return $this->hasMany(SupplierBarang::class, 'suppliers_id');
    }
}
