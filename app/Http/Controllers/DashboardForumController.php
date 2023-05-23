<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Storage;

class DashboardForumController extends Controller
{

    public function index()
    {
        return view('dashboard/forum/index',[
            'forums' => Forum::where('user_id', auth()->user()->id)->paginate(20)
            
        ]);
    }

    public function create()
    {
        return view('dashboard/forum/create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'image|file|required',
            'body' => 'required'
        ]);

        $validated['image'] = $request->file('image')->store('post_image');
        $validated['user_id'] = auth()->user()->id;
        $validated['excerpt'] = Str::words($validated['body'], 10);

        Forum::create($validated);
        return redirect('dashboard/forum');
    }

    public function show(Forum $forum)
    {
        //
    }

    public function edit(Forum $forum)
    {
        return view('dashboard/forum/edit', [
            'forum' => $forum
        ]);
    }

    public function update(Request $request, Forum $forum)
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
            Storage::delete($forum->image);
            $validated['image'] = $request->file('image')->store('post_image');
        }

        $validated['excerpt'] = Str::words($validated['body'], 20);

        $forum->update($validated);
        return redirect('dashboard/forum');

    }

    public function destroy(Forum $forum)
    {
        Storage::delete($forum->image);
        $forum->delete();

        return back();
    }
}
