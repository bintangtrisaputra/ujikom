<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use Illuminate\Http\Request;

class CategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Categoris = Categori::all();
        return view('Categori.index', compact('Categoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Categori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_categori' => 'required|string|max:255'
        ]);

        Categori::create($request->only('nama_category'));

        return redirect()->route('Categori.index')->with('success', 'Categori berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categori $categori)
    {
        return view('Categori.show', compact('Categori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categori $categori)
    {
        return view('categori.edit', compact('Categori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categori $Categori)
    {
        $request->validate([
            'nama_categori' => 'required|string|max:255'
        ]);

        $categori->update($request->only('nama_categori'));

        return redirect()->route('categori.index')->with('success', 'Categori berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categori $Categori)
    {
        if (!$categori) {
            return redirect()->route('categori.index')->with('error', 'Categori tidak ditemukan.');
        }

        $categori->delete();

        return redirect()->route('categori.index')->with('success', 'Categori berhasil dihapus.');
    }
}