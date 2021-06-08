@extends('layouts.app')
@section('content')
    <div class="col-span-full xl:col-span-8 bg-white shadow rounded-sm border border-gray-200">
        <header class="px-2 py-2 border-b border-gray-100 flex justify-between">
            <div class="">
                <h2 class="font-semibold text-gray-800 pt-2">Thêm mới mặt hàng</h2>
            </div>  
        </header>
        <div class="p-3">  
                <div class="bg-white overflow-hidden">
                    <div class="p-@ bg-white border-b border-gray-200">
                        <form method="POST" action="{{ route('admin.hangsanxuat.update', $hangsanxuat->id) }}" >
                            @csrf
                            @method('PUT')
                            <div class="row" style="width: 1080px">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="text-xl text-gray-600">Tên hãng sản xuất  <span class="text-red-500">*</span></label></br>
                                        <input type="text" class="border-2 border-gray-300 p-2 w-full rounded-md" name="ten_hang" value="{{ $hangsanxuat->ten_hang }}"></input>
                                        @error('ten_hang') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="text-xl text-gray-600">Website</label></br>
                                        <input type="text" class="border-2 border-gray-300 p-2 w-full rounded-md" name="website" value="{{ $hangsanxuat->website }}"></input>
                                    </div>
                                </div>
                            </div>   
                            <div class="row" style="width: 1080px">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="text-xl text-gray-600">Email </label></br>
                                        <input type="text" class="border-2 border-gray-300 p-2 w-full rounded-md" name="email" value="{{ $hangsanxuat->email }}"></input>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="text-xl text-gray-600">Số điện thoại</label></br>
                                        <input type="tel" class="border-2 border-gray-300 p-2 w-full rounded-md" name="dien_thoai" value="{{ $hangsanxuat->dienthoai }}"></input>
                                    </div>
                                </div>
                            </div>  
                            <div class="mb-4" style="width: 1050px">
                                <label class="text-xl text-gray-600">Địa chỉ </label></br>
                                <input  type="text" class="w-full border-2 border-gray-300 p-2 rounded-md" name="dia_chi" value="{{ $hangsanxuat->dia_chi }}" ></input>
                            </div>
                            <div class="flex p-1"> 
                                <button role="submit" class="w-28 p-2 rounded bg-blue-500 text-white hover:bg-blue-400">Thêm</button>
                            </div>
                        </form> 
                </div> 
            </div> 
        </div>
    </div>
@endsection 