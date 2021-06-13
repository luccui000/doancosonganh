@extends('layouts.app')
@section('content') 
<div class="p-2 w-full ">
    <div class="flex space-x-1">
        <div class="w-9/12">
            <table class="w-full text-sm lg:text-base rounded"> 
                <thead class="text-xs uppercase text-gray-600 bg-gray-50 rounded-sm">
                  <tr> 
                      <th class="pt-3 pb-3"><div class="font-semibold text-center">#</div> </th> 
                      <th class="pt-3 pb-3"><div class="font-semibold text-center">Hình ảnh</div></th>
                      <th class="pt-3 pb-3"><div class="font-semibold text-center">Tên sản phẩm</div></th>
                      <th class="pt-3 pb-3"><div class="font-semibold text-center truncate">Số lượng</div></th>
                      <th class="pt-3 pb-3"><div class="font-semibold text-center">Đơn giá</div></th> 
                      <th class="pt-3 pb-3"><div class="font-semibold text-right pr-2">Thành tiền</div></th> 
                      <th class="pt-3 pb-3"><div class="font-semibold text-center"></div></th> 
                  </tr>
              </thead>
                <tbody class="shadow">   
                  @foreach ($hoadon[0]->sanpham as $sanpham)
                    <tr class="bg-white">  
                      <td class="p-2 text-center w-20">
                        {{ $loop->iteration }}
                      </td>
                      <td class="hidden pb-4 md:table-cell p-2 w-32"> 
                        <img src="{{ $sanpham->hinh_anh_san_pham }}" class="max-h-20 mt-2 rounded" alt="Thumbnail">
                      </td>
                      <td class="text-left"> 
                        {{ $sanpham->ten_sanpham }} 
                      </td>
                      
                      <td class="text-center w-40">
                        {{ $sanpham->pivot->so_luong }} 
                      </td>
                      <td class="text-center w-40">
                        {{ money_format('%.0n',$sanpham->pivot->don_gia) }} 
                      </td>
                      <td class="text-right pr-2 w-40 font-semibold text-md"> 
                        {{ money_format('%.0n',$sanpham->pivot->thanh_tien) }} 
                      </td>
                  </tr>   
                  @endforeach
                </tbody>
            </table> 
        </div>
        <div class="w-3/12"> 
            <div class="bg-gray-50 rounded  p-4"> 
              <h2 class="text-gray-800 font-bold">Thông tin đơn hàng</h2> 
              <div class="flex justify-between mt-6 text-lg">
                <div class="text-gray-800 font-bold ">Mã đơn hàng</div>
                <p>#{{  $hoadon[0]->id }}</p> 
              </div>
              <div class="flex justify-between mb-3 text-lg">
                <div class="text-gray-800 font-bold ">Ngày lập</div>
                <p>{{  $hoadon[0]->created_at->format('d/m/Y') }}</p> 
              </div>
              <hr>
              <h2 class="text-gray-800 font-bold">Thông tin khách hàng</h2> 
              <div class="flex justify-between mt-4 text-lg">
                <div class="text-gray-800 font-bold ">Họ tên KH</div>
                <p>{{  $hoadon[0]->khachhang->ho_ten }}</p> 
              </div>
              <div class="flex justify-between text-lg">
                <div class="text-gray-800 font-bold ">Số điện thoại KH</div>
                <p>{{  $hoadon[0]->khachhang->dien_thoai }}</p> 
              </div>
              <div class="flex justify-between text-lg">
                <div class="text-gray-800 font-bold ">Địa chỉ KH</div>
                <p>{{  $hoadon[0]->khachhang->dia_chi  }}</p> 
              </div>
              <hr>
              <div class="flex justify-between text-lg">
                <div class="text-gray-800 font-bold ">Trạng thái đơn hàng</div>
                <p class="bg-red-200 pl-2 pr-2 text-red-800 rounded-full">{{ App\MyApp::TRANG_THAI_HOA_DON[$hoadon[0]->trang_thai]  }}</p> 
              </div>
              <div class="flex justify-between text-lg">
                <div class="text-gray-800 font-bold ">Tổng tiền</div>
                <p>{{  money_format('%.0n', $hoadon[0]->tong_tien)  }}</p> 
              </div>
              <div class="flex justify-between text-lg">
                <div class="text-gray-800 font-bold ">Giảm giá</div>
                <p>{{  money_format('%.0n', $hoadon[0]->gia_giam)  }}</p> 
              </div>
              <div class="flex justify-between text-lg">
                <div class="text-gray-800 font-bold ">Tổng thanh toán</div>
                <p class="text-red-600 font-bold text-2xl ">{{  money_format('%.0n', $hoadon[0]->tong_thanh_toan)  }}</p> 
              </div>
              <hr>
              <div class="flex justify-between text-lg">
                <div class="text-gray-800 font-bold ">Hình thức thanh toán</div>
                <p class="bg-green-200 pl-2 pr-2 text-green-800 rounded-full ">{{  App\MyApp::HINH_THUC_THANH_TOAN[$hoadon[0]->hinh_thuc_thanh_toan]  }}</p> 
              </div>
              <div>
                <label for="MoTa" class="mt-2 block text-sm leading-5 text-gray-700 font-bold">Mô tả</label> 
                <div class="mt-1 relative rounded-md">
                    <textarea class="p-2 border-4 border-gray-200 rounded-md " name="MoTa" cols="45" rows="5" placeholder="Mô tả... "></textarea>                     
                </div>
              </div> 
              <form action="{{ route('admin.hoadon.update', [$hoadon[0]->id, 'trang_thai' => 1])  }}" method="post">
                @csrf @method('PUT')
                <div class="flex justify-center space-x-2 mt-4">
                  <a href="" class="p-2 bg-gray-100 rounded text-gray-700 hover:bg-gray-200 w-1/3 text-center hover:no-underline">Hủy</a>
                  <button href="" class="p-2 bg-green-600 hover:bg-green-500 text-white rounded  w-1/3 text-center hover:no-underline">Xác nhận</button>
                  <a href="" class="p-2 bg-blue-600 hover:bg-blue-500 rounded  text-white w-1/3 text-center hover:no-underline">In phiếu</a>
                </div>
              </form>
            </div> 
        </div>

    </div>
</div>
@endsection