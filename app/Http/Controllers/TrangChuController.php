<?php

namespace App\Http\Controllers;

use App\Models\SanPham;    

class TrangChuController extends Controller
{
    public function index()
    {
        $sanphams = SanPham::all();
        return view('trangchu.index', compact('sanphams'));
    }
    public function show($id)
    {
        $sanpham = SanPham::where('duong_dan_lien_ket', $id)->first(); 
        return view('trangchu.show', [
            'sanpham' => $sanpham
        ]);
    }
    public function themvaogiohang($id)
    {
        $product = SanPham::findOrFail($id); 

        $cart = session()->get('giohang'); 
        if(!$cart) {
            $cart = [
                    $id => [
                        "ten_sanpham" => $product->ten_sanpham,
                        "so_luong" => 1,
                        "gia_khuyen_mai" => $product->gia_khuyen_mai,
                        "hinh_anh_san_pham" => $product->hinh_anh_san_pham
                    ]
            ];
            session()->put('giohang', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        } 
        if(isset($cart[$id])) {
            $cart[$id]['so_luong']++;
            session()->put('giohang', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        } 
        $cart[$id] = [
            "ten_sanpham" => $product->ten_sanpham,
            "so_luong" => 1,
            "gia_khuyen_mai" => $product->gia_khuyen_mai,
            "hinh_anh_san_pham" => $product->hinh_anh_san_pham
        ];
        session()->put('giohang', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function xemgiohang()
    {
        return view('trangchu.giohang', [
            'giohangs' => session()->get('giohang')
        ]);
    }
}
