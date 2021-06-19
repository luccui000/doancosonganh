@extends('layouts.app')
@push('styles')
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endpush
@section('content')
<div class="w-full bg-white rounded-lg pb-12">  
    <div class="pl-2 pr-2 ">
        <h3 class="py-2">Danh sách hóa đơn</h3> 
        <div class="p-3">
            <div x-data="{ openTab: {{ request()->query('trang_thai') ?? 0 }} }"  data-tabs-active-tab="-mb-px border-l border-t border-r rounded-t" data-tabs-index="2">
                <ul class="flex border-b mb-0">
                    @foreach (MyApp::TRANG_THAI_HOA_DON as $index => $trangthai)
                        <li @click="openTab = {{ $index  }}" x-bind:class="{ 'border-t-2 border-green-400' : openTab === {{ $index }}  }" class="-mb-px mr-1  rounded">
                            <a x-bind:class="{ 'bg-gray-50 text-green-500 border-t-2 ': openTab === {{ $index }} }" class="cursor-pointer inline-block border-l border-t border-r rounded-t py-2 px-4 text-gray-500 font-semibold hover:text-green-500 hover:no-underline">{{ $trangthai }}</a>
                        </li>   
                    @endforeach
                </ul> 
                <div class="shadow-md">
                    <table class="w-full whitespace-no-wrap datatable">  
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50"> 
                                <th class="px-4 py-3"># </th> 
                                <th class="px-4 py-3">Ngày tạo</th>
                                <th class="px-4 py-3">Khách Hàng</th>
                                <th class="px-4 py-3">Số lượng hàng mua</th>
                                <th class="px-4 py-3">Tổng Tiền</th>
                                <th class="px-4 py-3">Tổng thanh toán</th> 
                                <th class="px-4 py-3">Hình thức thanh toán</th>
                                <th class="px-4 py-3">Ghi chú</th> 
                                <th class="px-4 py-3" ></th> 
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:bg-gray-800">    
                            @foreach ($hoadons as $hoadon)  
                                <tr x-show="openTab === {{ $hoadon->trang_thai }}" > 
                                    <td class="px-4 py-4 text-sm">{{ $hoadon->id }}</td> 
                                    <td class="px-4 py-4 text-sm" style="max-width: 300px;" title="{{ $hoadon->created_at }}" >{{ $hoadon->created_at->format('d/m/y') }}</td> 
                                    <td class="px-4 py-4 text-sm" style="max-width: 150px;" > {{ $hoadon->khachhang->ho_ten }}</td>  
                                    <td class="px-4 py-4 text-sm text-center">{{ count($hoadon->sanpham) }}</td>  
                                    <td class="px-4 py-4 text-sm text-center font-bold">{{ money_format('%.0n', $hoadon->tong_tien) }}</td>  
                                    <td class="px-4 py-4 text-sm text-green-500">{{ money_format('%.0n', $hoadon->tong_thanh_toan) }}</td>  
                                    <td class="px-4 py-4 text-sm text-center">{{ MyApp::HINH_THUC_THANH_TOAN[$hoadon->hinh_thuc_thanh_toan] ?? '' }}</td>  
                                    <td class="p-2 text-center">{{ $hoadon->ghi_chu !== "" ? $hoadon->ghi_chu : 'không có' }}</td>
                                    @if($hoadon->trang_thai === "1")  
                                    <td style="width: 100px;">
                                        <form action="{{ route('admin.hoadon.update', [$hoadon->id, 'trang_thai' => 2])  }}" method="POST">
                                            @csrf @method('PUT')
                                            <button type="submit" class="mr-2 transform hover:text-green-500 text-gray-600 hover:scale-110">
                                                Xác nhận
                                            </button>
                                        </form>
                                    </td>
                                    @else
                                    <td style="width: 100px">
                                        <div class="flex item-center justify-center"> 
                                            <a href="{{ route('admin.hoadon.show', $hoadon->id) }}" class="w-4 mr-2 transform hover:text-purple-500 text-gray-600 hover:scale-110">
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
                                    @endif  
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(function () { 
          var table = $('.datatable').DataTable({
                "bPaginate": false,
                "bInfo": false,  
                "language": {
                    "search": "Tìm kiếm:"
                }
          });
        });
    </script>
@endpush