<?php

namespace App\Http\Controllers;

use App\Models\Wedding;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index($id,Request $request)
    {
        $id = $request->id ?? 1;
        $to = $request->to;
        $wedding = Wedding::with('Bride','Detail','Gift','Thank','Wishes','Galery')->where('id',$id)->first();
        return view('theme1.index', compact('to','wedding'));
    }
}
