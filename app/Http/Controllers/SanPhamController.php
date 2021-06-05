<?php

namespace App\Http\Controllers;

use App\Models\LoaiSanPham;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function index() 
    {
        $sanphams = SanPham::with(['loaisanpham', 'danhmucthongso', 'hinhanh'])->get();
        return view('admin.sanpham.index', compact('sanphams'));
    }
    public function create()
    {
        $loaisanphams = LoaiSanPham::all();
        return view('admin.sanpham.create', compact('loaisanphams'));
    }
    public function store(Request $request)
    {
        if($request->hasFile('hinhanh')) 
        {
            foreach($request->file('hinhanh') as $file)
            { 
                $filenameWithExt = $file->getClientOriginalName();
                //Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $file->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $file->storeAs('public/sanpham', $fileNameToStore);
                $data[] = $path;
            }
            dd($data);

        } 
        dd($request->file());
    }
}
