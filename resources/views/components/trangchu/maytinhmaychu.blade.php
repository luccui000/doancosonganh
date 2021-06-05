<div class="container-fluid border-t-2 border-indigo-700 bg-white mt-4 pb-2"> 
    <div class="text-sm lg:flex-grow  animated jackinthebox">
        <a class="relative inline-block lg:inline-block text-md font-bold  text-orange-500  mx-2 sm:hover:bg-transparent rounded-lg">
            <div class="bg-indigo-700 text-white w-44 p-2">{{ $danhmucsanpham }}</div> 
            <div class="triangle"></div>
        </a>
        <a href="#home"
            class="block lg:inline-block text-md font-bold hover:no-underline text-orange-500 uppercase mx-2">
            PC Gaming
        </a>
        <a href="#home"
            class="block lg:inline-block text-md font-bold hover:no-underline text-gray-900 uppercase mx-2">
            Laptop Gaming
        </a>
        <a href="#home"
            class="block lg:inline-block text-md font-bold hover:no-underline text-gray-900 uppercase mx-2">
            ACCOMMODATION
        </a> 
    </div> 
    <div class="flex flex-col mb-2"> 
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-4">
            @foreach ($sanphams as $sanpham) 
                @if($sanpham->loaisanpham->id == $loaisanpham)
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg cursor-pointer">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                @if(isset($sanpham->hinhanh[0]))  
                                    src="{{ $sanpham->hinhanh[0]->duong_dan_hinh_anh }}"
                                @endif
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : {{ $sanpham->ma_sanpham }}</p> 
                        <p class="text-sm mb-0 font-normal">{{ $sanpham->ten_sanpham }}</p> 
                        <p class="text-sm mb-0 font-normal line-through">{{ $sanpham->gia_niem_yet_vnd }} </p> 
                        <p class="text-md font-bold text-red-500">{{ $sanpham->gia_khuyen_mai_vnd }}</p>   
                    </div>   
                @endif
            @endforeach     
        </div>
        <div class="text-center mt-4 border-t-2 border-gray-100 pt-4"> 
            <a class="hover:no-underline cursor-pointer border border-indigo-500 text-indigo-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                Xem tất cả sản phẩm
              </a>
        </div>
    </div> 
</div>