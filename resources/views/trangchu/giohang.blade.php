@extends('layouts.index') 
@section('content') 
<div class="container-fluid">   
    <div class="max-w-md mx-auto rounded-lg md:max-w-7xl">
      <form action="{{ route('trangchu.them') }}" method="post">
        @csrf
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
            <div class="my-4 mt-6 -mx-2 lg:flex text-md">
                <div class="lg:px-2 lg:w-1/2"> 
                  <div class="p-2 bg-gray-100 rounded text-lg">
                    Thông tin nhận hàng
                  </div> 
                  <div class="pt-4 space-y-2">
                    <div class="flex justify-between">
                      <div class="text-gray-800 pl-2">Họ tên nhận hàng</div>
                      <div class="flex flex-col" > 
                        <input type="text" name="ho_ten" value="{{ old('ho_ten') }}" class="w-96 p-2 rounded border-2 border-gray-200 text-right " placeholder="VD: Nguyễn Văn A"> 
                        @error('ho_ten') <div class="mt-1 text-red-500 text-sm text-right">{{ $message }}</div> @enderror
                      </div>
                    </div>
                    <div class="flex justify-between">
                      <div class="text-gray-800 pl-2">Email</div>
                      <input type="text" name="email" value="{{ old('email') }}" class="w-96 p-2 rounded border-2 border-gray-200 text-right" placeholder="email@gmail.com"> 
                    </div>
                    <div class="flex justify-between">
                      <div class="text-gray-800 pl-2">Số điện thoại nhận hàng</div>
                      <div class="flex flex-col" > 
                        <input type="text" name="dien_thoai" value="{{ old('dien_thoai') }}" class="w-96 p-2 rounded border-2 border-gray-200 text-right" placeholder="039xxxxxxx"> 
                        @error('dien_thoai') <span class="mt-1 text-red-500 text-sm text-right">{{ $message }}</span> @enderror
                      </div>
                    </div>
                    <div class="flex justify-between">
                      <div class="text-gray-800 pl-2">Địa chỉ nhận hàng</div>
                      <div class="flex flex-col" > 
                        <input type="text" name="dia_chi" value="{{ old('dia_chi') }}" class="w-96 p-2 rounded border-2 border-gray-200 text-right" placeholder="Tp Trà Vinh"> 
                        @error('dia_chi') <div class="mt-1 text-red-500 text-sm text-right">{{ $message }}</div> @enderror
                      </div>
                    </div>
                    <div class="flex justify-between">
                      <div class="text-gray-800 pl-2">Ghi chú</div>
                      <textarea type="text" name="ghi_chu" value="{{ old('ghi_chu') }}" class="w-96 p-2 rounded border-2 border-gray-200 " placeholder="Tp Trà Vinh"> </textarea>
                    </div>
                  </div> 
                </div>
                <div class="lg:px-2 lg:w-1/2">
                  <div class="p-2 bg-gray-100 rounded text-lg text-right">
                    Chi tiết đặt hàng
                  </div> 
                  <div class="p-0"> 
                      <div class="flex justify-between border-b">
                        <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                          Tổng tiền hàng
                        </div>
                        <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                           @php echo Cart::total(); @endphp₫ 
                        </div>
                      </div> 
                        <div class="flex justify-between pt-4 border-b">
                          <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                            Giảm giá
                          </div>
                          <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                            0.0₫ 
                          </div>
                        </div> 
                        <div class="flex justify-between pt-4 border-b">
                          <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                            Tổng thanh toán
                          </div>
                          <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                            @php echo Cart::total(); @endphp₫ 
                          </div>
                        </div> 
                        <button type="submit"class="flex justify-center w-full px-10 py-2 mt-6 font-medium text-white uppercase bg-indigo-600 rounded shadow item-center hover:bg-indigo-500 focus:shadow-outline focus:outline-none">
                          <svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M527.9 32H48.1C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48.1 48h479.8c26.6 0 48.1-21.5 48.1-48V80c0-26.5-21.5-48-48.1-48zM54.1 80h467.8c3.3 0 6 2.7 6 6v42H48.1V86c0-3.3 2.7-6 6-6zm467.8 352H54.1c-3.3 0-6-2.7-6-6V256h479.8v170c0 3.3-2.7 6-6 6zM192 332v40c0 6.6-5.4 12-12 12h-72c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12zm192 0v40c0 6.6-5.4 12-12 12H236c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12z"/></svg>
                          <span class="ml-2 mt-5px">Tiến hành đặt hàng</span>
                        </button> 
                  </div>
                </div>
              </div>
        </div>  
      </form>
    </div>    
</div>
@endsection