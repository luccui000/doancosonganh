@extends('layouts.app') 
@push('styles') 
@endpush
@section('content')
    <div class="col-span-full xl:col-span-8  rounded-sm border border-gray-100 bg-gray-100">
        <div class="py-2 border-b border-gray-100 flex justify-between pl-16 bg-white">
            <h4 class="font-semibold text-gray-800 pt-2">Thêm mới slider</h4> 
        </div>
        <form method="POST" action="{{ route('admin.slider.store') }}" id="formCreateSlider" >
            <div class="w-full flex">
                <div class="m-3 w-2/3 bg-white rounded-md">   
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            @csrf
                            <div class="container p-3">
                                <div class="mb-4">
                                    <label class="text-xl text-gray-600">Tên Slider  <span class="text-red-500">*</span></label></br>
                                    <input type="text" class="border-2 border-gray-300 p-2 w-full rounded  focus:ring-2" name="ten_slider" value=""></input>
                                    @error('ten_slider') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="text-xl text-gray-600">Key Slider  <span class="text-red-500">*</span></label></br>
                                    <input type="text" class="border-2 border-gray-300 p-2 w-full rounded  focus:ring-2" name="key_slider" value=""></input>
                                    @error('key_slider') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="text-xl text-gray-600">Mô tả  </label></br>
                                    <textarea name="mo_ta" class="w-full border-2 border-gray-200 rounded p-2  focus:ring-2" cols="30" rows="10"></textarea>
                                    @error('mo_ta') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
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
                            @error('trang_thai') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                        <div class="mt-4">
                            <input type="hidden" name="button_type" >
                            <button class="bg-green-500 text-white p-2 rounded w-20" id="saveOnly" type="submit">Lưu</button>
                            <button class="bg-blue-500 text-white p-2 rounded w-40" id="saveAndEdit" type="button">Lưu và Chỉnh sửa</button>
                        </div>
                    </div> 
                </div> 
            </div> 
        </form> 
    </div> 
@endsection 
@push('scripts') 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $("#file-input").hide();
        $("#saveAndEdit").click(function() {
            $("input[name=button_type]").val(1);
            $("#formCreateSlider").submit();
        })
        $("#saveOnly").click(function() {
            $("input[name=button_type]").val(0);
            $("#formCreateSlider").submit();
        })
    })
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
</script>
@endpush