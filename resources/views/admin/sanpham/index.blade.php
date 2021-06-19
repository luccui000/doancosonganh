@extends('layouts.app')
@push('styles')
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endpush
@section('content')
<div class="w-full bg-white rounded-lg pb-12">  
    <div class="px-2 py-2 border-b border-gray-100 flex justify-between rounded-sm">
        <div class="rounded-sm">
            <h2 class="font-semibold text-gray-800 pt-2">Danh sách các mặt hàng</h2>
        </div> 
        <a href="{{ route('admin.sanpham.create') }}" class="border border-green-500 hover:no-underline bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline" >
            Thêm mới
        </a>
    </div>
    <div class="p-3">
        <div x-data="{ openTab: 1 }"  data-tabs-active-tab="-mb-px border-l border-t border-r rounded-t" data-tabs-index="2">
            <ul class="flex border-b mb-0">
                @foreach (App\Models\LoaiSanPham::all() as $loaisanpham)
                    <li @click="openTab = {{ $loaisanpham->id  }}" x-bind:class="{ 'border-t-2 border-green-400' : openTab === {{ $loaisanpham->id  }}  }" class="-mb-px mr-1  rounded">
                        <a x-bind:class="{ 'bg-gray-50 text-green-500': openTab === {{ $loaisanpham->id }} }" class="cursor-pointer inline-block border-l border-t border-r rounded-t py-2 px-4 text-gray-500 font-semibold hover:text-green-500 hover:no-underline">{{ $loaisanpham->ten_loai_sanpham }}</a>
                    </li>   
                @endforeach
            </ul> 
            <div class="shadow-md">
                <table class="w-full whitespace-no-wrap datatable"> 
                    <thead class="text-xs uppercase text-gray-400 bg-gray-50 rounded-sm">
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">  
                            <th class="px-4 py-3">#</th> 
                            <th class="px-4 py-3">Hình ảnh</th>
                            <th class="px-4 py-3">Tên sản phẩm</th>
                            <th class="px-4 py-3">Đường dẫn liên kết</th>
                            <th class="px-4 py-3">Số lượng tồn</th> 
                            <th class="px-4 py-3">Hãng sản xuất</th>  
                            <th class="px-4 py-3">Giá nhập</th>
                            <th class="px-4 py-3">Giá niêm yết</th>
                            <th class="px-4 py-3">Giá nhập</th> 
                            <th class="px-4 py-3"></th> 
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y">  
                        @foreach ($sanphams as $sanpham) 
                            <tr x-show="openTab === {{ $sanpham->loaisanpham->id }}" > 
                                <td class="px-4 text-sm">{{ $sanpham->ma_sanpham }}</td>
                                <td class="px-4 text-sm w-20 h-20">
                                    <img  class="w-44 h-20" src="{{ $sanpham->hinh_anh_san_pham }}"/> 
                                </td>
                                <td class="px-4 text-sm truncate" style="max-width: 300px" title="{{ $sanpham->ten_sanpham }}"> {{ $sanpham->ten_sanpham }}</td> 
                                <td class="px-4 text-sm truncate" style="max-width: 150px;" title="{{ $sanpham->duong_dan_lien_ket }}" >{{ $sanpham->duong_dan_lien_ket }}</td> 
                                <td class="px-4 text-sm"> {{ $sanpham->so_luong_ton_kho }}</td> 
                                <td class="px-4 text-sm" title="{{ $sanpham->hangsanxuat->ten_hang }}">{{ $sanpham->hangsanxuat->ten_hang }}</td>     
                                <td class="px-4 text-sm">{{ $sanpham->gia_nhap_vnd }}</td> 
                                <td class="px-4 text-sm">{{ $sanpham->gia_niem_yet_vnd }}</td> 
                                <td class="px-4 text-md font-bold text-red-600">{{ $sanpham->gia_khuyen_mai_vnd }}</td> 
                                <td class="">
                                    <div class="flex item-center justify-center">
                                        <a class="w-4 mr-2 transform hover:text-purple-500 text-gray-600 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        <a href="{{ route('admin.sanpham.edit', $sanpham->id) }}" class="w-4 mr-2 transform hover:text-purple-500 text-gray-600 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('admin.sanpham.destroy', $sanpham->id) }}" method="post">
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