<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    // Menampilkan form tambah supplier
    public function create()
    {
        return view('supplier.tambah');
    }

    // Menyimpan data supplier yang baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'kontak' => 'required|max:255',
            'alamat' => 'nullable',
        ]);

        Supplier::create($validatedData);

        return redirect()->route('supplier.create')->with('success', 'Supplier berhasil ditambahkan!');
    }

    public function index()
    {
        // Ambil semua supplier dari database
        $suppliers = Supplier::all();
        
        // Kirim data ke view
        return view('supplier.index', compact('suppliers'));
    }

}
