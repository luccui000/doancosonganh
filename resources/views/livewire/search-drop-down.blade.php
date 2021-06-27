<div>
    <div class="relative"> 
        <input wire:model="search" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded-full shadow" placeholder="Tìm kiếm..." /> 
         
        @if (!empty($search))
            <div class="absolute bg-gray-50 w-full rounded-md list-group" wire:click.away="">
                @foreach ($searchSanphams as $sanpham) 
                    <div class="w-full flex justify-start space-x-2 cursor-pointer border-gray-200 border-b-2 p-1"> 
                        <div style="width: 100px;">
                            <img src="{{ $sanpham->hinh_anh_san_pham }}" class="img-thumbnail" alt="..."> 
                        </div>
                        <div class="text-left">
                            <a class="text-gray-700 " href="{{ $sanpham->duong_dan_lien_ket }}">
                                {{ $sanpham->ten_sanpham }}
                            </a>
                        </div> 
                    </div>
                @endforeach       
            </div>
        @endif
    </div>
</div>
