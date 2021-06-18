<?php

namespace App\Http\Livewire;

use App\MyApp;
use App\Models\SanPham;
use Livewire\Component;
use Illuminate\Support\Facades\Log;


class AdminSearch extends Component
{ 
    public $search;
    public $modelFields = []; 
    public $ketquaTimKiem = [];

    public function mount()
    {
        $this->search = "";
        $this->pageName = "";
        $this->modelFields = array_keys(MyApp::SIDEBAR_NAME);
        $idx = array_search("BaoCao", $this->modelFields);
        unset($this->modelFields[$idx]); 
    }
    public function updateQuery()
    { 
        $query = []; 
        $this->ketquaTimKiem = [];
        foreach($this->modelFields as $key => $model) {
            $modelClass = 'App\\Models\\'. $model; 
            $query = $modelClass::query();
            $timkiems = $modelClass::$timkiem;

            foreach($timkiems as $timkiem) {
                $query->orWhere($timkiem, 'LIKE', '%' . $this->search .'%');
            }         
            $ketqua = $query->take(10)->get(); 
            $formatKetQua = [
                '1' => $model,
                '2' => route('admin.' . strtolower($model) . '.index'),
                '3' => $ketqua
            ];
            $this->ketquaTimKiem[] = $formatKetQua;
        }  
    }
    public function render()
    {
        strlen($this->search) > 0 ? $this->updateQuery() : $this->ketquaTimKiem = []; 
        return view('livewire.admin-search');
    } 
}
