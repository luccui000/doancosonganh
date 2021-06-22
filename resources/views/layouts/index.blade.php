<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link href="{{ asset('plugins/fontawesome/css/all.css') }}" rel="stylesheet" >   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet"> 
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }  
        .box-child::after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            right: -25px;
            border-top: 36px solid #4338ca;
            border-right: 25px solid transparent;
        } 
        .dropdown {
            position: relative;
        }
        .dropdown__menu {
            display: none;
            position: absolute; 
            background-color: #ffffff; 
            min-width: 180px; 
            z-index: 100;
        }
        .dropdown:hover .dropdown__menu {
            display: block; 
        } 
    </style>
    @livewireStyles
    @stack('styles')  
</head>
<body>    
    <nav class="navbar navbar-expand-lg p-0 text-white bg-indigo-700" style="background-color: rgba(67, 56, 202,1)">
        <div class="container-fluid flex">
            <div class="w-1/2">
                <marquee>Thạch Minh Lực - DA19TTA - 110119025, 126 Nguyễn Thiện Thành, Tp Trà Vinh.</marquee>
            </div>
            <div>
                <ul class="navbar-nav p-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Hệ thống showroom</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Video</a>
                    </li>
                </ul> 
            </div>
        </div> 
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: rgba(79, 70, 229,1)">
        <div class="container-fluid"> 
            <a class="navbar-brand text-white w-60" href="/">
                <img src="img/logo.png" alt="" width="120" height="100" class="d-inline-block align-text-center ">
                Computer
            </a> 
            <div class="relative w-1/2">
                @livewire('search-drop-down')
                <button class="absolute right-0 bottom-2 mt-5 mr-3">
                    <svg class="text-gray-800 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                      viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                      width="512px" height="512px">
                      <path
                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg> 
                </button> 
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link  w-52 text-sm "  href="#">
                            <div class="flex">
                                <div class="w-10 pt-1 bg-white rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-900 ml-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                                    </svg> 
                                </div>
                                <div class="text-white ml-2">
                                    <div class="text-sm"> Mua hàng online</div>
                                    <div class="text-sm"> 1900 2345</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link w-44 text-sm "  href="#">
                            <div class="flex">
                                <div class="w-10"> 
                                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 26 26" >
                                        <path style="fill: #ffffff;" d="M 13 0 C 5.8321429 0 0 5.8321429 0 13 C 0 20.167857 5.8321429 26 13 26 C 20.167857 26 26 20.167857 26 13 C 26 5.8321429 20.167857 0 13 0 z M 13 2 C 19.086977 2 24 6.9130231 24 13 C 24 15.861182 22.907709 18.452155 21.125 20.40625 C 20.373755 19.027539 18.16875 17.89375 15.8125 17.40625 C 15.8125 17.40625 14.6875 17.1 15.1875 16 C 15.8875 15.1 16.3125 14.1125 16.3125 13.8125 C 16.3125 13.8125 17.30625 13.0125 17.40625 11.8125 C 17.50625 10.7125 17.1875 10.59375 17.1875 10.59375 C 17.5875 9.29375 17.69375 4.4 14.59375 5 C 14.09375 4 10.8125 3.20625 9.3125 5.90625 C 8.6125 7.20625 8.3 9.1 9 10.5 C 9 10.6 8.7875 10.39375 8.6875 11.09375 C 8.6875 11.79375 9.0125 12.7875 9.3125 13.1875 C 9.4125 13.3875 9.6125 13.49375 9.8125 13.59375 C 9.8125 13.59375 10.00625 14.80625 10.90625 15.90625 C 11.10625 16.80625 10.1875 17.3125 10.1875 17.3125 C 7.75 17.8 5.5353516 18.933789 4.78125 20.3125 C 3.0509759 18.369796 2 15.81371 2 13 C 2 6.9130231 6.9130231 2 13 2 z"/>
                                    </svg> 
                                </div>
                                <div class="text-white ml-2 cursor-pointer">
                                    @if(auth()->guard('khachhangs')->user())
                                        <div class="dropdown">
                                            <div class="mt-2 guest">
                                                {{ auth()->guard('khachhangs')->user()->ho_ten }}
                                            </div>
                                            <ul class="dropdown__menu shadow-md rounded-md" >
                                                <li class="hover:bg-gray-100 p-2"><a class="hover:no-underline text-gray-700 cursor-pointer hover:text-gray-900" 
                                                    href="{{ route('khachhang.taikhoan') }}">Tài khoản của tôi</a>
                                                </li>
                                                <li class="hover:bg-gray-100 p-2 border-gray-200 border-b-2"><a class="hover:no-underline text-gray-700 cursor-pointer hover:text-gray-900" 
                                                    href="{{ route('khachhang.donhang') }}">Đơn hàng của tôi</a>
                                                </li>
                                                <li class="hover:bg-gray-100 p-2"><a class="hover:no-underline text-gray-700 cursor-pointer hover:text-gray-900" 
                                                    href="{{ route('dangxuatkhach') }}">Đăng xuất</a>
                                                </li>
                                            </ul>
                                        </div> 
                                    @else
                                        <div class="flex flex-col-reverse">
                                            <a href="{{ route('dangkykhach') }}" class="text-sm cursor-pointer text-white hover:text-green-400 hover:no-underline">Đăng ký</a>
                                            <a href="{{ route('dangnhapkhach') }}" class="text-sm cursor-pointer text-white hover:no-underline ">Đăng nhập</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div> 
                    </li>  
                    <li class="nav-item cursor-pointer">
                        <a class="nav-link w-32 text-sm "  href="{{ route('trangchu.xemgiohang') }}"> 
                            <div class="flex">
                                <div class="w-3/12 relative"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white ml-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    <span class="absolute top-0 -right-2 bg-red-600 rounded-full w-4 h-4 text-white text-center" style="font-size: 10px;">{{ Cart::content()->count() ?? 0 }}</span>
                                </div> 
                                <div class="text-white ml-2 mt-2">
                                    Giỏ hàng
                                </div>
                            </div>
                        </a> 
                    </li> 
                </ul> 
            </div>
        </div>
    </nav>
    <main class="h-screen">
        @yield('content')
    </main> 
    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
        <!-- Position it -->
        <div style="position: absolute; top: 0; right: 0;">
      
          <!-- Then put toasts within -->
          <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <img src="..." class="rounded mr-2" alt="...">
              <strong class="mr-auto">Bootstrap</strong>
              <small class="text-muted">just now</small>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="toast-body">
              See? Just like this.
            </div>
          </div>
        </div>
    </div>
    @livewireScripts
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @stack('scripts')
</body>
</html>