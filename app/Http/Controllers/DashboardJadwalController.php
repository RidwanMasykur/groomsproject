<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Storage;

class DashboardJadwalController extends Controller
{

    public function index()
    {
        $jadwal = Jadwal::paginate(20);
        return view('dashboard/jadwal/index',[
            'jadwals' => $jadwal,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/jadwal/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'image|file|required',
            'body' => 'required',
            'caption' => 'required'
        ]);

        $validated['image'] = $request->file('image')->store('post_image');
        $validated['user_id'] = auth()->user()->id;
        $validated['excerpt'] = Str::words($validated['body'], 10);

        Forum::create($validated);
        return redirect('dashboard/jadwal');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal $jadwal)
    {
        return view('dashboard/jadwal/edit', [
            'jadwal' => $jadwal
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $rules = [
            'title' => 'required',
            'body' => 'required'
        ];

        if($request->file('image')) {
            $rules['image'] = 'image|file|required';
        }

        $validated = $request->validate($rules);

        if($request->file('image')) {
            Storage::delete($jadwal->image);
            $validated['image'] = $request->file('image')->store('post_image');
        }

        $validated['excerpt'] = Str::words($validated['body'], 20);

        $jadwal->update($validated);
        return redirect('dashboard/jadwal');
    }


    public function destroy(Jadwal $jadwal)
    {
        Storage::delete($jadwal->image);
        $jadwal->delete();

        return back();
    }
}
