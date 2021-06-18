@extends('layouts.app')
@section('content')

<div class="grid gap-6 mb-6 md:grid-cols-2 xl:grid-cols-4 pl-2 pr-2"> 
    <div class="flex items-center p-2 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <div class="p-3 mr-4 text-orange-500 bg-red-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
          Tổng số khách hàng
        </p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
          {{ App\Models\KhachHang::all()->count() }}
        </p>
      </div>
    </div> 
    <div class="flex items-center p-2 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
          Tổng doanh thu
        </p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
          {{ money_format('%.0n', App\Models\HoaDon::where('trang_thai', 2)->sum('tong_thanh_toan')) }}
        </p>
      </div>
    </div>
    <!-- Card -->
    <div class="flex items-center p-2 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
          Tổng đơn hàng mới
        </p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
          {{ App\Models\HoaDon::where('trang_thai', 1)->count() }}
        </p>
      </div>
    </div>
    <!-- Card -->
    <div class="flex items-center p-2 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <div class="p-3 mr-4 text-indigo-500 bg-indigo-100 rounded-full dark:text-indigo-100 dark:bg-indigo-500">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
          Tống số sản phẩm
        </p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
          {{ App\Models\SanPham::count() }}
        </p>
      </div>
    </div>
  </div>
  <div class="pl-2 pr-2">
    <h3 class="pb-2">Danh sách hoá đơn mới</h3>
    <table class="w-full whitespace-no-wrap">
      <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
          <th class="px-4 py-3">#</th>
          <th class="px-4 py-3">Ngày giao dịch</th>
          <th class="px-4 py-3">Mã ngân hàng</th>
          <th class="px-4 py-3">Mã giao dịch</th>
          <th class="px-4 py-3">Khách hàng</th>
          <th class="px-4 py-3">Mã hóa đơn</th>
          <th class="px-4 py-3">Loại thẻ</th> 
          <th class="text-center px-4 py-3">Mã giao dịch VNPAY</th>
          <th class="px-4 py-3"></th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y dark:bg-gray-800">
        @foreach ($giaodichs as $giaodich)
            <tr class="text-gray-700 ">
                <td class="px-4 py-1 text-sm">
                    {{ $giaodich->id }}
                </td>
                <td class="px-4 py-3 text-sm">
                    {{ $giaodich->created_at->format('d/m/Y') }}
                </td>
                <td class="px-4 py-3 text-xs">
                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">
                    {{ $giaodich->vnp_ma_ngan_hang }}
                    </span>
                </td>
                <td class="px-4 py-3 text-sm">
                    {{ $giaodich->vnp_ma_giao_dich_ngan_hang }}
                </td>
                <td class="px-4 py-3 text-sm">
                    {{ $giaodich->khachhang->ho_ten }}
                </td>
                <td class="px-4 py-3 text-sm">
                    {{ $giaodich->hoadon->id }}
                </td>
                <td class="px-4 py-3 text-sm">
                    {{ $giaodich->vnp_loai_the }}
                </td>
                <td class="text-center px-4 py-3 text-sm">
                    {{ $giaodich->vnp_ma_giao_dich_vnpay }}
                </td>
                <td class="text-center w-10">
                    <a class="w-4 h mr-2 transform hover:text-purple-500 text-gray-600 hover:scale-110">
                        <i class="fa fa-eye"></i>
                    </a>
                </td>
            </tr>  
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="pl-2 pr-2 mt-4">
    <h3 class="pb-2">Danh sách khách hàng mới</h3>
    <table class="w-full whitespace-no-wrap">
      <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
          <th class="px-4 py-3">#</th>
          <th class="px-4 py-3">Ngày đăng ký</th>
          <th class="px-4 py-3">Họ tên KH</th>
          <th class="px-4 py-3">Email</th>
          <th class="px-4 py-3">Số điện thoại</th>
          <th class="px-4 py-3">Đăng ký bằng</th>  
          <th class="px-4 py-3"></th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y dark:bg-gray-800">
        @foreach ($khachhangs as $khachhang)
            <tr class="text-gray-700 ">
                <td class="px-4 py-1 text-sm">
                    {{ $loop->iteration }}
                </td>
                <td class="px-4 py-3 text-sm">
                    {{ $khachhang->created_at->format('d/m/Y') }}
                </td>
                <td class="px-4 py-3 text-xs">
                  {{ $khachhang->ho_ten }} 
                </td>
                <td class="px-4 py-3 text-sm">
                    {{ $khachhang->email }}
                </td>
                <td class="px-4 py-3 text-sm">
                    {{ $khachhang->dien_thoai }}
                </td> 
                <td class="px-4 py-3 text-sm">
                  @if($khachhang->mangxahoi == "facebook")
                  <span class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full">
                      {{ $khachhang->mangxahoi  }}
                  </span>
                  @endif
                  @if($khachhang->mangxahoi == "google")
                  <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full">
                    {{ $khachhang->mangxahoi  }}
                  </span>
                  @endif
                </td> 
                <td class="text-center w-10">
                    <a class="w-4 h mr-2 transform hover:text-purple-500 text-gray-600 hover:scale-110">
                        <i class="fa fa-eye"></i>
                    </a>
                </td>
            </tr>  
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="pt-2 pl-2 pr-2 mt-6">
    <h3>Biểu đồ thống kê</h3>
    <div class="flex h-96 space-x-2">
      <div id="pop_div" class="w-2/4 rounded"></div> 
      <div id="temps_div" class="w-2/4"> </div>
    </div>
    <div id="line_chart" class="w-full">

    </div>
  </div>  
  <?= $lava->render('DonutChart', 'IMDB', 'pop_div') ?> 
  <?= $lava->render('LineChart', 'Temps', 'temps_div') ?>
  <?= $lava->render('AreaChart', 'Population', 'line_chart') ?>

@endsection
@push('scripts')
    <script>

    </script>
@endpush