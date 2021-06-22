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
                    <div class="text-gray-800 p-1" style="min-width: 150px">Địa chỉ nhận hàng</div>
                    <div class="flex"  >   
                        <div class="">
                            <select name="calc_shipping_provinces" class="border-2 border-gray-200 p-2 rounded"  required="">
                                <option value="">Tỉnh / Thành phố</option>
                            </select>
                        </div>
                        <div class="ml-4">
                            <select name="calc_shipping_district" class="border-2 border-gray-200 p-2 rounded" required="">
                              <option value="">Quận / Huyện</option>
                            </select> 
                        </div>
                    </div> 
                </div>
                <div class="" style="margin-left: 150px; ">
                    <input type="text" name="dia_chi" id="dia_chi" value="{{ old('dia_chi') }}" class="text-right p-1 w-full rounded border-2 border-gray-200 "> 
                </div>
                <div class="flex">
                    <div class="" style="width: 150px"></div> 
                    <input class="billing_address_1" name="" type="hidden" value="">
                    <input class="billing_address_2" name="" type="hidden" value="">
                </div>
                <div class="relative">   
                    <button type="submit" style="left: 150px" class=" absolute top-0 bg-indigo-600 p-1 text-white rounded hover:bg-indigo-500">Đăng ký</button>
                </div>
            </div>
        </form>
    </div> 
</div>
<x-footer></x-footer>
@endsection
@push('scripts')
    <script src="{{ asset('js/districts.min.js') }}"></script> 
    <script> 
    (function() {
        if (address_2 = localStorage.getItem('address_2_saved')) {
            $('select[name="calc_shipping_district"] option').each(function() {
                if ($(this).text() == address_2) {
                $(this).attr('selected', '')
                }
            })
            $('input.billing_address_2').attr('value', address_2)
        }
        if (district = localStorage.getItem('district')) {
            $('select[name="calc_shipping_district"]').html(district)
            $('select[name="calc_shipping_district"]').on('change', function() {
                var target = $(this).children('option:selected')
                target.attr('selected', '')
                $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
                address_2 = target.text()
                $('input.billing_address_2').attr('value', address_2)
                district = $('select[name="calc_shipping_district"]').html()
                localStorage.setItem('district', district)
                localStorage.setItem('address_2_saved', address_2)
            })
        }
        $('select[name="calc_shipping_provinces"]').each(function() { 
            var $this = $(this),
                stc = ''  
            c.forEach(function(i, e) {
                e += +1
                stc += '<option value=' + e + '>' + i + '</option>'
                $this.html('<option value="">Tỉnh / Thành phố</option>' + stc)
                if (address_1 = localStorage.getItem('address_1_saved')) {
                    $('select[name="calc_shipping_provinces"] option').each(function() {
                        if ($(this).text() == address_1) {
                            $(this).attr('selected', '')
                        }
                    })
                    $('input.billing_address_1').attr('value', address_1) 
                }
                $this.on('change', function(i) { 
                i = $this.children('option:selected').index() - 1
                var str = '',
                    r = $this.val()
                if (r != '') {
                    arr[i].forEach(function(el) {
                        str += '<option value="' + el + '">' + el + '</option>'
                        $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>' + str)
                    })
                    var address_1 = $this.children('option:selected').text()
                    var district = $('select[name="calc_shipping_district"]').html()
                    localStorage.setItem('address_1_saved', address_1)
                    
                    localStorage.setItem('district', district)
                    $('select[name="calc_shipping_district"]').on('change', function() {
                        var target = $(this).children('option:selected')
                        target.attr('selected', '')
                        $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
                        var address_2 = target.text()
                        $('input.billing_address_2').attr('value', address_2)
                        $("#dia_chi").val(`, Tỉnh ${address_1}, ${address_2}` );
                        district = $('select[name="calc_shipping_district"]').html()
                        localStorage.setItem('district', district)
                        localStorage.setItem('address_2_saved', address_2)
                    })
                } else {
                    $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>')
                    district = $('select[name="calc_shipping_district"]').html()
                    localStorage.setItem('district', district)
                    localStorage.removeItem('address_1_saved', address_1)
                }
                })
            })
        }) 
    })()
    </script> 
@endpush
