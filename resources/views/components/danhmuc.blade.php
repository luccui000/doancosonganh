<nav class="w-72">
    @foreach (App\Models\LoaiSanPham::all() as $loaisanpham) 
        <a class="flex items-center py-2 px-8 text-gray-600 border-white hover:bg-gray-200 hover:text-gray-700 hover:no-underline hover:border-gray-700" href="#">
            {!! $loaisanpham->icon !!}
            <span class="mx-2 font-medium">{{ $loaisanpham->ten_loai_sanpham }}</span>
        </a>
    @endforeach  
</nav>