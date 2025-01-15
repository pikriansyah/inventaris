<?php

// app/Http/Controllers/DashboardController.php
namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplier;
use App\Models\Kategori;

class DashboardController extends Controller
{
    public function index()
    {
        $barangs = Barang::count();
        $suppliers = Supplier::count();
        $kategoris = Kategori::count();

        return view('dashboard', compact('barangs', 'suppliers', 'kategoris'));
    }
}
