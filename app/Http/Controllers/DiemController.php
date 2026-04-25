<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PhamDucQuyen;

class DiemController extends Controller
{
    public function index()
    {
        $sinhviens = PhamDucQuyen::with('diems')->get();
        return view('diem.index', compact('sinhviens'));
    }
}
