<div class="container-fluid border-t-2 border-indigo-700 bg-white pb-2"> 
    <div class="text-sm lg:flex-grow  animated jackinthebox">
        <a class="relative inline-block lg:inline-block text-md font-bold  text-orange-500  mx-2 sm:hover:bg-transparent rounded-lg">
            <div class="bg-indigo-700 text-white w-44 p-2">Top sản phẩm bán chạy </div> 
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
                <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg cursor-pointer">
                    <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                        <img
                            src="{{ $sanpham->hinh_anh_san_pham }}" 
                            alt="{{ $sanpham->ten_sanpham }}"
                            class="object-cover "
                            />
                    </div>  
                    <p class="text-sm mb-0 font-normal">Mã SP : {{ $sanpham->ma_sanpham }}</p> 
                    <p class="text-sm mb-0 font-normal">{{ $sanpham->ten_sanpham }}</p> 
                    <p class="text-sm mb-0 font-normal line-through">{{ $sanpham->gia_niem_yet_vnd }} </p> 
                    <p class="text-md font-bold text-red-500">{{ $sanpham->gia_khuyen_mai_vnd }}</p>   
                </div>   
            @endforeach   
        </div>
        <div class="text-center mt-4 "> 
            <a class="hover:no-underline cursor-pointer w-52 px-6 py-2 text-xs leading-6 text-white uppercase transition bg-blue-700 rounded shadow ripple hover:shadow-lg hover:bg-blue-600 focus:outline-none">Xem tất cả sản phẩm</a>
        </div>
    </div> 
</div>