@extends('layouts.app')
@push('styles')
    <style>
        .active\:bg-gray-50:active {
            --tw-bg-opacity:1;
            background-color: rgba(249,250,251,var(--tw-bg-opacity));
        }  
        .thumb{
           margin: 10px 8px 0 0;
           width: 280px;
           display: inline;
           cursor: pointer;
       }
       #file-input {
           display: none;
       }  
       .ck-editor__editable_inline {
            min-height: 400px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css">
@endpush
@section('content')
    <div class="col-span-full xl:col-span-8 bg-white shadow rounded-sm border border-gray-200">
        <header class="px-2 py-2 border-b border-gray-100 flex justify-between">
            <div class="">
                <h2 class="font-semibold text-gray-800 pt-2">Thêm mới mặt hàng</h2>
            </div>  
        </header>
        <div class="p-3"> 
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form method="POST" action="{{ route('admin.sanpham.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label class="text-xl text-gray-600">Tên sản phẩm <span class="text-red-500">*</span></label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full rounded-md" name="ten_sanpham" value="" required></input>
                                @error('ten_sanpham') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="text-xl text-gray-600">Hãng sản xuất <span class="text-red-500">*</span></label> 
                                        <select name="hangsanxuat_id" class="w-full p-2 py-2 px-2 rounded border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-none focus:border-transparent">
                                            @foreach ($hangsanxuats as $hangsanxuat) 
                                                <option value="{{ $hangsanxuat->id }}">{{ $hangsanxuat->ten_hang }}</option>
                                            @endforeach 
                                        </select>
                                        @error('hangsanxuat_id') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="text-xl text-gray-600">Bảo hành</label> 
                                        <select name="bao_hanh" class="w-full p-2 py-2 px-2 rounded border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-none focus:border-transparent">
                                            @foreach (App\MyApp::THONG_TIN_BAO_HANH as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option> 
                                            @endforeach 
                                        </select>
                                        @error('bao_hanh') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="text-xl text-gray-600">Giá nhập <span class="text-red-500">*</span></label>
                                        <input type="text" value="0" class="border-2 border-gray-300 p-2 w-full rounded-md" name="gia_nhap" id="gia_nhap" ></input>
                                        @error('gia_nhap') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="text-xl text-gray-600">Giá niêm yết </label>
                                        <input type="text" value="0" class="border-2 border-gray-300 p-2 w-full rounded-md" name="gia_niem_yet" id="gia_niem_yet" ></input>
                                        @error('gia_niem_yet') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="text-xl text-gray-600">Giá khuyến mãi </label> 
                                        <input type="text" value="0" class="border-2 border-gray-300 p-2 w-full rounded-md" name="gia_khuyen_mai" id="gia_khuyen_mai"></input>
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-8">
                                        <label class="text-xl text-gray-600">Loại sản phẩm <span class="text-red-500">*</span></label> 
                                        <select name="loaisanpham_id" class="w-full p-2 py-2 px-2 rounded border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-none focus:border-transparent">
                                            @foreach ($loaisanphams as $loaisanpham) 
                                                <option value="{{ $loaisanpham->id }}">{{ $loaisanpham->ten_loai_sanpham }}</option>
                                            @endforeach 
                                        </select>
                                        @error('loaisanpham_id') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="text-xl text-gray-600">Số lượng tồn <span class="text-red-500">*</span></label> 
                                        <input type="number" min="0" value="1" class="border-2 border-gray-300 p-2 w-full rounded-md" name="so_luong_ton_kho" value="" required></input>
                                        @error('so_luong_ton_kho') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div> 
                            <div class="mb-8">
                                <label class="text-xl text-gray-600">Chi tiết sản phẩm</label></br> 
                                <textarea id="editor2" name="chi_tiet_thong_so">
                                    Chi tiết sản phẩm
                                </textarea>
                            </div> 
                            <div class="mb-8">
                                <label class="text-xl text-gray-600">Thông tin khuyến mãi</label></br> 
                                <textarea id="editor" name="thong_tin_khuyen_mai">
                                    Liên hệ
                                </textarea>
                            </div> 
                            <div class="mb-8">  
                                <header x-data="{}" class="border-dashed border-2 border-gray-400 py-12 flex flex-col justify-center items-center">
                                    <input type="file" id="file-input" x-ref="hinhanh" onchange="loadPreview(this)" name="hinhanh[]"  multiple />
                                    <button type="button" @click="$refs.hinhanh.click()" class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                                       Tải hình ảnh lên
                                    </button>
                                    <p class=" text-gray-600 flex flex-wrap justify-center helptext">
                                         
                                    </p>
                                  </header>
                                <div id="thumb-output"></div> 
                            </div>
    
                            <div class="flex p-1">
                                <select class="border-2 border-gray-300 border-r p-2 rounded-tl rounded-bl" name="trang_thai">
                                    <option value="1">Lưu và công khai</option>
                                    <option value="0">Lưu tạm thời</option>
                                </select>
                                <button role="submit" class="p-2 rounded-tr rounded-br bg-blue-500 text-white hover:bg-blue-400" required>Thêm</button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div> 
        </div>
    </div>
@endsection
@push('scripts') 
<script src="{{ asset('js/ckeditor.js') }}"></script>
<script>
    ClassicEditor.create(document.querySelector('#editor')) 
    ClassicEditor.create(document.querySelector('#editor2')) 
   $('#gia_nhap').add('#gia_niem_yet').add('#gia_khuyen_mai').on('input', function(e){     
        $(this).val(formatCurrency(this.value.replace(/[,]/g,'')));
    }).on('keypress',function(e){
        if(!$.isNumeric(String.fromCharCode(e.which))) e.preventDefault();
    }).on('paste', function(e){    
        var cb = e.originalEvent.clipboardData || window.clipboardData;      
        if(!$.isNumeric(cb.getData('text'))) e.preventDefault();
    });
    function formatCurrency(number){
        var n = number.split('').reverse().join("");
        var n2 = n.replace(/\d\d\d(?!$)/g, "$&,");    
        return  n2.split('').reverse().join('');
    }
    function loadPreview(input){
       var data = $(input)[0].files; //this file data
       $.each(data, function(index, file){
           if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
               var fRead = new FileReader();
               fRead.onload = (function(file){
                   return function(e) { 
                       var img = $('<img/>').addClass('thumb').attr('src', e.target.result).attr('id', `img_${index}`).attr('onclick', `remove('img_${index}')`); 

                       $('#thumb-output').append(img);
                   };
               })(file);
               fRead.readAsDataURL(file);
           }
       });
       $('.helptext').text('Nhấp vào hình để bỏ chọn hình');
   }
   function remove(imgIdx)
   {
       var imageIdx = '#' + imgIdx; 
       $(imageIdx).remove();
   }
  </script>
@endpush