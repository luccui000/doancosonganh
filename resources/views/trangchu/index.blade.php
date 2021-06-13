@extends('layouts.index')
@section('content')
    <div class=" bg-gray-50 flex space-x-1 pb-3"> 
        <x-danhmuc :sanphams="$sanphams"></x-danhmuc>  
        <x-banner></x-banner> 
    </div> 
    <x-trangchu.sanphambanchay :sanphams="$sanphams"></x-trangchu.sanphambanchay>
    <x-trangchu.maytinhmaychu 
        :danhmucsanpham="'Máy tính - Máy Chủ'"
        :sanphams="$sanphams"
        :loaisanpham="App\MyApp::LOAI_SAN_PHAM['MAYTINH_MAYCHU']">
    </x-trangchu.maytinhmaychu>
    <x-trangchu.maytinhlaptop 
        :sanphams="$sanphams" 
        :danhmucsanpham="'Máy tính xách tay - Laptop'"
        :loaisanpham="App\MyApp::LOAI_SAN_PHAM['MAYTINHXACHTAY_LAPTOP']">
    </x-trangchu.maytinhlaptop> 
    <x-trangchu.mayintbvanphong 
        :sanphams="$sanphams" 
        :danhmucsanpham="'Máy in - TB Văn phòng'"
        :loaisanpham="App\MyApp::LOAI_SAN_PHAM['MAYIN_TBVANPHONG']">
    </x-trangchu.mayintbvanphong>
    <x-trangchu.linhkienmaytinh 
        :sanphams="$sanphams" 
        :danhmucsanpham="'Linh kiện máy tính'"
        :loaisanpham="App\MyApp::LOAI_SAN_PHAM['LINHKIENMAYTINH']">
    </x-trangchu.linhkienmaytinh> 
    <div class=" flex flex-wrap  justify-center">
        <div class="rounded w-auto flex-1 text-gray-800 text-left bg-white hover:bg-indigo-300 px-4 py-2 m-2 flex">
            <div class="pr-2 pt-2 text-indigo-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                    <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z" />
                </svg>
            </div>
            <div class="flex-1">
                <div class="flex flex-col">
                    <div class="uppercase font-semibold">Chính sách giao hàng</div>
                    <div>Nhận hàng và thanh toán tại nhà</div>
                </div>
            </div>
        </div> 
        <div class="rounded w-auto flex-1 text-gray-800 text-left bg-white hover:bg-indigo-300 px-4 py-2 m-2 flex">
            <div class="pr-2 pt-2 text-indigo-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
            </div>
            <div class="flex-1">
                <div class="flex flex-col">
                    <div class="uppercase font-semibold">Đổi trả dễ dàng</div>
                    <div>Dùng thử trong vòng 3 ngày</div>
                </div>
            </div>
        </div>
        <div class="rounded w-auto flex-1 text-gray-800 text-left bg-white hover:bg-indigo-300 px-4 py-2 m-2 flex">
            <div class="pr-2 pt-2 text-indigo-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                    <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="flex-1">
                <div class="flex flex-col">
                    <div class="uppercase font-semibold">Thanh toán tiện lợi</div>
                    <div>Trả tiền mặt, CK, trả góp 0%</div>
                </div>
            </div>
        </div>
        <div class="rounded w-auto flex-1 text-gray-800 text-left bg-white hover:bg-indigo-300 px-4 py-2 m-2 flex">
            <div class="pr-2 pt-2 text-indigo-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                    <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                </svg>
            </div>
            <div class="flex-1">
                <div class="flex flex-col">
                    <div class="uppercase font-semibold">Hỗ trợ nhiệt tình</div>
                    <div>Tư vấn, giải đáp mọi thắc mắc</div>
                </div>
            </div>
        </div> 
    </div>  
    <x-footer></x-footer>
@endsection