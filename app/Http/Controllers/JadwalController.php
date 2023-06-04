<?php

namespace App\Http\Controllers;

use App\Models\Penjadwalan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JadwalController extends Controller
{
    function index() {
        return view ('3jadwal',[
            "title" => "Grooms Jadwal",
            'jadwals' => Jadwal::paginate(20)
        ]);
    }

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
    public function show(Penjadwalan $penjadwalan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penjadwalan $penjadwalan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penjadwalan $penjadwalan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penjadwalan $penjadwalan)
    {
        //
    }
}
