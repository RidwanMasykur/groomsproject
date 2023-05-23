<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function akun(){
        return view ('dashboard.akun.index');
    }

    public function edit(Request $request){
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'address' => 'required|max:150',
            'phone' => 'required|numeric|min:11',
        ]);

        $user = User::find(auth()->user()->id);

        if($request->file("profile_img")){
            $user
                ->addMediaFromRequest("profile_img")
                ->toMediaCollection("profile");
        }
        $user->update($validateData);

        return redirect("/dashboard/akun")->with("message","Data berhasil diubah!");
    }
}
