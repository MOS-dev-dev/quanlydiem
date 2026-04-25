<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TanAnhTuan;

class DiemController extends Controller
{
    public function index()
    {
        $sinhviens = TanAnhTuan::with('diems')->get();
        return view('diem.index', compact('sinhviens'));
    }
}
