<?php

namespace App\Http\Controllers;

use App\Models\HinhAnh;
use Illuminate\Http\Request;

class HinhAnhController extends Controller
{
    public function index()
    {
        $hinhanhs = HinhAnh::paginate(20);
        return view('admin.hinhanh.index', compact('hinhanhs'));
    }
}
