<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CheckoutController extends Controller
{
    public function xacnhan()
    {
        $hinhThucThanhToan = session()->get('hinh_thuc_thanh_toan'); 
        abort_if(!in_array($hinhThucThanhToan, [0, 1]), Response::HTTP_NOT_FOUND); 
        return view('trangchu.xacnhan', [
            'hinhThucThanhToan' => $hinhThucThanhToan
        ]);
    }
}
