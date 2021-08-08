<nav class="w-72 relative" id="sanpham">
    @foreach (App\Models\LoaiSanPham::all() as $loaisanpham) 
        <a data-toggle="dropdown" class="dropdown flex items-center py-2 px-8 text-gray-600 border-white hover:bg-gray-200 hover:text-gray-700 hover:no-underline hover:border-gray-700">
            {!! $loaisanpham->icon !!}
            <span class="mx-2 font-medium">{{ $loaisanpham->ten_loai_sanpham }}</span>
            <input type="hidden" value="{{ $loaisanpham->id }}">
        </a>
    @endforeach    
</nav>
@push('scripts')
    <script>
        const DEFAULT_NAME_LOCALSTORAGE = 'categoryId';

        $("#sanpham a").hover(function() {
            var categoryId = $(this).children('input').val();
            var key = `${DEFAULT_NAME_LOCALSTORAGE}_${categoryId}`;
            var localProductCategory = getLocalItemByKey(key);
            if(localProductCategory === null) {
                getData(function(data) {
                    localProductCategory = saveToClient(key, data);
                })
            } 
            var template = '<ul>';
            localProductCategory.sanpham.forEach(element => {
                template += `<a href="${element.duong_dan_lien_ket}" > <li>${element.ten_sanpham}</li></a>`;
            });
            template += '</ul>';   
            $("#showProductCategory").empty().append(template);
        })
        function getData(callback) {
            fetch('/api/sanpham/2')
                .then(response => response.text())
                .then(data => callback(data))
        }
        function saveToClient(key, data) { 
            localStorage.setItem(key, data);
            return JSON.parse(data);
        }
        function getLocalItemByKey(key) {  
            var dataSaved = localStorage.getItem(key); 
            return JSON.parse(dataSaved) || null;
        }
    </script>
@endpush