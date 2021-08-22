@extends('layouts.index')
@section('content')
<div class="w-2/3 container">
    <div class="bg-indigo-600 text-white w-40 p-2 mb-4">Xác nhận thanh toán</div> 
    <div class="flex">
        <div class="w-1/2 px-4">
            <form action="" >
                <h1 class="p-2 bg-gray-100 rounded text-lg">
                    Thông tin thanh toán
                </h1> 
                <div class="p-2">
                    <div class="input-group flex flex-col mt-2">
                        <label for="">Họ tên nhận hàng <span class="text-red-500">(*)</span></label>   
                        <input 
                            @if(auth()->guard('khachhangs')->user())
                                value="{{ thong_tin_khach_hang('ho_ten') }}"
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
                {{-- @if($hinhThucThanhToan == 0)
                    <h1 class="p-2 bg-gray-100 rounded text-lg mt-2">
                        Thông tin thanh toán
                    </h1> 
                    <div class=" p-2">
                        <div class="input-group flex flex-col mt-2">
                            <label for="">Họ tên chủ thẻ <span class="text-red-500">(*)</span></label>
                            <input type="text" name="ho_ten" class="w-full p-2 rounded border-2 border-gray-200 " placeholder="VD: Nguyễn Văn A"> 
                        </div>
                        <div class="input-group flex flex-col mt-2">
                            <label for="">Số thẻ <span class="text-red-500">(*)</span></label>
                            <input type="text" name="ho_ten" class="w-full p-2 rounded border-2 border-gray-200 " placeholder="0602xxxxx000"> 
                        </div>
                        <div class="flex mt-2 space-x-2">
                            <div class="w-1/2">
                                <div class="flex flex-col">
                                    <label for="">Ngày hết hạn <span class="text-red-500">(*)</span></label>
                                    <input type="text" name="ho_ten" class="w-full p-2 rounded border-2 border-gray-200 " placeholder="01/12"> 
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="flex flex-col">
                                    <label for="">Số CVC <span class="text-red-500">(*)</span></label>
                                    <input type="text" name="ho_ten" class="w-full p-2 rounded border-2 border-gray-200 " placeholder="123"> 
                                </div>
                            </div>
                        </div>
                    </div>
                @endif --}}
                <button type="submit" id="submit" class="flex justify-center space-x-2 w-full px-10 py-2 mt-6 font-medium text-white uppercase bg-indigo-600 rounded shadow item-center hover:bg-indigo-500 focus:shadow-outline focus:outline-none"> 
                    <svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M527.9 32H48.1C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48.1 48h479.8c26.6 0 48.1-21.5 48.1-48V80c0-26.5-21.5-48-48.1-48zM54.1 80h467.8c3.3 0 6 2.7 6 6v42H48.1V86c0-3.3 2.7-6 6-6zm467.8 352H54.1c-3.3 0-6-2.7-6-6V256h479.8v170c0 3.3-2.7 6-6 6zM192 332v40c0 6.6-5.4 12-12 12h-72c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12zm192 0v40c0 6.6-5.4 12-12 12H236c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12z"/></svg>
                    <span class="pt-1">Xác nhận đơn hàng</span>
                </button> 
            </form> 
        </div>
        <div class="w-1/2">
            <h1 class="p-2 bg-gray-100 rounded text-lg mb-2">
                Thông tin đặt hàng
            </h1> 
            <table> 
                <tbody>       
                    @foreach (Cart::content() as $id => $row) 
                        <tr class="bg-white"> 
                          <td class="hidden pb-4 md:table-cell p-2 w-32"> 
                              <img src="@php echo $row->options->hinh_anh_san_pham @endphp" class="max-h-10 mt-2 rounded" alt="Thumbnail">
                          </td>
                          <td class="w-2/4"> 
                              <a href="{{ route('trangchu.show', $row->options->duong_dan_lien_ket)}}" class="mb-2 hover:no-underline cursor-pointer text-gray-700"><?php echo $row->name; ?></a> <br/> 
                          </td>
                          
                          <td class="text-center"> 
                              <?php echo $row->qty; ?>
                          </td>  
                      </tr> 
                    @endforeach
                </tbody>
            </table> 
        </div>
    </div>
</div>
@endsection