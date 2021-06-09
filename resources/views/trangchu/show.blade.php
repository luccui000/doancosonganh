@extends('layouts.index')
@push('styles')
    <style>
      .child::after {
        content: '';
        position: absolute;
        border-top: 13px solid #ce0707;
        border-left: 10px solid transparent;
        left: 0px;
        bottom: -13px;
      }
      .dot::before {
        content: '';
        background: #1b95e0;
        width: 4px;
        height: 4px;
        border-radius: 50%;
        display: inline-block;
        vertical-align: middle;
        margin-right: 5px;
      }
      .check::before {
        content: '✔'; 
        margin-right: 5px;
      } 
    </style>
@endpush
@section('content') 
<div class="container-fluid">
  <div class="lg:w-full mx-auto flex flex-wrap">
    <img alt="ecommerce" class="lg:w-1/3 w-full object-fit object-center rounded border border-gray-200" src="{{ $sanpham->hinh_anh_san_pham }}">
    <div class="lg:w-1/3 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0"> 
      <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $sanpham->ten_sanpham }}</h1>
      <div class="flex mb-4">
        <span class="flex items-center">
          <x-icon.star></x-icon.star>
          <x-icon.star></x-icon.star>
          <x-icon.star></x-icon.star>
          <x-icon.star></x-icon.star>
          <span class="text-gray-600 ml-3">4 Reviews</span>
        </span>
        <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
          <a class="text-gray-500">
            <x-icon.facebook></x-icon.facebook>
          </a>
          <a class="ml-2 text-gray-500">
            <x-icon.twitter></x-icon.twitter>
          </a>
          <a class="ml-2 text-gray-500">
            <x-icon.message></x-icon.message>
          </a>
        </span>
      </div>
      <p class="leading-relaxed">
        {!! $sanpham->chi_tiet_thong_so !!}
      </p>
      <div class="flex mt-6 items-center border-gray-200 mb-5"> 
         <div class="bg-gray-200 w-full  rounded flex flex-col">
           <div class="pl-3 pt-3 flex">
             <div class="pr-4 font-semibold text-lg" style="min-width: 150px;"> Giá niêm yết: </div>
             <div class="text-md mt-1 line-through">{{ $sanpham->gia_niem_yet_vnd }}</div>
           </div>
           <div class="pl-3 pb-3 flex font-semibold text-lg">
            <div class="pr-3"> Giá khuyến mãi: </div>
            <div class="text-red-600">{{ $sanpham->gia_khuyen_mai_vnd }}</div>
          </div>
        </div>
      </div>
      <div class="flex mt-6 items-center pb-5 border-b-2  border-gray-200 mb-2 relative"> 
        <div class="absolute bg-red-600 w-32 h-10 top-2 -left-4 z-10 p-2 text-white font-bold text-lg child">Khuyến mãi </div>
        <div class="border-2 w-full border-red-600 pl-3 rounded pt-12">{!! $sanpham->thong_tin_khuyen_mai !!}</div>
      </div>
      <form action="{{ route('trangchu.themvaogiohang', $sanpham->id) }}" method="post">
        @csrf
        <div class="flex">
          <button class="w-full justify-center text-white text-lg bg-red-500 border-0 py-3 px-6 focus:outline-none hover:bg-red-600 rounded">Mua ngay</button>
        </div>
      </form>
    </div>
    <x-diachi></x-diachi>
  </div>
</div>
@endsection