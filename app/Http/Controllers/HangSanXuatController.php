<?php

namespace App\Http\Controllers;

use App\Models\HangSanXuat;
use Illuminate\Http\Request;

class HangSanXuatController extends Controller
{
    public function index()
    { 
        return view('admin.hangsanxuat.index', [
            'hangsanxuats' => HangSanXuat::all()
        ]);
    }
    public function create()
    {
        return view('admin.hangsanxuat.create');
    }
    public function store(Request $request)
    {
        $request->validate(HangSanXuat::VALIDATION_RULES, HangSanXuat::VALIDATION_MESSAGES);
        HangSanXuat::create($request->only(['ten_hang', 'dia_chi', 'email', 'dien_thoai', 'website', 'trang_thai']));
        return redirect()->route('admin.hangsanxuat.index');
    }
    public function edit($id)
    {
        return view('admin.hangsanxuat.edit', [
            'hangsanxuat' => HangSanXuat::findOrFail($id)
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate(HangSanXuat::VALIDATION_RULES, HangSanXuat::VALIDATION_MESSAGES);
        HangSanXuat::where('id', $id)->update($request->only(['ten_hang', 'dia_chi', 'email', 'dien_thoai', 'website', 'trang_thai']));
        return redirect()->route('admin.hangsanxuat.index');
    }
}
