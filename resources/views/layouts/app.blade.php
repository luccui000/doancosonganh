<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">  
    <style> 
        body {
            font-family: 'Roboto', sans-serif;
			position: relative;
			overflow-x: hidden; 
        }   
		body,
		html { height: 100%;}
		.nav .open > a, 
		.nav .open > a:hover, 
		.nav .open > a:focus {background-color: transparent;}

		/*-------------------------------*/
		/*           Wrappers            */
		/*-------------------------------*/

		#wrapper {
			padding-left: 0;
			-webkit-transition: all 0.5s ease;
			-moz-transition: all 0.5s ease;
			-o-transition: all 0.5s ease;
			transition: all 0.5s ease;
			display: flex;
		}

		#wrapper.toggled {
			padding-left: 240px;
		}

		#sidebar-wrapper {
			z-index: 1000;
			left: 240px;
			width: 0;
			height: 100%;
			margin-left: -240px;
			overflow-y: auto;
			overflow-x: hidden;
			background: #3d3d3d;
			-webkit-transition: all 0.5s ease;
			-moz-transition: all 0.5s ease;
			-o-transition: all 0.5s ease;
			transition: all 0.5s ease;
		}

		#sidebar-wrapper::-webkit-scrollbar {
		display: none;
		}

		#wrapper.toggled #sidebar-wrapper {
			width: 240px;
		}

		#page-content-wrapper {
			width: 100%;
			padding-top: 0px;
			flex: 1;
		}

		#wrapper.toggled #page-content-wrapper {
			position: absolute;
			margin-right: -240px;
		}

		/*-------------------------------*/
		/*     Sidebar nav styles        */
		/*-------------------------------*/
		.navbar {
		padding: 0;
		}

		.sidebar-nav {
			position: absolute;
			top: 0;
			width: 240px;
			margin: 0;
			padding: 0;
			list-style: none;
		}

		.sidebar-nav li {
			position: relative; 
			line-height: 20px;
			display: inline-block;
			width: 100%;
		}

		.sidebar-nav li:before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			z-index: -1;
			height: 100%;
			width: 3px;
			background-color: #1c1c1c;
			-webkit-transition: width .2s ease-in;
			-moz-transition:  width .2s ease-in;
			-ms-transition:  width .2s ease-in;
					transition: width .2s ease-in;

		}
		.sidebar-nav li:hover{
			background: #303030 !important; 
			margin-left: 10px;
			margin-right: 10px;
		}
		.sidebar-nav li:hover:before,
		.sidebar-nav li.open:hover:before {
			width: 100%;
			-webkit-transition: width .2s ease-in;
			-moz-transition:  width .2s ease-in;
			-ms-transition:  width .2s ease-in;
					transition: width .2s ease-in;

		}

		.sidebar-nav li a {
			display: block;
			color: #ddd;
			text-decoration: none;
			padding: 10px 15px 10px 30px;    
		}

		.sidebar-nav li a:hover,
		.sidebar-nav li a:active,
		.sidebar-nav li a:focus,
		.sidebar-nav li.open a:hover,
		.sidebar-nav li.open a:active,
		.sidebar-nav li.open a:focus{
			color: #fff;
			text-decoration: none;
			background-color: transparent;
		}
		.sidebar-header {
			text-align: center;
			font-size: 20px;
			position: relative;
			width: 100%;
			display: inline-block;
		}
		.sidebar-brand { 
			height: 50px;
			position: relative;
			background:#303030; 
			padding-top: 10px;
		}
		.sidebar-brand a {
			color: #ddd;
		}
		.sidebar-brand a:hover {
			color: #fff;
			text-decoration: none;
		} 
		.sidebar-nav .dropdown-menu {
			position: relative;
			width: 100%;
			padding: 0;
			margin: 0;
			border-radius: 0;
			border: none;
			background-color: #222;
			box-shadow: none;
		}
		.dropdown-menu.show {
			top: 0;
		} 
		.hamburger {
			position: fixed;
			top: 10px;  
			z-index: 999;
			display: block;
			width: 32px;
			height: 32px;
			margin-left: 15px;
			background: transparent;
			border: none;
		}
		.hamburger:hover,
		.hamburger:focus,
		.hamburger:active {
			outline: none;
		}
		.hamburger.is-closed:before {
			content: '';
			display: block;
			width: 100px;
			font-size: 14px;
			color: #fff;
			line-height: 32px;
			text-align: center;
			opacity: 0;
			-webkit-transform: translate3d(0,0,0);
			-webkit-transition: all .35s ease-in-out;
		}
		.hamburger.is-closed:hover:before {
			opacity: 1;
			display: block;
			-webkit-transform: translate3d(-100px,0,0);
			-webkit-transition: all .35s ease-in-out;
		}

		.hamburger.is-closed .hamb-top,
		.hamburger.is-closed .hamb-middle,
		.hamburger.is-closed .hamb-bottom,
		.hamburger.is-open .hamb-top,
		.hamburger.is-open .hamb-middle,
		.hamburger.is-open .hamb-bottom {
			position: absolute;
			left: 0;
			height: 4px;
			width: 100%;
		}
		.hamburger.is-closed .hamb-top,
		.hamburger.is-closed .hamb-middle,
		.hamburger.is-closed .hamb-bottom {
		background-color: #1a1a1a;
		}
		.hamburger.is-closed .hamb-top { 
		top: 5px; 
		-webkit-transition: all .35s ease-in-out;
		}
		.hamburger.is-closed .hamb-middle {
		top: 50%;
		margin-top: -2px;
		}
		.hamburger.is-closed .hamb-bottom {
		bottom: 5px;  
		-webkit-transition: all .35s ease-in-out;
		}

		.hamburger.is-closed:hover .hamb-top {
		top: 0;
		-webkit-transition: all .35s ease-in-out;
		}
		.hamburger.is-closed:hover .hamb-bottom {
			bottom: 0;
			-webkit-transition: all .35s ease-in-out;
		}
		.hamburger.is-open .hamb-top,
		.hamburger.is-open .hamb-middle,
		.hamburger.is-open .hamb-bottom {
			background-color: #1a1a1a;
		}
		.hamburger.is-open .hamb-top,
		.hamburger.is-open .hamb-bottom {
			top: 50%;
			margin-top: -2px;  
			}
		.hamburger.is-open .hamb-top { 
			-webkit-transform: rotate(45deg);
			-webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
		}
		.hamburger.is-open .hamb-middle { display: none; }
		.hamburger.is-open .hamb-bottom {
			-webkit-transform: rotate(-45deg);
			-webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
		}
		.hamburger.is-open:before {
			content: '';
			display: block;
			width: 100px;
			font-size: 14px;
			color: #fff;
			line-height: 32px;
			text-align: center;
			opacity: 0;
			-webkit-transform: translate3d(0,0,0);
			-webkit-transition: all .35s ease-in-out;
		}
		.hamburger.is-open:hover:before {
			opacity: 1;
			display: block;
			-webkit-transform: translate3d(-100px,0,0);
			-webkit-transition: all .35s ease-in-out;
		} 

    </style>
    <script src="{{ asset("js/alpine.min.js") }}" ></script>   
    <title>Trang quản trị</title> 
    @stack('styles')
    @livewireStyles 
</head>
<body>  
	<div id="wrapper" class=" toggled">
		<div class="overlay"></div> 
		<nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
			<ul class="nav sidebar-nav">
				<div class="sidebar-header">
					<div class="sidebar-brand">
						<a href="#">TVU</a>
					</div>
				</div>
				<li><a href="#about">Bài đăng</a></li>
				<li><a href="#about">Liên hệ</a></li>
				<li class="dropdown">
					<a href="#works" class="dropdown-toggle"  data-toggle="dropdown">TMDT<span class="caret"></span></a>
					<ul class="dropdown-menu animated fadeInLeft" role="menu"> 
						<li><a href="{{ route('admin.baocao.index') }}">Báo cáo</a></li>
						<li><a href="{{ route('admin.sanpham.index') }}">Sản phẩm</a></li> 
						<li><a href="{{ route('admin.hangsanxuat.index') }}">Hãng sản xuất</a></li>
						<li><a href="{{ route('admin.hoadon.index') }}">Hóa đơn</a></li>
						<li><a href="{{ route('admin.khachhang.index') }}">Khách hàng</a></li>
						<li><a href="{{ route('admin.giaodich.index') }}">Giao dịch</a></li>
					</ul>
				</li>		  
				<li><a href="#followme">Thanh toán</a></li>
				<li><a href="#followme">Cài đặt</a></li>
			</ul>
		 </nav>
		<div id="page-content-wrapper"> 
			<div class="container-fluid">
				<header class="z-10 py-2 bg-white">
					<div class="container-fluid flex items-center justify-between h-full px-6 mx-auto text-purple-600">
						<button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
							<span class="hamb-top"></span>
							<span class="hamb-middle"></span>
							<span class="hamb-bottom"></span>
						</button>
						<div class="flex justify-center flex-1 lg:mr-32">
							<div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
							  <div class="absolute inset-y-0 flex items-center pl-2 right-2">
								<svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
								  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
								</svg>
							  </div>
							  @livewire('admin-search')
							</div>
						</div>  
						<div class="flex">
							<a class="hover:no-underline cursor-pointer inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 text-gray-700" > 
								<svg class="h-6 w-6" fill="none"  viewBox="0 0 24 24" stroke="currentColor">
									<path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
								  </svg>
								<span>Tài khoản</span>
							</a>
						</div> 
					  </div>
				</header>
				<div class="mt-2">
					@yield('content')
				</div>
			</div>
		</div> 
	</div> 
	<script src="{{ asset('js/moment.min.js') }}"></script>  
	<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	@livewireScripts
	<script> 
	$(document).ready(function () {
		var trigger = $('.hamburger'),
			overlay = $('.overlay'),
			isClosed = false;

			trigger.click(function () {
			hamburger_cross();      
			});

			function hamburger_cross() {

			if (isClosed == true) {          
				overlay.hide();
				trigger.removeClass('is-open');
				trigger.addClass('is-closed');
				isClosed = false;
			} else {   
				overlay.show();
				trigger.removeClass('is-closed');
				trigger.addClass('is-open');
				isClosed = true;
			}
		}
		
		$('[data-toggle="offcanvas"]').click(function () {
				$('#wrapper').toggleClass('toggled');
		});  
		});
	</script>
    
    @stack('scripts')
</body>
</html>