@extends('layouts.app')
@push('styles')
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endpush
@section('content') 
<div class="w-full bg-white rounded-lg pb-12">  
    <div class="pl-2 pr-2 ">
      <h3 class="py-2">Danh sách khách hàng mới</h3>
    <div class="">
        <table class="w-full whitespace-no-wrap datatable">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                <th class="px-4 py-3">#</th>
                <th class="px-4 py-3">Ngày giao dịch</th>
                <th class="px-4 py-3">Mã ngân hàng</th>
                <th class="px-4 py-3">Mã giao dịch</th>
                <th class="px-4 py-3">Khách hàng</th>
                <th class="px-4 py-3">Mã hóa đơn</th>
                <th class="px-4 py-3">Loại thẻ</th> 
                <th class="text-center px-4 py-3">Mã giao dịch VNPAY</th>
                <th class="px-4 py-3"></th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:bg-gray-800">
                @foreach ($giaodichs as $giaodich)
                    <tr class="text-gray-700 ">
                        <td class="px-4 py-1 text-sm">
                            {{ $giaodich->id }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $giaodich->created_at->format('d/m/Y') }}
                        </td>
                        <td class="px-4 py-3 text-xs">
                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">
                            {{ $giaodich->vnp_ma_ngan_hang }}
                            </span>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $giaodich->vnp_ma_giao_dich_ngan_hang }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $giaodich->khachhang->ho_ten }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $giaodich->hoadon->id }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $giaodich->vnp_loai_the }}
                        </td>
                        <td class="text-center px-4 py-3 text-sm">
                            {{ $giaodich->vnp_ma_giao_dich_vnpay }}
                        </td>
                        <td class="text-center w-10">
                            <a class="w-4 h mr-2 transform hover:text-purple-500 text-gray-600 hover:scale-110">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>
                    </tr>  
                @endforeach
            </tbody>
        </table>
    </div>  
    </div>
</div>
@endsection
@push('scripts')
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(function () { 
          var table = $('.datatable').DataTable({
                "bPaginate": false,
                "bInfo": false,  
                "language": {
                    "search": "Tìm kiếm:"
                }
          });
        });
    </script>
@endpush