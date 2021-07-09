<?php

namespace App\Http\Livewire;

use App\Models\Ward;
use Livewire\Component;
use App\Models\District;
use App\Models\Province;
use Illuminate\Support\Facades\Http;

class AddressSelect extends Component
{
    public $provinceSelected;
    public $districtSelected;
    public $wardSelected;
    public $districts = [];
    public $provinces = [];
    public $wards = [];

    public function mount()
    { 
        $response = $this->getData(config('services.giaohangnhanh.api_get_province'));
        $data = $this->toCollect($response);
        $provincesResponse = $data->map(function($value, $key) {
            return [
                'id' => $value['ProvinceID'],
                'name' => $value['ProvinceName'],
            ];
        }); 
        $this->provinces = $provincesResponse; 
    }
    public function render()
    { 
        if(!empty($this->provinceSelected)) {
            $response = $this->getData(config('services.giaohangnhanh.api_get_district') 
                                        .'?province_id=' . $this->provinceSelected);
            $data = $this->toCollect($response);
            $districtResponse = $data->map(function($value, $key) {
                return [
                    'id' => $value['DistrictID'],
                    'name' => $value['DistrictName']
                ];
            }); 
            $this->districts =  $districtResponse;
        }
        
        if (!empty($this->districtSelected)) {
            $response = $this->getData(config('services.giaohangnhanh.api_get_ward') 
                                        .'?district_id=' . $this->districtSelected);
            $data = $this->toCollect($response);
            $wardResponse = $data->map(function($value, $key) {
                return [
                    'id' => $value['WardCode'],
                    'name' => $value['WardName']
                ];
            });
            $this->wards =  $wardResponse;
        }  
        return view('livewire.address-select');
    }
    public function getData($url)
    {
        return Http::withHeaders([ 
            'Content-Type' => 'application/json',
            'token' => config('services.giaohangnhanh.token')
        ])->get($url);
    }
    public function toCollect($data)
    {
        return collect($data->collect()['data']);
    }
}
