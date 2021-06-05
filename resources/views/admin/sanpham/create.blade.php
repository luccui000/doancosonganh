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
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form method="POST" action="{{ route('admin.sanpham.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label class="text-xl text-gray-600">Tên sản phẩm <span class="text-red-500">*</span></label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full rounded-md" name="ten_sanpham" value="" required></input>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="text-xl text-gray-600">Hãng sản xuất <span class="text-red-500">*</span></label></br>
                                        <input type="text" class="border-2 border-gray-300 p-2 w-full rounded-md" name="hang_san_xuat" value="" required></input>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="text-xl text-gray-600">Bảo hành</label></br>
                                        <input type="text" class="border-2 border-gray-300 p-2 w-full rounded-md" name="bao_hanh" value="" required></input>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="text-xl text-gray-600">Giá nhập <span class="text-red-500">*</span></label></br>
                                        <input type="text" step="10000" min="0" max="2000000000" value="0" class="border-2 border-gray-300 p-2 w-full rounded-md" name="gia_nhap" id="gia_nhap" ></input>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="text-xl text-gray-600">Giá niêm yết <span class="text-red-500">*</span></label></br>
                                        <input type="text" step="10000" min="0" max="2000000000" value="0" class="border-2 border-gray-300 p-2 w-full rounded-md" name="gia_niem_yet" id="gia_niem_yet" ></input>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="text-xl text-gray-600">Giá khuyến mãi <span class="text-red-500">*</span></label></br>
                                        <input type="text" step="10000" min="0" max="2000000000" value="0" class="border-2 border-gray-300 p-2 w-full rounded-md" name="gia_khuyen_mai" id="gia_khuyen_mai"></input>
                                    </div>
                                </div>
                            </div> 
                            <div class="mb-8">
                                <label class="text-xl text-gray-600">Loại sản phẩm</label></br> 
                                <select style="width: 370px" name="loaisanpham_id" class="w-1/3 py-2 px-2 rounded border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-none focus:border-transparent">
                                    @foreach ($loaisanphams as $loaisanpham) 
                                        <option value="{{ $loaisanpham->id }}">{{ $loaisanpham->ten_loai_sanpham }}</option>
                                    @endforeach 
                                </select>
                            </div>
                            <div class="mb-8">
                                <label class="text-xl text-gray-600">Thông tin khuyến mãi</label></br> 
                                <textarea name="thong_tin_khuyen_mai">
                                    Thông tin khuyến mãi
                                  </textarea>
                            </div> 
                            <div class="mb-8">  
                                <header x-data="{}" class="border-dashed border-2 border-gray-400 py-12 flex flex-col justify-center items-center">
                                    <input type="file" id="file-input" x-ref="hinhanh" onchange="loadPreview(this)" name="hinhanh[]"  multiple />
                                    <button type="button" @click="$refs.hinhanh.click()" class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                                       Tải file lên
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
<script src="https://cdn.tiny.cloud/1/l01e87n2t3uzm6jo5u43oj02bsloetedndype5nuj1dl4xuf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' ,
        toolbar_mode: 'floating',
   });
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