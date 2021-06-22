<aside class="z-20 hidden w-64 overflow-y-auto bg-gray-50 md:block flex-shrink-0" >
    <div class="py-4 text-gray-500 dark:text-gray-400">
      <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#" >Shop MT </a> 
      <ul class="mt-8">
        @foreach (App\MyApp::SIDEBAR_NAME as $key => $value) 
            <li class="relative px-6 py-3 hover:bg-indigo-100 @if(request()->segment(2) === strtolower($key)) bg-gray-100 @endif">
              @if(request()->segment(2) === strtolower($key))
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" ></span>
              @endif
              @php
                  $url = 'admin.' . strtolower($key) . '.index';  
              @endphp              
              <a class="inline-flex hover:no-underline items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="{{ route($url) }}" >  
                <span class="ml-4">{{ $value }}</span>
              </a>
            </li>
        @endforeach  
      </ul> 
    </div>
</aside>