@extends('layouts.app')
@section('content')
    <div class="col-span-full xl:col-span-8 bg-white shadow rounded-sm border border-gray-200">
        <header class="px-2 py-2 border-b border-gray-100 flex justify-between">
            <div class="">
                <h2 class="font-semibold text-gray-800 pt-2">Danh sách các mặt hàng</h2>
            </div> 
            <a href="{{ route('admin.sanpham.create') }}" class="border border-green-500 hover:no-underline bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline" >
                Thêm mới
            </a>
        </header>
        <div class="p-3">
            <div x-data="{ openTab: 1 }"  data-tabs-active-tab="-mb-px border-l border-t border-r rounded-t" data-tabs-index="2">
                <ul class="flex border-b mb-0">
                    @foreach (App\Models\LoaiSanPham::all() as $loaisanpham)
                        <li @click="openTab = {{ $loaisanpham->id  }}" class="-mb-px mr-1">
                            <a x-bind:class="{ 'bg-gray-50 text-green-500': openTab === {{ $loaisanpham->id }} }" class="cursor-pointer inline-block border-l border-t border-r rounded-t py-2 px-4 text-gray-500 font-semibold hover:text-green-500 hover:no-underline">{{ $loaisanpham->ten_loai_sanpham }}</a>
                        </li>   
                    @endforeach
                </ul> 
            <div class="overflow-x-auto">
                <table class="table-auto w-full"> 
                    <thead class="text-xs uppercase text-gray-400 bg-gray-50 rounded-sm">
                        <tr> 
                            <th class="p-2"><div class="font-semibold text-center">#</div> </th> 
                            <th class="p-2"><div class="font-semibold text-center">Hình ảnh</div></th>
                            <th class="p-2"><div class="font-semibold text-center">Tên sản phẩm</div></th>
                            <th class="p-2"><div class="font-semibold text-center truncate">Đường dẫn liên kết</div></th>
                            <th class="p-2"><div class="font-semibold text-center">Hãng sản xuất</div></th> 
                            <th class="p-2"><div class="font-semibold text-center">Thông tin khuyến mãi</div></th>
                            <th class="p-2"><div class="font-semibold text-center">Bảo hành</div></th>
                            <th class="p-2"><div class="font-semibold text-center">Giá nhập</div></th>
                            <th class="p-2"><div class="font-semibold text-center">Giá niêm yết</div></th>
                            <th class="p-2"><div class="font-semibold text-center">Giá nhập</div></th> 
                            <th class="p-2"><div class="font-semibold text-center"></div></th> 
                        </tr>
                    </thead>
                    <tbody class="text-sm font-medium divide-y divide-gray-100">  
                        @foreach ($sanphams as $sanpham) 
                            <tr x-show="openTab === {{ $sanpham->loaisanpham->id }}" > 
                                <td class="p-2"><div class="cursor-pointer text-center">{{ $sanpham->ma_sanpham }}</div></td>
                                <td class="p-2">
                                    <div style="width: 100px;" >
                                        <img  class="w-44 h-20" src="{{ $sanpham->hinh_anh_san_pham }}"/>
                                    </div>
                                </td>
                                <td class="p-2"><div style="max-width: 300px;" class="text-center text-truncate" title="{{ $sanpham->ten_sanpham }}">{{ $sanpham->ten_sanpham }}</div></td> 
                                <td class="p-2"><div style="max-width: 150px;" class="text-center text-truncate"  title="{{ $sanpham->duong_dan_lien_ket }}">{{ $sanpham->duong_dan_lien_ket }}</div></td> 
                                <td class="p-2"><div style="max-width: 150px;" class="text-center text-truncate" title="{{ $sanpham->hang_san_xuat }}">{{ $sanpham->hang_san_xuat }}</div></td>  
                                <td class="p-2"><div style="max-width: 150px;" class="text-center text-truncate" title="{{ $sanpham->thong_tin_khuyen_mai }}">{{ $sanpham->thong_tin_khuyen_mai }}</div></td> 
                                <td class="p-2"><div style="max-width: 150px;" class="text-center text-truncate" title="{{ $sanpham->bao_hanh }}">{{ $sanpham->bao_hanh }}</div></td> 
                                <td class="p-2"><div class="text-center">{{ $sanpham->gia_nhap_vnd }}</div></td> 
                                <td class="p-2"><div class="text-center">{{ $sanpham->gia_niem_yet_vnd }}</div></td> 
                                <td class="p-2"><div class="text-center text-red-500  text-lg">{{ $sanpham->gia_khuyen_mai_vnd }}</div></td> 
                                <td class="">
                                    <div class="flex item-center justify-center">
                                        <a class="w-4 mr-2 transform hover:text-purple-500 text-gray-600 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        <a href="{{ route('admin.sanpham.edit', ['id' => $sanpham->id]) }}" class="w-4 mr-2 transform hover:text-purple-500 text-gray-600 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
                                        <a class="w-4 mr-2 transform hover:text-purple-500 text-gray-600 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
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