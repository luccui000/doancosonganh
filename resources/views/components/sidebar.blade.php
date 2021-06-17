<div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
    <div class="text-sm tracking-widest text-gray-500  focus:outline-none focus:shadow-outline">Tài khoản của <span class="block text-lg text-gray-700">{{ auth()->guard('khachhangs')->user()->ho_ten ?? ""}}</span> </div>
    <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
      <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
      </svg>
    </button>
  </div> 
  <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 @if(request()->segment(1) == "taikhoan") bg-gray-200 @endif rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 hover:no-underline"
        href="{{ route('khachhang.taikhoan') }}">Thông tin tài khoản </a>
    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 @if(request()->segment(1) == "donhang") bg-gray-200 @endif rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 hover:no-underline"
        href="{{ route('khachhang.donhang') }}">Quản lý đơn hàng</a>
    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 @if(request()->segment(1) == "") bg-gray-200 @endif rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 hover:no-underline"
        href="#">Sổ địa chỉ</a>                 
    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 @if(request()->segment(1) == "") bg-gray-200 @endif rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 hover:no-underline"
        href="#">Thông tin thanh toán</a>
  </nav>