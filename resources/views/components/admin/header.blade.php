<header class="z-10 py-2 bg-white shadow-md">
  <div class="container-fluid flex items-center justify-between h-full px-6 mx-auto text-purple-600">
      <a id="menu-toggle">Toggle Menu</a> 
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