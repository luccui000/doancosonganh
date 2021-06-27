<?php

namespace App\Http\Livewire;

use App\Models\SanPham;
use Livewire\Component;

class SearchDropDown extends Component
{
    public $search;
    public $searchSanphams;

    public function mount()
    {
        $this->search = '';
        $this->searchSanphams = [];
    }
    public function updateQuery()
    {
        if(strlen($this->search) > 1) {
            $term = '%'. $this->search . '%';
            $this->searchSanphams = SanPham::query()
                                ->latest()
                                ->where('ten_sanpham', 'like', $term)
                                ->orWhere('ma_sanpham', 'like', $term)
                                ->take(5)->get();
        }  
    }
    public function render()
    { 
        $this->updateQuery();
        return view('livewire.search-drop-down');
    }
}
