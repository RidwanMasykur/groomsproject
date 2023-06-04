<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class DashboardPemesananController extends Controller
{

    public function index()
    {
        $pemesanan = Pemesanan::paginate(20);
        return view('dashboard/pemesanan/index',[
            'pemesanans' => $pemesanan,
        ]);
    }

    public function create()
    {
        return view('dashboard/pemesanan/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'payment' => 'required',
            'amount' => 'required'
        ]);
        

        // $validated['name'] = auth()->user()->id;
        // $validated['address'] = auth()->user()->id;
        // $validated['phone'] = auth()->user()->id;
        // $validated['payment'] = 
        // $validated['amount'] = Str::words($validated['stok'], 10);
        
        
        Pemesanan::create($validated);
        return redirect('/dashboard/pemesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pemesanan $pemesanan)
    {
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'payment' => 'required',
            'amount' => 'required'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemesanan $pemesanan)
    {
        {
            $pemesanan->delete();
    
            return back();
        }
    }
}
