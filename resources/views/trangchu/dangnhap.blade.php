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
<div class="container h-96">
    <div class="w-2/4">
        <a class="relative inline-block lg:inline-block text-md font-bold  text-orange-500  mx-2 sm:hover:bg-transparent rounded-lg">
            <div class="bg-indigo-600 text-white w-40 p-2 box">Đăng nhập tài khoản</div>  
        </a>
        <form action="{{ route('xacthuckhach') }}" method="post">
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
                    <div class="text-gray-800 p-1" style="width: 150px">Mật khẩu <span class="text-red-600">*</span></div>
                    <div class="flex flex-col flex-1" > 
                        <input type="password" name="mat_khau" value="{{ old('mat_khau') }}" class="p-1 rounded border-2 border-gray-200 "> 
                        @error('mat_khau') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>
                </div> 
                <div class="relative">   
                    <button type="submit" style="left: 150px" class=" absolute top-0 bg-indigo-600 p-2 text-white rounded hover:bg-indigo-500">Đăng nhập</button>
                </div>
            </div> 
        </form>
        <div class="mt-14 ml-40"> 
            <span class="text-gray-600">Hoặc đăng nhập bằng</span>
            <div class="flex justify-between mt-2">
                <div class="bg-blue-800 w-44 rounded p-2 text-center hover:bg-blue-700">
                    <a href="{{ route('dangnhap.mangxahoi', 'facebook') }}" class="text-white rounded p-2 cursor-pointer hover:no-underline" >Facebook</a> 
                </div>
                <div class="bg-red-600 w-44 rounded p-2 text-center hover:bg-red-500">
                    <a href="{{ route('dangnhap.mangxahoi', 'google') }}" class=" text-white rounded p-2 cursor-pointer hover:no-underline" >Google</a> 
                </div>
            </div>
        </div>
    </div> 
</div> 
<x-footer></x-footer>
@endsection