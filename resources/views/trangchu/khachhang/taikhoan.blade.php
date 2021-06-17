@extends('layouts.index')
@section('content')
    <div class="container">
        <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
            <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-700 bg-gray-50 dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
                <x-sidebar></x-sidebar> 
            </div>
            <div class="flex-1 p-2 mt-6">
                <h4>Thông tin tài khoản</h4>
                <div class="w-full bg-white">
                    <div class="p-2 w-2/3 space-y-4"> 
                        <div class="flex justify-between">
                            <div class="text-gray-800 p-1" style="width: 150px">Họ tên</div>
                            <div class="flex flex-col flex-1" > 
                              <input type="text" value="{{ auth()->guard('khachhangs')->user()->ho_ten ?? "" }}" name="ho_ten" class="p-1 rounded border-2 border-gray-200 "> 
                              @error('ho_ten') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                            </div>
                        </div> 
                        <div class="flex justify-between">
                            <div class="text-gray-800 p-1" style="width: 150px">Số điện thoại</div>
                            <div class="flex flex-col flex-1" > 
                              <input type="text" value="{{ auth()->guard('khachhangs')->user()->dien_thoai ?? "" }}" name="dien_thoai" class="p-1 rounded border-2 border-gray-200 "> 
                              @error('dien_thoai') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div class="text-gray-800 p-1" style="width: 150px">Email</div>
                            <div class="flex flex-col flex-1" > 
                              <input type="text" value="{{ auth()->guard('khachhangs')->user()->email ?? "" }}" readonly name="email" class="p-1 rounded border-2 border-gray-200 bg-gray-300"> 
                              @error('email') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                            </div>
                        </div>  
                        <button type="submit" style="margin-left: 150px" class=" bg-indigo-600 pt-1 pb-1 pl-2 pr-2 text-white rounded hover:bg-indigo-500">Cập nhật</button> 
                    </div>
                </div>
                <h4 class="mt-4">Liên kết mạng xã hội</h4>
                <div class="w-full bg-white">
                    <div class="flex justify-between items-center pl-2 pr-2">
                        <div class="flex items-center">
                            <div>
                                <x-icon.facebook2></x-icon.facebook2>
                            </div>
                            <div class="ml-2">
                                Facebook
                            </div> 
                        </div>
                        <div class="cursor-pointer">
                            @if(auth()->guard('khachhangs')->user()->mangxahoi === 'facebook')
                                <span>Đã liên kết</span>
                            @else
                                <a href="#">Liên kết</a> 
                            @endif
                        </div>
                    </div>
                    <div class="flex justify-between items-center pl-2 pr-2">
                        <div class="flex items-center">
                            <div>
                                <x-icon.google></x-icon.google>
                            </div>
                            <div class="ml-2">
                                Facebook
                            </div> 
                        </div>
                        <div class="cursor-pointer">
                            @if(auth()->guard('khachhangs')->user()->mangxahoi === 'google')
                                <span>Đã liên kết</span>
                            @else
                                <a href="#">Liên kết</a> 
                            @endif
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
@endsection
@push('scripts')
    <script src="{{ asset('js/alpine.min.js')}}"></script>
@endpush