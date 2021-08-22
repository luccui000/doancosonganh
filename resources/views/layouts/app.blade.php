<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">   
    <script src="{{ asset("js/alpine.min.js") }}" ></script>   
    <title>Trang quản trị</title> 
    @stack('styles')
    @livewireStyles 
</head> 
<body class="antialiased bg-gray-200"> 
	<div x-data="{ sidemenu: false, segmentUrl: '{{ request()->segment(2) }}' }" class="h-screen flex overflow-hidden" x-cloak @keydown.window.escape="sidemenu = false"> 
        <div class="md:hidden">
			<div @click="sidemenu = false" class="fixed inset-0 z-30 bg-gray-600 opacity-0 pointer-events-none transition-opacity ease-linear duration-300" :class="{'opacity-75 pointer-events-auto': sidemenu, 'opacity-0 pointer-events-none': !sidemenu}"></div> 
			<div class="fixed inset-y-0 left-0 flex flex-col z-40 max-w-xs w-full bg-white transform ease-in-out duration-300 -translate-x-full" :class="{'translate-x-0': sidemenu, '-translate-x-full': !sidemenu}">
 
				<div class="flex items-center px-6 py-3 h-16">
					<div class="text-2xl font-bold tracking-tight text-gray-800">Dashing Admin.</div>
				</div> 
				<div class="px-4 py-2 flex-1 h-0 overflow-y-auto">
					<ul>
						<li>
							<a href="{{ route('admin.baocao.index') }}" 
								class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200"> 
								<i class="fa fa-house-damage mr-4"></i>
								Trang chủ
							</a>
						</li>

						<li>
							<a href="{{ route('admin.sanpham.index') }}#"
								class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
								<i class="fa fa-cube mr-4"></i>
								Sản phẩm
							</a>
						</li>

						<li>
							<a href="{{ route('admin.hoadon.index') }}"
								class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
								<i class="fa fa-file-invoice-dollar mr-4"></i> 
								<span class="ml-1">Hóa đơn</span>
							</a>
						</li>

						<li>
							<a href="{{ route('admin.khachhang.index') }}"
								class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-blue-700 hover:text-blue-600 hover:bg-gray-200 bg-gray-200">
								<i class="fa fa-users-cog mr-4"></i> 
								Khách hàng
							</a>
						</li>

						<li>
							<a href="{{ route('admin.hangsanxuat.index') }}"
								class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
								<i class="fa fa-city mr-4"></i> 
								Hãng sản xuất
							</a>
						</li>

						<li>
							<a href="{{ route('admin.giaodich.index') }}"
								class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
								<i class="fa fa-cogs mr-4"></i> 
								Giao dịch
							</a>
						</li>
					</ul>
				</div> 
			</div> 
		</div> 
		<div class="bg-white w-64 min-h-screen overflow-y-auto hidden md:block shadow relative z-30"> 
			<div class="flex items-center px-6 py-3 h-16">
				<div class="text-2xl font-bold tracking-tight text-gray-800">Shop Admin</div>
			</div> 
			<div class="px-4 py-2">  
				<ul>
					<li>
						<a href="{{ route('admin.baocao.index') }}"
							class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
							<i class="fa fa-house-damage mr-4"></i>
							Trang chủ
						</a>
					</li>

					<li>
						<a href="{{ route('admin.sanpham.index') }}"
							:class="segmentUrl === 'sanpham' ? 'text-blue-600 bg-gray-200' : ''"
							class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
							<i class="fa fa-cube mr-4"></i>
							Sản phẩm
						</a>
					</li>

					<li>
						<a href="{{ route('admin.hoadon.index') }}"
							:class="segmentUrl === 'hoadon' ? 'text-blue-600 bg-gray-200' : ''"
							class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
							<i class="fa fa-file-invoice-dollar mr-4"></i> 
							<span class="ml-1">Hóa đơn</span>
						</a>
					</li>

					<li>
						<a href="{{ route('admin.khachhang.index') }}"  
							:class="segmentUrl === 'khachhang' ? 'text-blue-600 bg-gray-200' : ''"
							class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium  hover:text-blue-600 hover:bg-gray-200 ">
							<i class="fa fa-users-cog mr-4"></i> 
							Khách hàng
						</a>
					</li>

					<li>
						<a href="{{ route('admin.hangsanxuat.index') }}"
							:class="segmentUrl === 'hangsanxuat' ? 'text-blue-600 bg-gray-200' : ''"
							class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
							<i class="fa fa-city mr-4"></i> 
							Hãng sản xuất
						</a>
					</li>

					<li>
						<a href="{{ route('admin.giaodich.index') }}" 
							class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
							<i class="fa fa-cogs mr-4"></i> 
							Giao dịch
						</a>
					</li>
				</ul> 
			</div>
		</div> 
		<div class="flex-1 flex-col relative z-0 overflow-y-auto">
			<div class="px-4 md:px-8 py-2 h-16 flex justify-between items-center shadow-sm bg-white">
				<div class="flex items-center w-2/3">
					<input class="bg-gray-200 focus:outline-none focus:shadow-outline focus:bg-white border border-transparent focus:border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal hidden md:block placeholder-gray-700 mr-10" type="text" placeholder="Search...">

					<div class="p-2 rounded-full hover:bg-gray-200 cursor-pointer md:hidden" @click="sidemenu = !sidemenu">
						<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600"
							width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
							fill="none" stroke-linecap="round" stroke-linejoin="round">
							<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
							<line x1="4" y1="6" x2="20" y2="6" />
							<line x1="4" y1="12" x2="20" y2="12" />
							<line x1="4" y1="18" x2="20" y2="18" />
						</svg>
					</div>
					<div class="text-xl font-bold tracking-tight text-gray-800 md:hidden ml-2">Dashing Admin.</div>
				</div>
				<div class="flex items-center">
					 
					<a href="#" class="text-gray-500 p-2 rounded-full hover:text-blue-600 hover:bg-gray-200 cursor-pointer mr-4">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
							<path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
							<path d="M9 17v1a3 3 0 0 0 6 0v-1" />
						</svg>						  
					</a>
					 
					<div class="relative" x-data="{ open: false }">
						<div @click="open = !open"
							class="cursor-pointer font-bold w-10 h-10 bg-blue-200 text-blue-600 flex items-center justify-center rounded-full">
							DA
						</div>

						<div x-show.transition="open" @click.away="open = false"
							class="absolute top-0 mt-12 right-0 w-48 bg-white py-2 shadow-md border border-gray-100 rounded-lg z-40">
							<a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Edit
								Profile</a>
							<a href="#"
								 class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Account
								Settings</a>
							<a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Sign
								Out</a>
						</div>
					</div>
				</div>
			</div>
		 
			<div class="p-2"> 
				@yield('content')
			</div>
		</div>
	</div>
</body>
</html>