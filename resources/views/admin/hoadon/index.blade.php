@extends('layouts.app')
@section('content')
<div class="col-span-full xl:col-span-8 bg-white shadow rounded-sm border border-gray-200">
    <header class="px-2 py-2 border-b border-gray-100 flex justify-between">
        <div class="">
            <h2 class="font-semibold text-gray-800 pt-2">Danh sách hóa đơn</h2>
        </div> 
        <a href="{{ route('admin.sanpham.create') }}" class="border border-green-500 hover:no-underline bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline" >
            Thêm mới
        </a>
    </header>
    <div class="p-3">
        <div x-data="{ openTab: 1 }"  data-tabs-active-tab="-mb-px border-l border-t border-r rounded-t" data-tabs-index="2">
            <ul class="flex border-b mb-0">
                @foreach (MyApp::TRANG_THAI_HOA_DON as $index => $trangthai)
                    <li @click="openTab = {{ $index  }}" class="-mb-px mr-1">
                        <a x-bind:class="{ 'bg-gray-50 text-green-500': openTab === {{ $index }} }" class="cursor-pointer inline-block border-l border-t border-r rounded-t py-2 px-4 text-gray-500 font-semibold hover:text-green-500 hover:no-underline">{{ $trangthai }}</a>
                    </li>   
                @endforeach
            </ul> 
        <div class="overflow-x-auto">
            <table class="table-auto w-full"> 
                <thead class="text-xs uppercase text-gray-400 bg-gray-50 rounded-sm">
                    <tr> 
                        <th class="pt-3 pb-3"><div class="font-semibold text-center">#</div> </th> 
                        <th class="pt-3 pb-3"><div class="font-semibold text-center">Ngày tạo</div></th>
                        <th class="pt-3 pb-3"><div class="font-semibold text-center">Khách Hàng</div></th>
                        <th class="pt-3 pb-3"><div class="font-semibold text-center">Số lượng hàng mua</div></th>
                        <th class="pt-3 pb-3"><div class="font-semibold text-center truncate">Tổng Tiền</div></th>
                        <th class="pt-3 pb-3"><div class="font-semibold text-center">Tổng thanh toán</div></th> 
                        <th class="pt-3 pb-3"><div class="font-semibold text-center">Hình thức thanh toán</div></th>
                        <th class="pt-3 pb-3"><div class="font-semibold text-center">Ghi chú</div></th> 
                        <th class="pt-3 pb-3" ></th> 
                    </tr>
                </thead>
                <tbody class="text-sm font-medium divide-y divide-gray-100">    
                    @foreach ($hoadons as $hoadon) 
                        <tr x-show="openTab === {{ $hoadon->trang_thai }}" > 
                            <td class="p-2"><div class="cursor-pointer text-center">{{ $hoadon->id }}</div></td> 
                            <td class="p-2"><div style="max-width: 300px;" class="text-center text-truncate" title="{{ $hoadon->created_at }}">{{ $hoadon->created_at->format('d/m/y') }}</div></td> 
                            <td class="p-2"><div style="max-width: 150px;" class="text-center text-truncate">{{ $hoadon->khachhang->ho_ten }}</div></td>  
                            <td class="p-2 text-center">{{ count($hoadon->sanpham)}}</td>  
                            <td class="p-2 text-center font-bold">{{ money_format('%.0n', $hoadon->tong_tien) }}</td>  
                            <td class="p-2 text-center font-bold text-lg text-green-500">{{ money_format('%.0n', $hoadon->tong_thanh_toan) }}</td>  
                            <td class="p-2 text-center">{{ MyApp::HINH_THUC_THANH_TOAN[$hoadon->hinh_thuc_thanh_toan] ?? '' }}</td>  
                            <td class="p-2 text-center">{{ $hoadon->ghi_chu !== "" ? $hoadon->ghi_chu : 'không có' }}</td>  
                            <td style="width: 100px">
                                <div class="flex item-center justify-center">
                                    <a href="{{ route('admin.hoadon.show', $hoadon->id) }}" class="w-4 mr-2 transform hover:text-purple-500 text-gray-600 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('admin.sanpham.edit', $hoadon->id) }}" class="w-4 mr-2 transform hover:text-purple-500 text-gray-600 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('admin.sanpham.destroy', $hoadon->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="w-4 mr-2 transform hover:text-purple-500 text-gray-600 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button> 
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection