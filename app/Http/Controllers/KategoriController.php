<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{

    // Method untuk menampilkan semua kategori
    public function index()
    {
        // Ambil semua data kategori
        $kategoris = Kategori::all();

        // Kirim data kategori ke view
        return view('kategori.index', compact('kategoris'));
    }

    // Menampilkan halaman form tambah kategori
    public function create()
    {
        return view('kategori.tambah');
    }

    // Menyimpan data kategori ke database
    public function store(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        // Simpan kategori baru
        Kategori::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        // Redirect ke halaman kategori
        return redirect()->route('kategori.create')->with('success', 'Kategori berhasil ditambahkan!');
    }
}
