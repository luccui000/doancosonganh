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
    </style>
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
            <a class="navbar-brand text-white w-60" href="#">
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
        <div class=" bg-gray-50 flex space-x-1 pb-3"> 
            <x-danhmuc></x-danhmuc>  
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
                        <div class="uppercase font-semibold">Chính sách giao hàng</div>
                        <div>Nhận hàng và thanh toán tại nhà</div>
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
                        <div class="uppercase font-semibold">Chính sách giao hàng</div>
                        <div>Nhận hàng và thanh toán tại nhà</div>
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
                        <div class="uppercase font-semibold">Chính sách giao hàng</div>
                        <div>Nhận hàng và thanh toán tại nhà</div>
                    </div>
                </div>
            </div> 
        </div> 
        <footer class="bg-indigo-600 pt-10 sm:mt-10">
            <div class="max-w-6xl m-auto text-gray-800 flex flex-wrap justify-left">
                <!-- Col-1 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Getting Started
                    </div>
        
                    <!-- Links -->
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Installation
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Release Notes
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Upgrade Guide
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Using with Preprocessors
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Optimizing for Production
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Browser Support
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        IntelliSense
                    </a>
                </div>
        
                <!-- Col-2 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Core Concepts
                    </div>
        
                    <!-- Links -->
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Utility-First
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Responsive Design
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Hover, Focus, & Other States
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Dark Mode
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Adding Base Styles
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Extracting Components
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Adding New Utilities
                    </a>
                </div>
        
                <!-- Col-3 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Customization
                    </div>
        
                    <!-- Links -->
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Configuration
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Theme Configuration
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Breakpoints
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Customizing Colors
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Customizing Spacing
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Configuring Variants
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Plugins
                    </a>
                </div>
        
                <!-- Col-3 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Community
                    </div>
        
                    <!-- Links -->
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        GitHub
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Discord
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Twitter
                    </a>
                    <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        YouTube
                    </a>
                </div>
            </div>
        
            <!-- Copyright Bar -->
            <div class="pt-2">
                <div class="flex pb-5 px-3 m-auto pt-5 
                    border-t border-gray-500 text-gray-400 text-sm 
                    flex-col md:flex-row max-w-6xl">
                    <div class="mt-2">
                        © Copyright 1998-year. All Rights Reserved.
                    </div>
        
                    <!-- Required Unicons (if you want) -->
                    <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                        <a href="#" class="w-6 mx-1">
                            <i class="uil uil-facebook-f"></i>
                        </a>
                        <a href="#" class="w-6 mx-1">
                            <i class="uil uil-twitter-alt"></i>
                        </a>
                        <a href="#" class="w-6 mx-1">
                            <i class="uil uil-youtube"></i>
                        </a>
                        <a href="#" class="w-6 mx-1">
                            <i class="uil uil-linkedin"></i>
                        </a>
                        <a href="#" class="w-6 mx-1">
                            <i class="uil uil-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </main>  
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>