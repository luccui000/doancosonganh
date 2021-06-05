<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet"> 
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }  
    </style>
    <title>Admin Pages</title>
</head>
<body class="font-inter antialiased bg-gray-100 text-gray-600">  
    <div class="flex h-screen overflow-hidden">
        <div class="lg:w-64 bg-gray-800">
            <div class="class="absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 transform h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 flex-shrink-0 bg-gray-800 p-4 transition-transform duration-200 ease-in-out -translate-x-64">
                <div><h3 class="text-xs uppercase text-gray-500 font-semibold pl-3">Pages</h3>
                    <ul class="mt-1">
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 bg-gray-900">
                            <a aria-current="page" class="block text-gray-200 hover:no-underline transition duration-150 hover:text-gray-200 active" href="/" style="outline: currentcolor none medium;">
                                <div class="flex flex-grow"> 
                                    <span class="text-sm font-medium">Dashboard</span>
                                </div>
                            </a>
                        </li>
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
                            <a aria-current="page" class="block text-gray-200 hover:text-white hover:no-underline transition duration-150 false active" href="/" style="outline: currentcolor none medium;">
                                <div class="flex flex-grow"> 
                                    <span class="text-sm font-medium">Customers</span>
                                </div>
                            </a>
                        </li>
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
                            <a aria-current="page" class="block text-gray-200 hover:text-white hover:no-underline transition duration-150 false active" href="/" style="outline: currentcolor none medium;">
                                <div class="flex items-center justify-between">
                                    <div class="flex flex-grow"> 
                                        <span class="text-sm font-medium">Orders</span>
                                    </div>
                                    <div class="flex flex-shrink-0 ml-2">
                                        <span class="inline-flex items-center justify-center h-5 text-xs font-medium text-white bg-indigo-500 px-2 rounded-sm">4</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
                            <a aria-current="page" class="block text-gray-200 hover:text-white hover:no-underline transition duration-150 false active" href="/" style="outline: currentcolor none medium;">
                                <div class="flex items-center justify-between">
                                    <div class="flex flex-grow"> 
                                        <span class="text-sm font-medium">Team</span>
                                    </div>
                                    <div class="flex flex-shrink-0 ml-2">
                                        <svg class="w-3 h-3 flex-shrink-0 ml-1 fill-current text-gray-400 false" viewBox="0 0 12 12"><path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path></svg>
                                    </div>
                                </div>
                            </a>
                            <ul class="pl-9 mt-1 hidden">
                                <li class="mb-1 last:mb-0">
                                    <a aria-current="page" class="block text-gray-200 hover:text-white hover:no-underline transition duration-150 false active" href="/" style="outline: currentcolor none medium;">
                                        <span class="text-sm font-medium">Team - Tabs</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a aria-current="page" class="block text-gray-200 hover:text-white hover:no-underline transition duration-150 false active" href="/" style="outline: currentcolor none medium;">
                                        <span class="text-sm font-medium">Team - Tabs</span>
                                    </a>
                                </li> 
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            <header class="sticky top-0 bg-white border-b border-gray-200 z-30">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16 -mb-px">
                        <div class="flex">

                        </div>
                        <div class="flex items-center">
                            <div>
                                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-200 transition duration-150 rounded-full ml-3 bg-gray-200" aria-controls="search-modal" style="outline: currentcolor none medium;">
                                    <span class="sr-only">Search</span>
                                    <svg class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path class="fill-current text-gray-500" d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path><path class="fill-current text-gray-400" d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path></svg>
                                </button>
                                {{-- <div class="fixed inset-0 bg-gray-900 bg-opacity-30 z-50 transition-opacity enter-done" aria-hidden="true" style="">
                                </div> --}}
                                {{-- <div class="fixed inset-0 z-50 overflow-hidden flex items-start top-20 mb-4 justify-center transform px-4 sm:px-6 enter-done" role="dialog" aria-modal="true" style="">
                                    <div class="bg-white overflow-auto max-w-2xl w-full max-h-full rounded shadow-lg">
                                        <form class="border-b border-gray-200">
                                            <div class="relative">
                                                <label for="modal-search" class="sr-only">Search</label>
                                                <input id="modal-search" class="w-full border-0 focus:ring-transparent placeholder-gray-400 appearance-none py-3 pl-10 pr-4" type="search" placeholder="Search Anything…" style="outline: currentcolor none medium;">
                                                <button class="absolute inset-0 right-auto group" type="submit" aria-label="Search" style="outline: currentcolor none medium;">
                                                    <svg class="w-4 h-4 flex-shrink-0 fill-current text-gray-400 group-hover:text-gray-500 ml-4 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path><path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path></svg>
                                                </button>
                                            </div>
                                        </form>
                                    <div class="py-4 px-2">
                                        <div class="mb-3 last:mb-0">
                                        <div class="text-xs font-semibold text-gray-400 uppercase px-2 mb-2">Recent searches</div>
                                        <ul class="text-sm">
                                            <li>
                                                <a class="flex items-center p-2 text-gray-800 hover:text-white hover:bg-indigo-500 rounded group" href="/#0" style="outline: currentcolor none medium;">
                                                    <svg class="w-4 h-4 fill-current text-gray-400 group-hover:text-white group-hover:text-opacity-50 flex-shrink-0 mr-3" viewBox="0 0 16 16"><path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path></svg>
                                                    <span>Form Builder - 23 hours on-demand video</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>    
                                </div>                     --}}
                            </div>
                            <div class="relative inline-flex ml-3">
                                <button class="w-8 h-8 flex items-center justify-center bg-gray-100 hover:bg-gray-200 transition duration-150 rounded-full false" aria-haspopup="true" aria-expanded="false" style="outline: currentcolor none medium;">
                                    <span class="sr-only">Notifications</span>
                                    <svg class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path class="fill-current text-gray-500" d="M6.5 0C2.91 0 0 2.462 0 5.5c0 1.075.37 2.074 1 2.922V12l2.699-1.542A7.454 7.454 0 006.5 11c3.59 0 6.5-2.462 6.5-5.5S10.09 0 6.5 0z"></path><path class="fill-current text-gray-400" d="M16 9.5c0-.987-.429-1.897-1.147-2.639C14.124 10.348 10.66 13 6.5 13c-.103 0-.202-.018-.305-.021C7.231 13.617 8.556 14 10 14c.449 0 .886-.04 1.307-.11L15 16v-4h-.012C15.627 11.285 16 10.425 16 9.5z"></path></svg>
                                    <div class="absolute top-0 right-0 w-2.5 h-2.5 bg-red-500 border-2 border-white rounded-full"></div>
                                </button>
                                <div class="origin-top-right z-10 absolute top-full right-0 -mr-48 sm:mr-0 min-w-80 bg-white border border-gray-200 py-1.5 rounded shadow-lg overflow-hidden mt-1 exit-done" style="display: none;">
                                    <div>
                                        <div class="text-xs font-semibold text-gray-400 uppercase pt-1.5 pb-2 px-4">Notifications</div>
                                        <ul>
                                            
                                            <li class="border-b border-gray-200 last:border-0">
                                                <a class="block py-2 px-4 hover:bg-gray-50" href="/#0" style="outline: currentcolor none medium;">
                                                    <span class="block text-sm mb-2">📣 
                                                        <span class="font-medium text-gray-800">Edit your information in a swipe</span> 
                                                        Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
                                                    </span>
                                                    <span class="block text-xs font-medium text-gray-400">Feb 12, 2021</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr class="w-px h-6 bg-gray-200 mx-3    ">
                            <div class="relative inline-flex">
                                <button class="inline-flex justify-center items-center group" aria-haspopup="true" aria-expanded="true" style="outline: currentcolor none medium;">
                                    <img class="w-8 h-8 rounded-full" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAIAAAAlC+aJAAAD/ElEQVR4Ae2axXorRxCFq+by3VyT2NkENTecrC4zMz5A3sIw3mUXfoLQNsywCTOzMSiIhWZ7ZrpSU25NmGFGX/p8UneV8Pzq023E63edg3aWBVHIABgAA2AADIABMAAGwAAYAANw9VU39HTbbQzgurNbNvdv2zKQ6LHbEqBYfAsBerrz27b0b98mGO0FUG+MLi42AJFrdr9je//OHYPJhN1Om7hQehuImCEYAZOJ/M4dA7t2DqaSdnsAFEtvE0+BeQwmaVLJ/O5dA3v2CEbMASqVjzxvQawHEAKCXLJSCXvvnoF9+5x0yo4vgFJe+dv3CMQ4sAQkkCwIYipx2b59gwcOCEYMAeQselPME0tAQNTaGNJzqA4eHDx4yMmk7dgBlMvvKd+TJcBl51oUVrpIJ/OHDg0ePuxkMnaMAFxvfrL6MZBsgnA/i3QlM2kezKTzR444R486WcGIGkBUKLzV8qgllUzCxQPKLuFeWuJFOHp08NhxJ5u1owcold5CvY918kH6oAmF4UCo78dcxj5xwuFLLmdHCTC/0KjVRmUF9L5FSZNuxDFJp4VIROHj2f3Jk0OnTju9ghEBAKtQfDtcAVG4CsGgG11ryp88PpfdyAxnzg719m6MAqDwpvgKP2nkWawShkAo+QlZfunxuWz+7Fnn7PmhC/4Yxkr4h6SIFmZ5EPlKEciVS1KuxyVXvk++y6PyPd/3lL64ynU9Hj3X95Y8d8lnGG/F1wsrp8H6DwHSqesBqJVsZCJEUhRwoGUBIykgkHv0GMzyYFkTIrmbrX+zsPJFz/oKRP8dQCp5HeiDkidFSodFWEhnXbWSREIgt+IyE+IifDFjPb+04ssINvHaNR2dnRcF7nTukaVDjhZpKtAi7Tx8+IL/RWXprpq6dwm/d/+frkA6dR0p0oenUmISpBNJQlQAoS+Ss4Bj1p2oTD87701AqIgArkcLKYi5nJhIIsGAAAmxFSENB7OL46Xa07NL4yCKEmDVynXdnbYEwyImQFRilIH0kW9ZchgBWgA+TM+PFSaf4BFE0QMkE1ezRUAdaH2qy74Ux0ra4NqcHv2q9PjU7Gi8vp1OZ663GACAlAq//xEICb5lcd+YHvlo5PaPxu7Q7uMDYFkrE91XinVAxiC9AgIRDI2p4Xc+vvm9T29tzIzAzxV5hHq6L1+1ar18/CTBRzn1iYHqzeHRiYfqzc8gVOwA5ADFIOcKEclXgMCqNYdHxh6sNbT1WANkUtcSkYW4nKdK7dOR0Qeq9U9BFHeAjo6LV6/pANFk9dOR4ftD620BIN/AIVYqnwyP3F+taevtBLB69fpXXrmxItajkvl/IQNgAAyAATAABsAAGAADYAD+vwDfAQSHHlNp5b1mAAAAAElFTkSuQmCC" alt="User" width="32" height="32">
                                    <div class="flex items-center truncate">
                                        <span class="truncate ml-2 text-sm font-medium group-hover:text-gray-800">Acme Inc.</span>
                                        <svg class="w-3 h-3 flex-shrink-0 ml-1 fill-current text-gray-400" viewBox="0 0 12 12"><path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path></svg>
                                    </div>
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <main class="p-2">
                <div class="col-span-full xl:col-span-8 bg-white shadow rounded-sm border border-gray-200">
                    <header class="px-2 py-2 border-b border-gray-100">
                        <h2 class="font-semibold text-gray-800 pt-2">Danh sách các mặt hàng</h2>
                    </header>
                    <div class="p-3">
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full"> 
                                <thead class="text-xs uppercase text-gray-400 bg-gray-50 rounded-sm">
                                    <tr> 
                                        <th class="p-2"><div class="font-semibold text-left">#</div> </th>
                                        <th class="p-2"><div class="font-semibold text-center">Mã sản phẩm</div> </th>
                                        <th class="p-2"><div class="font-semibold text-center">Hình ảnh</div></th>
                                        <th class="p-2"><div class="font-semibold text-center">Tên sản phẩm</div></th>
                                        <th class="p-2"><div class="font-semibold text-center truncate">Đường dẫn liên kết</div></th>
                                        <th class="p-2"><div class="font-semibold text-center">Hãng sản xuất</div></th>
                                        <th class="p-2"><div class="font-semibold text-center">Loại sản phẩm</div></th>
                                        <th class="p-2"><div class="font-semibold text-center">Thông tin khuyến mãi</div></th>
                                        <th class="p-2"><div class="font-semibold text-center">Bảo hành</div></th>
                                        <th class="p-2"><div class="font-semibold text-center">Giá nhập</div></th>
                                        <th class="p-2"><div class="font-semibold text-center">Giá niêm yết</div></th>
                                        <th class="p-2"><div class="font-semibold text-center">Giá nhập</div></th> 
                                        <th class="p-2"><div class="font-semibold text-center"></div></th> 
                                    </tr>
                                </thead>
                                <tbody class="text-sm font-medium divide-y divide-gray-100">  
                                    @foreach ($sanphams as $sanpham) 
                                        <tr>
                                            <td class="p-2"> <div class="text-gray-800">{{ $loop->iteration }}</div> </td> 
                                            <td class="p-2"><div class="cursor-pointer text-center">{{ $sanpham->ma_sanpham }}</div></td>
                                            <td class="p-2">
                                                <div style="width: 100px;" >
                                                    <img  class="w-44 h-20" src="{{ $sanpham->hinh_anh_san_pham }}"/>
                                                </div>
                                            </td>
                                            <td class="p-2"><div style="max-width: 300px;" class="text-center text-truncate" title="{{ $sanpham->ten_sanpham }}">{{ $sanpham->ten_sanpham }}</div></td> 
                                            <td class="p-2"><div style="max-width: 150px;" class="text-center text-truncate"  title="{{ $sanpham->duong_dan_lien_ket }}">{{ $sanpham->duong_dan_lien_ket }}</div></td> 
                                            <td class="p-2"><div style="max-width: 150px;" class="text-center text-truncate" title="{{ $sanpham->hang_san_xuat }}">{{ $sanpham->hang_san_xuat }}</div></td> 
                                            <td class="p-2"><div class="text-center w-32" >{{ $sanpham->loaisanpham->ten_loai_sanpham }}</div></td>  
                                            <td class="p-2"><div style="max-width: 150px;" class="text-center text-truncate" title="{{ $sanpham->thong_tin_khuyen_mai }}">{{ $sanpham->thong_tin_khuyen_mai }}</div></td> 
                                            <td class="p-2"><div style="max-width: 150px;" class="text-center text-truncate" title="{{ $sanpham->bao_hanh }}">{{ $sanpham->bao_hanh }}</div></td> 
                                            <td class="p-2"><div class="text-center text-green-500">{{ $sanpham->gia_nhap_vnd }}</div></td> 
                                            <td class="p-2"><div class="text-center text-green-500">{{ $sanpham->gia_niem_yet_vnd }}</div></td> 
                                            <td class="p-2"><div class="text-center text-blue-500  text-lg">{{ $sanpham->gia_khuyen_mai_vnd }}</div></td> 
                                            <td class="inline-block cursor-pointer">
                                                <a>Sửa</a>
                                                <a>Xem</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div> 
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>