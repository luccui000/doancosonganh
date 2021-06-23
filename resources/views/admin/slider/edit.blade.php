@extends('layouts.app') 
@push('styles') 
@endpush
@section('content')
    <div class="col-span-full xl:col-span-8  rounded-sm border border-gray-100 bg-gray-100">
        <div class="py-2 border-b border-gray-100 flex justify-between pl-16 bg-white">
            <h4 class="font-semibold text-gray-800 pt-2">Thêm mới slider</h4> 
        </div>
        <form method="POST" action="{{ route('admin.hangsanxuat.store') }}" >
            <div class="w-full flex">
                <div class="m-3 w-2/3 bg-white rounded-md">   
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            @csrf
                            <div class="container p-3">
                                <div class="mb-4">
                                    <label class="text-xl text-gray-600">Tên Slider  <span class="text-red-500">*</span></label></br>
                                    <input value="{{ $slider->ten_slider }}" type="text" class="border-2 border-gray-300 p-2 w-full rounded  focus:ring-2" name="ten_slider" />
                                    @error('ten_slider') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="text-xl text-gray-600">Key Slider  <span class="text-red-500">*</span></label></br>
                                    <input value="{{ $slider->key_slider}}" type="text" class="border-2 border-gray-300 p-2 w-full rounded  focus:ring-2" name="key_slider" />
                                    @error('key_slider') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="text-xl text-gray-600">Mô tả  </label></br>
                                    <textarea name="mo_ta" class="w-full border-2 border-gray-200 rounded p-2  focus:ring-2" cols="30" rows="10">{{  $slider->mo_ta }}</textarea>
                                </div>
                            </div>
                        </form>  
                    </div>
                </div>
                <div class="m-3 w-1/3">
                    <div class=" bg-white p-3 rounded-md">
                        <div class="">
                            <label class="text-xl ">Trạng thái  </label></br>
                            <select name="trang_thai"  class="w-40 border-gray-200 border-2 rounded p-2">
                                <option value="1" selected>Sử dụng</option>
                                <option value="0">Tắt</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <button class="bg-green-500 text-white p-2 rounded w-20" type="submit">Lưu</button> 
                        </div>
                    </div> 
                </div> 
            </div> 
        </form>
        <div class="w-full flex">
            <div class="m-3 w-2/3 bg-white rounded-md">  
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
                    <div class="container p-3">
                        <h4 class="font-semibold text-gray-800 pt-2">Thêm hình ảnh cho slider</h4>  
                        <button id="openModal" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                            <i class="fa fa-plus"></i> Thêm mới
                        </button> 
                        <table class="w-full whitespace-no-wrap mb-2 datatable shadow-sm">
                            <thead>
                                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50 ">
                                    <th class="px-4 py-3">#</th>
                                    <th class="px-4 py-3">Hình ảnh</th>
                                    <th class="px-4 py-3">Tiêu đề</th>
                                    <th class="px-4 py-3">Vị trí</th>
                                    <th class="px-4 py-3">Ngày tạo</th>  
                                    <th class="px-4 py-3"></th>   
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y">  
                                @foreach ($slider->hinhanh as $hinhanhSlider)
                                @json($hinhanhSlider)
                                <tr class="text-gray-700 ">
                                    <td class="px-4 py-1 text-sm">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="py-3 text-sm w-28 h-20"> 
                                        <img class="w-44 h-20" src="{{ url($hinhanhSlider->duong_dan_hinh_anh) }}"/>   
                                    </td>
                                    <td class="px-4 py-1 text-sm">
                                        {{ $hinhanhSlider->tieu_de }}
                                    </td>
                                    <td class="px-4 py-1 text-sm">
                                        {{ $hinhanhSlider->vi_tri }}
                                    </td>
                                    <td class="px-4 py-1 text-sm">
                                        {{ $hinhanhSlider->created_at->format('d-m-Y') }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="m-3 w-1/3"> 
            </div> 
        </div> 
    </div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <form action="{{ route('admin.slider.addItem', $slider->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content" style="width: 1000px;"> 
                <div class="">
                    <div class="w-full h-12 bg-blue-400 rounded-tl-sm rounded-tr-sm ">
                        <button class="p-2 float-right" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times text-white mr-2 mt-2"></i>
                        </button>
                    </div>
                    <div class="container mb-4">
                        <div class="mt-2">
                            <label class="text-md text-gray-600">Tiêu đề <span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full rounded focus:ring-2" name="tieu_de" value=""></input>
                            @error('tieu_de') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                        <div class="mt-2">
                            <label class="text-md text-gray-600">Chữ chuyển hướng <span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full rounded focus:ring-2" name="tieu_de" value=""></input>
                            @error('chu_chuyen_huong') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                        <div class="mt-2">
                            <label class="text-md text-gray-600">Mô tả  </label></br>
                            <textarea name="mo_ta" class="w-full border-2 border-gray-200 rounded p-2  focus:ring-2" cols="30" rows="5"></textarea>
                            @error('mo_ta') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                        <div class="mt-2">  
                            <div x-data="{}" class="border-dashed border-2 border-gray-400 py-12 flex flex-col justify-center items-center">
                                <input type="file" style="display: none;" id="fileHinhAnh" x-ref="hinhanh" onchange="loadPreview(this)" name="hinhanh"  />
                                <button type="button" @click="$refs.hinhanh.click()" class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                                    Tải hình ảnh lên
                                </button>
                                <p class=" text-gray-600 flex flex-wrap justify-center helptext"></p>
                            </div>
                            <div id="thumb-output"></div> 
                        </div>
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                </div>
            </form>
        </div>
    </div> 
@endsection 
@push('scripts') 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() { 
        var openModal = {{ request()->query('open_modal') }};
        if(openModal) {
            $("#openModal").click();
        }
    })
    function loadPreview(input){
       var data = $(input)[0].files; //this file data
       $.each(data, function(index, file){
           if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
               var fRead = new FileReader();
               fRead.onload = (function(file){
                   return function(e) { 
                       var img = $('<img/>').addClass('thumb').attr('src', e.target.result).attr('id', `img_${index}`).attr('onclick', `remove('img_${index}')`); 
                       $('#thumb-output').empty();
                       $('#thumb-output').append(img);
                   };
               })(file);
               fRead.readAsDataURL(file);
           }
       });
       $('.helptext').text('Nhấp vào hình để bỏ chọn hình');
   }  
</script>
@endpush