@extends('layouts.index') 
@section('content') 
<div class="container-fluid">    
  <div class="max-w-md mx-auto rounded-lg md:max-w-7xl">
    <div class="col-span-2 p-5"> 
        <table class="w-full text-sm lg:text-base" >
            <thead>
              <tr class="h-6">
                <th class="hidden p-2 md:table-cell"><h1 class="text-xl font-medium text-left">Giỏ hàng</h1></th>
                <th class="text-left">Tên sản phẩm</th>
                <th class="lg:text-right text-left pl-5 lg:pl-0">Số lượng</th>
                <th class="hidden text-center md:table-cell">Đơn giá</th>
                <th class="text-right  pr-2">Thành tiền</th>
              </tr>
            </thead>
            <tbody>       
              @foreach (Cart::content() as $id => $row) 
                  <tr class="bg-gray-100 rounded"> 
                    <td class="hidden pb-4 md:table-cell p-2 w-32"> 
                        <img src="@php echo $row->options->hinh_anh_san_pham @endphp" class="max-h-10 mt-2 rounded" alt="Thumbnail">
                    </td>
                    <td class="w-2/4"> 
                        <a href="{{ route('trangchu.show', $row->options->duong_dan_lien_ket)}}" class="mb-2 hover:no-underline cursor-pointer text-gray-700"><?php echo $row->name; ?></a> <br/>
                        <form action="{{ route('trangchu.xoahangtronggio', $id) }}" method="post">
                          @csrf
                          <button type="submit" class="text-blue-700 text-sm">Xóa</button>  
                        </form>
                    </td>
                    
                    <td class="justify-center md:justify-center md:flex mt-3">
                        <div class="w-28 h-10">
                          <form action="{{ route('trangchu.capnhatsoluong', $id) }}" method="POST" >
                            <div class="relative flex flex-row w-full h-8">
                                @csrf
                                <input type="number" min="1" value="<?php echo $row->qty; ?>" name="so_luong"
                                  class="w-full rounded font-semibold text-center text-gray-700 bg-gray-200 outline-none focus:outline-none hover:text-black focus:text-black" />
                                <button type="submit" class="cursor-pointer bg-green-500 rounded ml-2 text-white text-center p-1">Lưu</button> 
                            </div>
                          </form>
                        </div>
                    </td>
                    <td class="hidden text-center md:table-cell">
                        <span class="text-sm lg:text-base font-medium">
                          {{ money_format('%.0n', $row->price) }}
                        </span>
                    </td>
                    <td class="text-right pr-2"> 
                        <span class="font-bold text-blue-500 lg:text-base ">
                          {{ money_format('%.0n', $row->total) }}
                        </span>
                    </td>
                </tr> 
              @endforeach
            </tbody>
        </table> 
        @if(Cart::content()->count() === 0)
          <div class="text-center">Chưa có sản phẩm nào trong giỏ hàng</div>
        @endif   
    </div>
    <form
      id="main-form"
      class="w-full flex justify-between space-x-2" 
      action="{{ route('thanhtoan') }}" 
      method="POST" > 
      <div class="w-1/2">
          @csrf
          <h4 class="p-2 bg-gray-100 rounded text-lg">
              Thông tin thanh toán
          </h4> 
          <div class="p-2">
              <div class="input-group flex flex-col mt-2">
                  <label for="">Họ tên nhận hàng <span class="text-red-500">(*)</span></label>   
                  <input 
                      @if(auth()->guard('khachhangs')->user())
                          value="{{ thong_tin_khach_hang('ho_ten') }}"
                          readonly
                      @endif
                      type="text" 
                      name="ho_ten" 
                      class="w-full p-2 rounded border-2 border-gray-200 " 
                      placeholder="VD: Nguyễn Văn A"> 
                  @error('ho_ten') 
                      <span class="mt-1 text-red-500 text-sm">{{ $message }}</span> 
                  @enderror
              </div>
              <div class="input-group flex flex-col mt-2">
                  <label for="">Email</label>
                  <input 
                      @if(auth()->guard('khachhangs')->user())
                          value="{{ thong_tin_khach_hang('email') }}"
                          readonly
                      @endif
                      type="text" 
                      name="email" 
                      class="w-full p-2 rounded border-2 border-gray-200" 
                      placeholder="email@gmail.com">  
              </div>
              <div class="flex flex-col mt-2">
                  <label for="">Số điện thoại nhận hàng <span class="text-red-500">(*)</span></label>
                  <input 
                      @if(auth()->guard('khachhangs')->user())
                          value="{{ thong_tin_khach_hang('dien_thoai') }}"
                          readonly
                      @endif
                      type="text" 
                      name="dien_thoai" 
                      class="w-full p-2 rounded border-2 border-gray-200" 
                      placeholder="039xxxxxxx"> 
                  @error('dien_thoai') 
                      <span class="mt-1 text-red-500 text-sm">{{ $message }}</span> 
                  @enderror
              </div>  
              <div class="flex flex-col mt-2">
                  <label for="">Ghi chú</label>
                  <textarea 
                      name="ghi_chu" 
                      value="{{ old('ghi_chu') }}" 
                      class="w-full p-2 rounded border-2 border-gray-200" >
                  </textarea>
              </div>    
          </div>  
      </div>
      <div class="w-1/2">
        <h4 class="p-2 bg-gray-100 rounded text-lg text-right">
          Thông tin thanh toán
        </h4>  
        <div class="flex justify-between border-b">
          <span class="py-3 px-3 text-lg text-center">Tổng tiền hàng</span> 
          <span class="py-3 px-3 text-lg text-center font-bold">
            @php echo Cart::total(); @endphp₫  
          </span> 
        </div> 
        <div class="flex justify-between border-b">
          <span class="py-3 px-3 text-lg text-center">Phí vận chuyển</span> 
          <span class="py-3 px-3 text-lg text-center font-bold">
            {{ money_format('%.0n', $phivanchuyen) }}
          </span> 
        </div> 
        <div class="flex justify-between border-b">
          <span class="py-3 px-3 text-lg text-center">Tổng thanh toán</span> 
          <span class="py-3 px-3 text-lg text-center font-bold">
            @php 
              $total = Cart::total(); 
              $total = +str_replace('.', '', $total);
              echo money_format('%.0n', $total + $phivanchuyen);
            @endphp
          </span> 
        </div>  
        <input type="hidden" name="hinh_thuc_thanh_toan" id="hinhThucThanhToan" value="0">
        <div class="flex justify-center  text-white space-x-2 mt-2"> 
          <button type="button" id="online" class="w-1/2 px-4 py-3 bg-yellow-500 rounded shadow item-center hover:bg-yellow-400 "> 
            <span class="uppercase">Thanh toán online</span>
          </button> 
          <button type="button" id="offline" class="w-1/2 px-4 py-3 bg-indigo-600 rounded shadow item-center hover:bg-indigo-500 "> 
            <span class="uppercase">Thanh toán khi nhận hàng</span>
          </button>
        </div>
      </div>
    </form>  
  </div>    
</div>
<x-footer></x-footer>
@endsection
@push('scripts')
    <script> 
      const online = document.getElementById('online');
      const offline = document.getElementById('offline');
      const mainForm = document.getElementById('main-form');
 
      const hinhThucThanhToan = document.getElementById('hinhThucThanhToan');
       
      online.addEventListener('click', function(event) { 
        event.preventDefault();
        hinhThucThanhToan.value = 1;
        mainForm.submit();
      })
      offline.addEventListener('click', function(event) { 
        event.preventDefault();
        hinhThucThanhToan.value = 0;
        mainForm.submit();
      })
    </script>
@endpush