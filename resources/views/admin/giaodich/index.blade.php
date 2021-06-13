@extends('layouts.app')
@section('content') 
    <div class="p-2 col-span-full xl:col-span-8 bg-white shadow rounded-sm border border-gray-200">
        <header class="px-2 py-2 border-b border-gray-100 flex justify-between">
            <div class="">
                <h2 class="font-semibold text-gray-800 pt-2">Danh sách giao dịch</h2>
            </div>  
        </header>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
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
        </div>
    </div>
@endsection