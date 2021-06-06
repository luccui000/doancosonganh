@extends('layouts.index')
@section('content')
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
@endsection