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
    <table class="w-full whitespace-no-wrap mb-2 datatable shadow-sm">
      <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50 ">
          <th class="px-4 py-3">#</th>
          <th class="px-4 py-3">Ngày đăng ký</th>
          <th class="px-4 py-3">Họ tên KH</th>
          <th class="px-4 py-3">Email</th>
          <th class="px-4 py-3">Số điện thoại</th>
          <th class="px-4 py-3">Đăng ký bằng</th>  
          <th class="px-4 py-3"></th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y dark:bg-gray-800"> 
        @foreach ($khachhangs as $khachhang)
            <tr class="text-gray-700 ">
                <td class="px-4 py-1 text-sm">
                    {{ $loop->iteration }}
                </td>
                <td class="px-4 py-3 text-sm">
                    {{ $khachhang->created_at->format('d/m/Y') }}
                </td>
                <td class="px-4 py-3 text-xs">
                {{ $khachhang->ho_ten }} 
                </td>
                <td class="px-4 py-3 text-sm">
                    {{ $khachhang->email }}
                </td>
                <td class="px-4 py-3 text-sm">
                    {{ $khachhang->dien_thoai }}
                </td> 
                <td class="px-4 py-3 text-sm">
                @if($khachhang->mangxahoi == "facebook")
                <span class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full">
                    {{ $khachhang->mangxahoi  }}
                </span>
                @endif
                @if($khachhang->mangxahoi == "google")
                <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full">
                    {{ $khachhang->mangxahoi  }}
                </span>
                @endif
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
    {{ $khachhangs->links('paginate') }}
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