<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
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
    </style>
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
                <input
                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded-full shadow"
                    placeholder="Search..."
                /> 
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
                                <div class="w-10 pt-1 bg-white rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-900 ml-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg> 
                                </div>
                                <div class="text-white ml-2">
                                    <div class="flex flex-col-reverse">
                                        <a href="#" class="text-sm cursor-pointer text-white hover:text-green-400 hover:no-underline">Đăng ký</a>
                                        <a href="#" class="text-sm cursor-pointer text-white hover:no-underline ">Đăng nhập</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </li>  
                    <li class="nav-item cursor-pointer">
                        <div class="nav-link w-32 text-sm "  href="#">
                            <div class="flex">
                                <div class="w-3/12 "> 
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white ml-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div> 
                                <div class="text-white ml-2 mt-2">
                                    Giỏ hàng
                                </div>
                            </div>
                        </div> 
                    </li> 
                </ul> 
            </div>
        </div>
    </nav>
    <main class="h-screen">
        @yield('content')
    </main>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @stack('scripts')
</body>
</html>