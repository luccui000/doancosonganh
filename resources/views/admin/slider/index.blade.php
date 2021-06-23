@extends('layouts.app')
@push('styles')
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
    <style>
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter {
            position: absolute;
            top: -40px;
            right: 100px;
        }
    </style>
@endpush
@section('content') 
<div class="w-full bg-white rounded-lg pb-12">  
  <div class="pl-2 pr-2 "> 
    <h3 class="py-2">Danh sách slider <a href="{{ route('admin.slider.create') }}" style="margin-top: 7px;" class="hover:no-underline cursor-pointer absolute right-2 font-normal text-sm p-1 bg-green-600 rounded text-white hover:bg-green-500">Thêm mới</a></h3> 
    <table class="w-full whitespace-no-wrap mb-2 datatable shadow-sm">
        <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50 ">
            <th class="px-4 py-3">#</th>
            <th class="px-4 py-3">Tên Slider</th>
            <th class="px-4 py-3">Key</th>
            <th class="px-4 py-3">Ngày tạo</th> 
            <th class="px-4 py-3">Trạng thái</th>   
            <th class="px-4 py-3"></th>   
            </tr>
        </thead>
        <tbody class="bg-white divide-y"> 
            @foreach ($sliders as $slider)
            <tr class="text-gray-700 ">
                <td class="px-4 py-1 text-sm">
                    {{ $loop->iteration }}
                </td>
                <td class="px-4 py-3 text-sm">
                    {{ $slider->ten_slider }}
                </td>
                <td class="px-4 py-3 text-xs">
                {{ $slider->key_slider }} 
                </td>
                <td class="px-4 py-3 text-sm">
                    {{ $slider->created_at->format('d/m/Y') }}
                </td>
                <td class="px-4 py-3 text-sm">
                    <span class="px-2 py-1 font-semibold leading-tight text-{{ $slider->mau_sac_trang_thai  }}-700 bg-{{ $slider->mau_sac_trang_thai  }}-100 rounded-full"> 
                        {{ $slider->trang_thai_chu }}
                    </span>
                </td>  
                <td class="text-center w-20">
                    <a class="inline-block w-4 h mr-2 transform hover:text-purple-500 text-gray-600 hover:scale-110">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.slider.edit', $slider->id) }}" class="inline-block w-4 h mr-2 transform hover:text-purple-500 text-gray-600 hover:scale-110">
                        <i class="fa fa-pencil-alt"></i>
                    </a>
                    <a class="inline-block w-4 h mr-2 transform hover:text-purple-500 text-gray-600 hover:scale-110">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>  
        @endforeach 
        </tbody>
    </table> 
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
                    "search": "Tìm kiếm:",
                    "emptyTable": '<span class="text-gray-500"> Không tìm thấy dữ liệu nào cả.</span>'
                },
                "columnDefs": [
                    { "orderable": false, "targets": 5 }
                ]
            });
        });
    </script>
@endpush