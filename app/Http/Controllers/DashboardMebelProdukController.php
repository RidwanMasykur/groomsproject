<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\Produk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DashboardMebelProdukController extends Controller
{

    public function index()
    {
        $produk = Produk::paginate(20);
        return view('dashboardmebel.produk.index',[
            'produks' => $produk,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/dashboardmebel/produk/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'image|file|required',
            'price' => 'required',
            'stok' => 'required',
            'caption' => 'required'
        ]);
        

        $validated['image'] = $request->file('image')->store('post_image');
        $validated['user_id'] = auth()->user()->id;
        $validated['price'] = Str::words($validated['price'], 10);
        
        
        Produk::create($validated);
        return redirect('/dashboardmebel/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        return view('/dashboardmebel/produk/edit', [
            'produk' => $produk
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $rules = [
            'title' => 'required',
            'price' => 'required',
            'stok' => 'required',
            'caption' => 'required'
        ];

        if($request->file('image')) {
            $rules['image'] = 'image|file|required';
        }

        $validated = $request->validate($rules);

        if($request->file('image')) {
            Storage::delete($produk->image);
            $validated['image'] = $request->file('image')->store('post_image');
        }

        $validated['stok'] = Str::words($validated['stok'], 20);

        $produk->update($validated);
        return redirect('/dashboardmebel/produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        Storage::delete($produk->image);
        $produk->delete();

        return back();
    }
}
