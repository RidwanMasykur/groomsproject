<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Storage;

class DashboardForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard/forum/index',[
            'forums' => Forum::where('user_id', auth()->user()->id)->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/forum/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'image|file|max:1024|required',
            'body' => 'required'
        ]);

        $validated['image'] = $request->file('image')->store('post_image');
        $validated['user_id'] = auth()->user()->id;
        $validated['excerpt'] = Str::words($validated['body'], 10);

        Forum::create($validated);
        return redirect('/dashboard/forum')->with('notify', 'Berhasil Menambah Data.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Forum $forum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Forum $forum)
    {
        return view('dashboard/forum/edit', [
            'forum' => $forum
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Forum $forum)
    {
        $rules = [
            'title' => 'required',
            'body' => 'required'
        ];

        if($request->file('image')) {
            $rules['image'] = 'image|file|max:1024|required';
        }

        $validated = $request->validate($rules);

        if($request->file('image')) {
            Storage::delete($forum->image);
            $validated['image'] = $request->file('image')->store('post_image');
        }

        $validated['excerpt'] = Str::words($validated['body'], 10);

        $forum->update($validated);

        return redirect('/dashboard/forum')->with('notify', 'Berhasil mengubah data.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forum $forum)
    {
        Storage::delete($forum->image);
        $forum->delete();

        return redirect('/dashboard/forum')->with('notify', 'Berhasil menghapus data.');
    }
}
