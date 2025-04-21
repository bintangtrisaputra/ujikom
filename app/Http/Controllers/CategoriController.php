<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use Illuminate\Http\Request;

class CategoriController extends Controller
{
    public function index()
    {
        $categoris = Categori::all();
        return view('categori.index', compact('categoris'));
    }

    public function create()
    {
        return view('categori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_categori' => 'required|string|max:255'
        ]);

        Categori::create([
            'nama_categori' => $request->nama_categori
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function show(Categori $categori)
    {
        return view('categori.show', compact('categori'));
    }

    public function edit(Categori $categori)
    {
        return view('categori.edit', compact('categori'));
    }

    public function update(Request $request, Categori $categori)
    {
        $request->validate([
            'nama_categori' => 'required|string|max:255'
        ]);

        $categori->update([
            'nama_categori' => $request->nama_categori
        ]);

        return redirect()->route('categori.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy(Categori $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus.');
    }

}
