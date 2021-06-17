@extends('layouts.index')
@section('content')
    <div class="container">
        <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
            <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-700 bg-gray-50 dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
                <x-sidebar></x-sidebar> 
            </div>
            <div class="flex-1 p-2 mt-6">
                <h4>Đơn hàng của tôi</h4>
                <div class="w-full bg-white">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap">
                          <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 border-b bg-gray-100">
                              <th class="px-4 py-3">#</th>
                              <th class="px-4 py-3">Ngày mua</th>
                              <th class="px-4 py-3">Sản phẩm</th>
                              <th class="px-4 py-3">Tổng tiền</th>
                              <th class="px-4 py-3">Trạng thái đơn hàng</th> 
                            </tr>
                          </thead>
                          <tbody class="bg-white divide-y">
                              @foreach ($hoadons as $hoadon)
                                @foreach ($hoadon->sanpham as $sanpham)
                                    <tr class="text-gray-700 ">
                                        <td class="p-4 text-sm w-20" >
                                        # {{ $hoadon->id }}
                                        </td>
                                        <td class="p-4 text-sm">
                                            {{ $hoadon->created_at->format('d/m/Y') }}
                                        </td>
                                        <td class="p-4 text-sm">
                                            {{ $sanpham->ten_sanpham }}
                                        </td>
                                        <td class="p-4 text-sm">
                                            {{ $hoadon->tong_thanh_toan_vnd }}
                                        </td>
                                        <td class="p-4 text-sm">
                                            {{ MyApp::TRANG_THAI_HOA_DON[$hoadon->trang_thai] }}
                                        </td>
                                    </tr>  
                                @endforeach
                              @endforeach
                          </tbody>
                        </table>
                        {{ $hoadons->links('paginate') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@endpush