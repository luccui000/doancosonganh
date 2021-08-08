<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use App\Models\SanPham;
use App\Models\GiaoDich;
use App\Models\KhachHang;
use App\Models\LoaiSanPham;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;

class BieuDoController extends Controller
{
    public function index()
    {  
        $lava = new Lavacharts(array());

        $reasons = $lava->DataTable();

        $reasons->addStringColumn('Reasons')
                ->addNumberColumn('Percent');
        $tongSoLuong = SanPham::sum('so_luong_ton_kho');
        // dd($tongSoLuong);
        foreach(LoaiSanPham::all() as $item) { 
            $soLuongTon = SanPham::where('loaisanpham_id', $item->id)->count();
            $tiLePhanTram = $soLuongTon * 100 / $tongSoLuong; 
            $reasons->addRow([$item->ten_loai_sanpham, $tiLePhanTram]);
        } 
        $lava = new Lavacharts; // See note below for Laravel
        $temperatures = $lava->DataTable();
        $temperatures->addDateColumn('Date')
                    ->addNumberColumn('Máy tính - Máy chủ')
                    ->addNumberColumn('Máy tính xách tay - Laptop')
                    ->addNumberColumn('Máy in - TB Văn phòng')
                    ->addNumberColumn('Linh kiện máy tính')
                    ->addNumberColumn('Màn hình máy tính')
                    ->addNumberColumn('Thiết bị lưu trữ')
                    ->addRow(['2014-10-1',  67, 65, 62, random_int(60, 70), random_int(60, 80), random_int(70, 90)])
                    ->addRow(['2014-10-2',  68, 65, 61, random_int(60, 70), random_int(60, 80), random_int(70, 90)])
                    ->addRow(['2014-10-3',  68, 62, 55, random_int(60, 70), random_int(60, 80), random_int(70, 90)])
                    ->addRow(['2014-10-4',  72, 62, 52, random_int(60, 70), random_int(60, 80), random_int(70, 90)])
                    ->addRow(['2014-10-5',  61, 54, 47, random_int(60, 70), random_int(60, 80), random_int(70, 90)])
                    ->addRow(['2014-10-6',  70, 58, 45, random_int(60, 70), random_int(60, 80), random_int(70, 90)])
                    ->addRow(['2014-10-7',  74, 70, 65, random_int(60, 70), random_int(60, 80), random_int(70, 90)])
                    ->addRow(['2014-10-8',  75, 69, 62, random_int(60, 70), random_int(60, 80), random_int(70, 90)])
                    ->addRow(['2014-10-9',  69, 63, 56, random_int(60, 70), random_int(60, 80), random_int(70, 90)])
                    ->addRow(['2014-10-10', 64, 58, 52, random_int(60, 70), random_int(60, 80), random_int(70, 90)])
                    ->addRow(['2014-10-11', 59, 55, 50, random_int(60, 70), random_int(60, 80), random_int(70, 90)])
                    ->addRow(['2014-10-12', 65, 56, 46, random_int(60, 70), random_int(60, 80), random_int(70, 90)])
                    ->addRow(['2014-10-13', 66, 56, 46, random_int(60, 70), random_int(60, 80), random_int(70, 90)])
                    ->addRow(['2014-10-14', 75, 70, 64, random_int(60, 70), random_int(60, 80), random_int(70, 90)])
                    ->addRow(['2014-10-15', 76, 72, 68, random_int(60, 70), random_int(60, 80), random_int(70, 90)])
                    ->addRow(['2014-10-16', 71, 66, 60, random_int(60, 70), random_int(60, 80), random_int(70, 90)])
                    ->addRow(['2014-10-17', 72, 66, 60, random_int(60, 70), random_int(60, 80), random_int(70, 90)])
                    ->addRow(['2014-10-18', 63, 62, 62, random_int(60, 70), random_int(60, 80), random_int(70, 90)]);
        $population = $lava->DataTable();

        $population->addDateColumn('Year')
                    ->addNumberColumn('Số lượng đơn đặt hàng')
                    ->addRow(['2006', random_int(0, 5)])
                    ->addRow(['2007', random_int(0, 5)])
                    ->addRow(['2008', random_int(0, 5)])
                    ->addRow(['2009', random_int(0, 5)])
                    ->addRow(['2010', random_int(0, 5)])
                    ->addRow(['2011', random_int(0, 5)])
                    ->addRow(['2012', random_int(0, 5)])
                    ->addRow(['2013', random_int(0, 5)])
                    ->addRow(['2014', random_int(0, 5)]);
        
        $lava->AreaChart('Population', $population, [
            'title' => 'Số lượng đơn đặt hàng',
            'legend' => [
                'position' => 'in'
            ]
        ]);
        $lava->LineChart('Temps', $temperatures, [
            'title' => 'Số lượng loại hàng bán trong ngày'
        ]);
        

        $lava->DonutChart('IMDB', $reasons, [
            'title' => 'Tỉ lệ loại sản phẩm'
        ]);
        
        return view('admin.bieudo.index', [
            'lava' => $lava, 
            'giaodichs' => GiaoDich::latest()->paginate(10),
            'khachhangs' => KhachHang::latest()->take(5)->get(),
            'tongsokhachhang' => KhachHang::count(),
            'tongdoanhthu' => money_format('%.0n', HoaDon::where('trang_thai', 2)->sum('tong_thanh_toan')),
            'sodonhangmoi' => HoaDon::where('trang_thai', 1)->count(),
            'tongsosanpham' => SanPham::count(),
        ]);
    }
}
