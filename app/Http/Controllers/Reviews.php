<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\review;

class Reviews extends Controller
{
    public function Barang(){
        $data=[
            'barang'=>review::all()
        ];
        return view('admin.review', $data);
    }

    public function Detail($id){
        $detail = review::find($id);
        return view('admin.detail', compact('detail'));
    }
}
