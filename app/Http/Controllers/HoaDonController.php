<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HoaDonController extends Controller
{
    public function index()
    {
        $hoadons = HoaDon::with(['sanpham', 'khachhang'])->get();
        return view('admin.hoadon.index', [
            'hoadons' => $hoadons
        ]);
    }
    public function show($id)
    {
        return view('admin.hoadon.show', [
            'hoadon' => HoaDon::where('id', $id)->with(['sanpham'])->get()
        ]);
    }
    public function update(Request $request, $id)
    { 
        $trangThai = $request->query('trang_thai');
        abort_if(!in_array($trangThai, [1, 2]), Response::HTTP_FORBIDDEN);
        $hoadon = HoaDon::where('id', $id)->first();
        $hoadon->update([
            'trang_thai' => $trangThai,
        ]); 
        return redirect()->route('admin.hoadon.index', ['trang_thai' => $trangThai]);
    }
}
