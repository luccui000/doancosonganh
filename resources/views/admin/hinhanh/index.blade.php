@extends('layouts.app')
@section('content')
<div class="w-full bg-white rounded-lg pb-12">  
    <div class="pl-2 pr-2 border-b-2 border-gray-100">
      <h3 class="py-2">Danh sách hình ảnh</h3>
    </div>
    <div class="w-full mt-2 ">
        <ul class="mb-2 ml-2">
            <li class="inline-block ">
                <button type="button"  class="w-20 p-1 cursor-pointer hover:bg-gray-500 flex bg-gray-600 text-white" id="upload">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                    </svg> Tải lên   
                </button>
                <input type="file" name="uploadfile[]" id="hinhanhs">
            </li>
            <li class="inline-block">
                <button type="button"  class=" w-24 p-1 cursor-pointer hover:bg-gray-500 flex bg-gray-600 text-white" id="upload">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg> Làm mới   
                </button> 
            </li>
        </ul> 
        <div class="border-t-2 border-gray-50 pt-2">
            <ul class="grid gap-x-8 gap-y-4 grid-cols-8">
                @foreach ($hinhanhs as $hinhanh)
                    <li class="w-32 border-2 rounded shadow-sm inline-block">
                        <a href="#">
                            <img src="{{ url($hinhanh->duong_dan_hinh_anh) }}" alt="">
                        </a>
                    </li> 
                @endforeach
                <li class="w-32 border-2 rounded shadow-sm inline-block">
                    <a href="#">
                        <img src="http://localhost:8000/storage/110621_010640_microsoft_surface_go_-core_i5_|_8gb_|_128gb_|_intel_uhd_|_12.4_inch_|_win_10-_3495.png" alt="">
                    </a>
                </li>
                <li class="w-32 border-2 rounded shadow-sm inline-block">
                    <a href="#">
                        <img src="http://localhost:8000/storage/110621_010640_microsoft_surface_go_-core_i5_|_8gb_|_128gb_|_intel_uhd_|_12.4_inch_|_win_10-_3495.png" alt="">
                    </a>
                </li>
                <li class="w-32 border-2 rounded shadow-sm inline-block">
                    <a href="#">
                        <img src="http://localhost:8000/storage/110621_010640_microsoft_surface_go_-core_i5_|_8gb_|_128gb_|_intel_uhd_|_12.4_inch_|_win_10-_3495.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('input[id=hinhanhs]').hide();
            $("#upload").click(function() { 
                $("#hinhanhs").click();
            })
        })
    </script>
@endpush
