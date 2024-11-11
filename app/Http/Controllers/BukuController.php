<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function showhome() {
        return view('home');
    }
    public function index()
    {
        $bukus = Buku::paginate(5);
        $bukus = Buku::all();
        return view('buku.index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'author' => 'required',
            'stock' => 'required|numeric',
            'type' => 'required',
            'price' => 'required|numeric',
        ]);

        Buku::create([
            'title' => $request->title,
            'author' => $request->author,
            'stock' => $request->stock,
            'type' => $request->type,
            'price' => $request->price,
        ]);

        return redirect()->route('buku.create')->with('success', 'Buku berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $buku = Buku::find($id);

        return view('buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:3',
            'author' => 'required|min:3',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'type' => 'required',
        ]);
    
        // Find the specific book instance by ID
        $buku = Buku::findOrFail($id); // This ensures an error if the ID is not found
    
        // Update the book's attributes directly
        $buku->update([
            'title' => $request->title,
            'author' => $request->author,
            'stock' => $request->stock,
            'price' => $request->price,
            'type' => $request->type,
        ]);
    
        return redirect()->route('buku.index')->with('success', 'Yahh, diperbarui, oke deh!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Buku::where('id', $id)->delete();
        return redirect()->back()->with('deleted', 'Kenapa dihapus? gasuka?');
    }
}
