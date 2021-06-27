<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;
use PDF;

class ExportController extends Controller
{
    public function pdf($id)
    {  
        $hoadon = HoaDon::with(['sanpham', 'khachhang'])->findOrFail($id); 
        // return view('pdf.hoadon', compact('hoadon'));
        $pdf = PDF::loadView('pdf.hoadon', compact('hoadon'));
        return $pdf->download('test.pdf');
    }
}
