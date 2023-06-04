<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Belanja;
use Illuminate\Http\Request;

class DashboardBelanjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::paginate(20);
        return view('dashboard/belanja/index',[
            'produks' => $produk,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Belanja $belanja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Belanja $belanja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Belanja $belanja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Belanja $belanja)
    {
        //
    }
}
