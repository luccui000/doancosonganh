@extends('layouts.app')
@section('content')
<div class="col-span-full xl:col-span-8 bg-white shadow rounded-sm border border-gray-200">
    <header class="px-2 py-2 border-b border-gray-100 flex justify-between">
        <div class="">
            <h2 class="font-semibold text-gray-800 pt-2">Danh sách các hãng sản xuất</h2>
        </div> 
        <a href="{{ route('admin.hangsanxuat.create') }}" class="border border-green-500 hover:no-underline bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline" >
            Thêm mới
        </a>
    </header>
    <div class="overflow-x-auto">
        <table class="table-auto w-full"> 
            <thead class="text-xs uppercase text-gray-400 bg-gray-50 rounded-sm">
                <tr> 
                    <th class="pt-3 pb-3"><div class="font-semibold text-center">#</div> </th> 
                    <th class="pt-3 pb-3"><div class="font-semibold text-center">Tên hãng</div></th>
                    <th class="pt-3 pb-3"><div class="font-semibold text-center">Địa chỉ</div></th>
                    <th class="pt-3 pb-3"><div class="font-semibold text-center">Điện thoại</div></th>
                    <th class="pt-3 pb-3"><div class="font-semibold text-center">Email</div></th> 
                    <th class="pt-3 pb-3"><div class="font-semibold text-center">Website</div></th> 
                    <th class="pt-3 pb-3"><div class="font-semibold text-center"></div></th> 
                </tr>
            </thead>
            <tbody class="text-sm font-medium divide-y divide-gray-100">  
                @foreach ($hangsanxuats as $hangsanxuat)
                    <tr>
                        <td class="p-3"><div class="text-center">{{ $loop->iteration }}</div></td>
                        <td class="p-3"><div class="text-center">{{ $hangsanxuat->ten_hang }}</div></td>
                        <td class="p-3"><div class="text-center">{{ $hangsanxuat->dia_chi }}</div></td>
                        <td class="p-3 text-center"><a href="tel:{{ $hangsanxuat->dien_thoai }}" class="hover:no-underline cursor-pointer text-gray-700">{{ $hangsanxuat->dien_thoai }}</a></td>
                        <td class="p-3 text-center"><a href="mailto:{{ $hangsanxuat->email }}" class="hover:no-underline cursor-pointer">{{ $hangsanxuat->email }}</a></td>
                        <td class="p-3 text-center"><a href="{{ $hangsanxuat->website }}">{{ $hangsanxuat->website }}</a></td>
                        <td class="">
                            <div class="flex item-center justify-center"> 
                                <a href="{{ route('admin.hangsanxuat.edit', $hangsanxuat->id) }}" class="w-4 mr-2 transform hover:text-purple-500 text-gray-600 hover:scale-110">
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
@endsection