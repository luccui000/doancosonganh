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
    @stack('styles')
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
                                    <span class="text-sm font-medium">Trang chủ</span>
                                </div>
                            </a>
                        </li>
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
                            <a href="{{ route('admin.sanpham.index') }}" aria-current="page" class="block text-gray-200 hover:text-white hover:no-underline transition duration-150 false active" style="outline: currentcolor none medium;">
                                <div class="flex flex-grow"> 
                                    <span class="text-sm font-medium">Mặt hàng</span>
                                </div>
                            </a>
                        </li>
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
                            <a aria-current="page" class="block text-gray-200 hover:text-white hover:no-underline transition duration-150 false active" href="/" style="outline: currentcolor none medium;">
                                <div class="flex items-center justify-between">
                                    <div class="flex flex-grow"> 
                                        <span class="text-sm font-medium">Hóa đơn</span>
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
                        <div class="flex"></div>
                        <div class="flex items-center">
                            <div>
                                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-200 transition duration-150 rounded-full ml-3 bg-gray-200" aria-controls="search-modal" style="outline: currentcolor none medium;">
                                    <span class="sr-only">Search</span>
                                    <svg class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path class="fill-current text-gray-500" d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path><path class="fill-current text-gray-400" d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path></svg>
                                </button>
                                {{-- <div class="fixed inset-0 bg-gray-900 bg-opacity-30 z-50 transition-opacity enter-done" aria-hidden="true" style="">
                                </div>  --}}
                            </div>
                            <div class="relative inline-flex ml-3">
                                <button class="w-8 h-8 flex items-center justify-center bg-gray-100 hover:bg-gray-200 transition duration-150 rounded-full false" aria-haspopup="true" aria-expanded="false" style="outline: currentcolor none medium;">
                                    <span class="sr-only">Notifications</span>
                                    <svg class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path class="fill-current text-gray-500" d="M6.5 0C2.91 0 0 2.462 0 5.5c0 1.075.37 2.074 1 2.922V12l2.699-1.542A7.454 7.454 0 006.5 11c3.59 0 6.5-2.462 6.5-5.5S10.09 0 6.5 0z"></path><path class="fill-current text-gray-400" d="M16 9.5c0-.987-.429-1.897-1.147-2.639C14.124 10.348 10.66 13 6.5 13c-.103 0-.202-.018-.305-.021C7.231 13.617 8.556 14 10 14c.449 0 .886-.04 1.307-.11L15 16v-4h-.012C15.627 11.285 16 10.425 16 9.5z"></path></svg>
                                    <div class="absolute top-0 right-0 w-2.5 h-2.5 bg-red-500 border-2 border-white rounded-full"></div>
                                </button> 
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
                @yield('content')
            </main>
        </div>
    </div> 
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>  
    <script>  
        window.addEventListener('swal.modal', event => { 
            Swal.fire({
                title: event.detail.title,   
                content: event.detail.content ?? "",   
                icon: event.detail.type,   
            }) 
        }) 
    </script>
    <script src="{{ asset('js/moment.min.js') }}"></script> 
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> 
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @stack('scripts')
</body>
</html>