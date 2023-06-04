<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class DashboardMebelPesananMasukController extends Controller
{
    public function index()
    {
        $pesananmasuk = Pemesanan::paginate(20);
        return view('dashboardmebel.pesananmasuk.index',[
            'pemesanans' => $pesananmasuk,
        ]);
    }
    
    public function edit(Request $request)
    {
        $id = $request->id;
        $status = $request->status;

        Pemesanan::find($id)->update(['status'=>$status]);
    }
}
