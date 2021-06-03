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
                <marquee>126 Nguyễn Thiện Thành, Tp Trà Vinh.</marquee>
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
            <nav class="w-72">
                <a class="flex items-center py-2 px-8 bg-gray-200 text-gr hover:no-underline hover:text-gray-700 border-gray-700" href="#">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                    <span class="mx-2 font-medium">Máy tính xách tay - Laptop</span>
                </a>

                <a class="flex items-center py-2 px-8 text-gray-600 border-white hover:bg-gray-200 hover:text-gray-700 hover:no-underline hover:border-gray-700" href="#">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                    <span class="mx-2 font-medium">Máy tính - Máy chủ</span>
                </a>

                <a class="flex items-center py-2 px-8 text-gray-600 border-white hover:bg-gray-200 hover:text-gray-700 hover:no-underline hover:border-gray-700" href="#">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                    <span class="mx-2 font-medium">Máy in - TB Văn phòng</span>
                </a>

                <a class="flex items-center  py-2 px-8 text-gray-600 border-white hover:bg-gray-200 hover:text-gray-700 hover:no-underline hover:border-gray-700" href="#">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                    <span class="mx-2 font-medium">Linh kiện máy tính</span>
                </a>
                <a class="flex items-center  py-2 px-8 text-gray-600 border-white hover:bg-gray-200 hover:text-gray-700 hover:border-gray-700 hover:no-underline" href="#">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                    <span class="mx-2 font-medium">Màn hình máy tính</span>
                </a>
                <a class="flex items-center  py-2 px-8 text-gray-600 border-white hover:bg-gray-200 hover:text-gray-700 hover:border-gray-700 hover:no-underline" href="#">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                    <span class="mx-2 font-medium">Màn hình máy tính</span>
                </a>
                <a class="flex items-center  py-2 px-8 text-gray-600 border-white hover:bg-gray-200 hover:text-gray-700 hover:border-gray-700 hover:no-underline" href="#">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                    <span class="mx-2 font-medium">Màn hình máy tính</span>
                </a>
                <a class="flex items-center  py-2 px-8 text-gray-600 border-white hover:bg-gray-200 hover:text-gray-700 hover:border-gray-700 hover:no-underline" href="#">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                    <span class="mx-2 font-medium">Màn hình máy tính</span>
                </a>
                <a class="flex items-center  py-2 px-8 text-gray-600 border-white hover:bg-gray-200 hover:text-gray-700 hover:border-gray-700 hover:no-underline" href="#">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                    <span class="mx-2 font-medium">Màn hình máy tính</span>
                </a>
                <a class="flex items-center  py-2 px-8 text-gray-600 border-white hover:bg-gray-200 hover:text-gray-700 hover:border-gray-700 hover:no-underline" href="#">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                    <span class="mx-2 font-medium">Màn hình máy tính</span>
                </a>

                <a class="flex items-center  py-2 px-8 text-gray-600 border-white hover:bg-gray-200 hover:text-gray-700 hover:border-gray-700 hover:no-underline" href="#">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                    <span class="mx-2 font-medium">Màn hình máy tính</span>
                </a>
                <a class="flex items-center  py-2 px-8 text-gray-600 border-white hover:bg-gray-200 hover:text-gray-700 hover:border-gray-700 hover:no-underline" href="#">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                    <span class="mx-2 font-medium">Màn hình máy tính</span>
                </a> 
            </nav> 
            <div class="flex-1 bg-gray-50">
                <div style="" id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="200">
                        <img src="https://anphat.com.vn/media/banner/02_Jun168a3eeabd7a9cf3bf855c2f31dc6883.jpg" class="d-block w-100 rounded" alt="...">
                      </div>
                      <div class="carousel-item" data-bs-interval="200">
                        <img src="https://anphat.com.vn/media/banner/22_Apr5f4cb3d07b51b1b97623a89cf444f836.jpg" class="d-block w-100 rounded" alt="..."> 
                      </div>
                      <div class="carousel-item">
                        <img src="https://anphat.com.vn/media/banner/12_Maya7004383d7438b8bdc521f1d0f5c0ac7.jpg" class="d-block w-100 rounded" alt="..."> 
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden"></span>
                    </button>
                </div>
            </div>
            <div class="w-96 space-y-2 mt-2 flex flex-col justify-center">
                <div class="">
                    <img src="https://anphat.com.vn/media/banner/23_Apraef5cdc45aa41ff8ff98125d6d9f8c64.jpg" class="d-block w-100 rounded-lg" alt="...">
                </div>
                <div class="">
                    <img src="https://anphat.com.vn/media/banner/17_Apr888cb18fa40a145cc490bb894eba1e96.jpg" class="d-block w-100 rounded-lg" alt="...">
                </div>
            </div>
        </div>
        <div class="container-fluid border-t-2 border-indigo-700 bg-white pb-2"> 
            <div class="text-sm lg:flex-grow  animated jackinthebox">
                <a class="relative inline block lg:inline-block text-md font-bold  text-orange-500  mx-2 sm:hover:bg-transparent rounded-lg">
                    <div class="bg-indigo-700 text-white w-44 p-2">Top sản phẩm bán chạy </div> 
                    <div class="triangle"></div>
                </a>
                <a href="#home"
                    class="block lg:inline-block text-md font-bold hover:no-underline text-orange-500 uppercase mx-2">
                    PC Gaming
                </a>
                <a href="#home"
                    class="block lg:inline-block text-md font-bold hover:no-underline text-gray-900 uppercase mx-2">
                    Laptop Gaming
                </a>
                <a href="#home"
                    class="block lg:inline-block text-md font-bold hover:no-underline text-gray-900 uppercase mx-2">
                    ACCOMMODATION
                </a> 
            </div>
            <div class="flex flex-col mb-2">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-4">
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>    
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>  
                </div>
                <div class="text-center mt-4 ">
                    <a class="hover:no-underline cursor-pointer w-52 px-6 py-2 text-xs leading-6 text-white uppercase transition bg-blue-700 rounded shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">Xem tất cả sản phẩm</a>
                </div>
            </div> 
        </div>
        <div class="container-fluid border-t-2 border-indigo-700 bg-white mt-4 pb-2"> 
            <div class="text-sm lg:flex-grow  animated jackinthebox">
                <a class="relative inline block lg:inline-block text-md font-bold  text-orange-500  mx-2 sm:hover:bg-transparent rounded-lg">
                    <div class="bg-indigo-700 text-white w-44 p-2">Máy tính - Máy Chủ</div> 
                    <div class="triangle"></div>
                </a>
                <a href="#home"
                    class="block lg:inline-block text-md font-bold hover:no-underline text-orange-500 uppercase mx-2">
                    PC Gaming
                </a>
                <a href="#home"
                    class="block lg:inline-block text-md font-bold hover:no-underline text-gray-900 uppercase mx-2">
                    Laptop Gaming
                </a>
                <a href="#home"
                    class="block lg:inline-block text-md font-bold hover:no-underline text-gray-900 uppercase mx-2">
                    ACCOMMODATION
                </a> 
            </div>
            <div class="flex flex-col mb-2">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-4">
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>    
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>      
                </div>
                <div class="text-center mt-4 border-t-2 border-gray-100 pt-4"> 
                    <a class="hover:no-underline cursor-pointer w-52 px-6 py-2 text-xs leading-6 text-center text-blue-700 uppercase transition bg-transparent border-2 border-blue-700 rounded ripple hover:bg-blue-800 focus:outline-none waves-effect">
                        Xem tất cả sản phẩm
                      </a>
                </div>
            </div> 
        </div>
        <div class="container-fluid border-t-2 border-indigo-700 bg-white mt-4 pb-2"> 
            <div class="text-sm lg:flex-grow  animated jackinthebox">
                <a class="relative inline block lg:inline-block text-md font-bold  text-orange-500  mx-2 sm:hover:bg-transparent rounded-lg">
                    <div class="bg-indigo-700 text-white w-44 p-2">Máy in - TB văn phòng </div> 
                    <div class="triangle"></div>
                </a>
                <a href="#home"
                    class="block lg:inline-block text-md font-bold hover:no-underline text-orange-500 uppercase mx-2">
                    PC Gaming
                </a>
                <a href="#home"
                    class="block lg:inline-block text-md font-bold hover:no-underline text-gray-900 uppercase mx-2">
                    Laptop Gaming
                </a>
                <a href="#home"
                    class="block lg:inline-block text-md font-bold hover:no-underline text-gray-900 uppercase mx-2">
                    ACCOMMODATION
                </a> 
            </div>
            <div class="flex flex-col mb-2">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-4">
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>    
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>      
                </div>
                <div class="text-center mt-4 border-t-2 border-gray-100 pt-4"> 
                    <a class="hover:no-underline cursor-pointer w-52 px-6 py-2 text-xs leading-6 text-center text-blue-700 uppercase transition bg-transparent border-2 border-blue-700 rounded ripple hover:bg-blue-800 focus:outline-none waves-effect">
                        Xem tất cả sản phẩm
                      </a>
                </div>
            </div> 
        </div>
        <div class="container-fluid border-t-2 border-indigo-700 bg-white mt-4 pb-2"> 
            <div class="text-sm lg:flex-grow  animated jackinthebox">
                <a class="relative inline block lg:inline-block text-md font-bold  text-orange-500  mx-2 sm:hover:bg-transparent rounded-lg">
                    <div class="bg-indigo-700 text-white w-44 p-2">Linh kiện máy tính </div> 
                    <div class="triangle"></div>
                </a>
                <a href="#home"
                    class="block lg:inline-block text-md font-bold hover:no-underline text-orange-500 uppercase mx-2">
                    PC Gaming
                </a>
                <a href="#home"
                    class="block lg:inline-block text-md font-bold hover:no-underline text-gray-900 uppercase mx-2">
                    Laptop Gaming
                </a>
                <a href="#home"
                    class="block lg:inline-block text-md font-bold hover:no-underline text-gray-900 uppercase mx-2">
                    ACCOMMODATION
                </a> 
            </div>
            <div class="flex flex-col mb-2">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-4">
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>    
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>   
                    <div class="flex flex-col items-left justify-center bg-white p-1 hover:shadow-md rounded-lg">
                        <div class="inline-flex shadow-lg border border-gray-200 overflow-hidden h-full w-full">
                            <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class="object-cover "
                                />
                        </div>  
                        <p class="text-sm mb-0 font-normal">Mã SP : NBAS0952</p> 
                        <p class="text-sm mb-0 font-normal">Laptop Asus TUF Dash F15 FX516PE-HN005T (Core i7-11370H | 8GB | </p> 
                        <p class="text-sm mb-0 font-normal line-through">29.990.000 đ </p> 
                        <p class="text-md font-bold text-red-500">26.990.000 đ </p>   
                    </div>      
                </div>
                <div class="text-center mt-4 border-t-2 border-gray-100 pt-4"> 
                    <a class="hover:no-underline cursor-pointer w-52 px-6 py-2 text-xs leading-6 text-center text-blue-700 uppercase transition bg-transparent border-2 border-blue-700 rounded ripple hover:bg-blue-800 focus:outline-none waves-effect">
                        Xem tất cả sản phẩm
                      </a>
                </div>
            </div> 
        </div>   
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">
 
        <footer class="bg-indigo-600 pt-10 sm:mt-10 pt-10">
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