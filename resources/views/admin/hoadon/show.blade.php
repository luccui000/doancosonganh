@extends('layouts.app')
@section('content') 
<div class="p-2 w-full ">
    <div class="flex space-x-1">
        <div class="w-9/12">
            <table class="w-full text-sm lg:text-base rounded" cellspacing="0">
                <thead>
                  <tr class="h-6">
                    <th class="hidden p-2 md:table-cell">Giỏ hàng</th>
                    <th class="text-left">Tên sản phẩm</th>
                    <th class="lg:text-right text-left pl-5 lg:pl-0">Số lượng</th>
                    <th class="hidden text-center md:table-cell">Đơn giá</th>
                    <th class="text-right  pr-2">Thành tiền</th>
                  </tr>
                </thead>
                <tbody class="shadow-sm ">        
                  @foreach (Cart::content() as $id => $row) 
                      <tr class="bg-gray-100 rounded"> 
                        <td class="hidden pb-4 md:table-cell p-2 w-32"> 
                            <img src="@php echo $row->options->hinh_anh_san_pham @endphp" class="max-h-10 mt-2 rounded" alt="Thumbnail">
                        </td>
                        <td class="w-2/4"> 
                            <a href="{{ route('trangchu.show', $row->options->duong_dan_lien_ket)}}" class="mb-2 hover:no-underline cursor-pointer text-gray-700"><?php echo $row->name; ?></a> <br/>
                        </td>
                        
                        <td class=" md:flex mt-3 text-center">
                            <div class="w-28 h-10 text-center">asdas</div>
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
        </div>
        <div class="w-3/12"> 
            <div class="bg-gray-100 rounded h-screen">
                asdasd
            </div> 
        </div>

    </div>
</div>
@endsection