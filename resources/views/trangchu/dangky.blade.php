@extends('layouts.index')
@push('styles')
    <style>
        .box::after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            right: -25px;
            border-top: 39px solid #4f46e5;
            border-right: 25px solid transparent;
        } 
    </style>
@endpush
@section('content')
<div class="container">
    <div class="w-2/4">
        <a class="relative inline-block lg:inline-block text-md font-bold  text-orange-500  mx-2 sm:hover:bg-transparent rounded-lg">
            <div class="bg-indigo-600 text-white w-40 p-2 box">Đăng ký tài khoản</div>  
        </a>
        <form action="{{ route('formdangky') }}" method="post">
            @csrf
            <div class="pl-2 space-y-2 mt-2">
                <div class="flex justify-between">
                    <div class="text-gray-800 p-1" style="width: 150px">Địa chỉ Email <span class="text-red-600">*</span></div>
                    <div class="flex flex-col flex-1" > 
                      <input type="text" name="email" class="p-1 rounded border-2 border-gray-200 "> 
                      @error('email') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="text-gray-800 p-1" style="width: 150px">Họ và tên <span class="text-red-600">*</span></div>
                    <div class="flex flex-col flex-1" > 
                        <input type="text" name="ho_ten" value="{{ old('ho_ten') }}" class="p-1 rounded border-2 border-gray-200 "> 
                        @error('ho_ten') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="text-gray-800 p-1" style="width: 150px">Mật khẩu <span class="text-red-600">*</span></div>
                    <div class="flex flex-col flex-1" > 
                        <input type="password" name="mat_khau" value="{{ old('mat_khau') }}" class="p-1 rounded border-2 border-gray-200 "> 
                        @error('mat_khau') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="text-gray-800 p-1" style="width: 150px">Xác nhận mật khẩu <span class="text-red-600">*</span></div>
                    <div class="flex flex-col flex-1" > 
                      <input type="password" name="xac_nhan_mat_khau" value="{{ old('xac_nhan_mat_khau') }}" class="p-1 rounded border-2 border-gray-200 "> 
                      @error('xac_nhan_mat_khau') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="text-gray-800 p-1" style="width: 150px">Điện thoại di động <span class="text-red-600">*</span></div>
                    <div class="flex flex-col flex-1" > 
                      <input type="text" name="dien_thoai" value="{{ old('dien_thoai') }}" class="p-1 rounded border-2 border-gray-200 "> 
                      @error('dien_thoai') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="text-gray-800 p-1" style="width: 150px">Địa chỉ nhận hàng</div>
                    <div class="flex flex-col flex-1" > 
                      <input type="text" name="dia_chi" value="{{ old('mat_khau') }}" class="p-1 rounded border-2 border-gray-200 "> 
                    </div>
                </div>
                <div class="relative">   
                    <button type="submit" style="left: 150px" class=" absolute top-0 bg-indigo-600 p-1 text-white rounded hover:bg-indigo-500">Đăng ký</button>
                </div>
            </div>
        </form>
    </div> 
</div>
@endsection