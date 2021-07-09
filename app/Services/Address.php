<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Address 
{
     
    public function callApiGet($prefix, $query = null)
    {    
        $url = config('services.giaohangnhanh.api_get_' . $prefix);
        if(!is_null($query)) 
            $url .= $query; 
        return $this->province =  Http::withHeaders([ 
            'Content-Type' => 'application/json',
            'token' => config('services.giaohangnhanh.token')
        ])->get($url);
    }
    /**
     * Return Province Address By Request
     *
     * @param [type] $request
     * @return void
     */
    public function getProvince($request)
    {
        $response = $this->callApiGet('province');
        $provinceId = $request->get('province_id');
        $data = $this->toCollect($response)->firstWhere('ProvinceID',  $provinceId); 
        $province = $data['NameExtension'][1];
        
        return $province;
    }
    public function getDistrict($request)
    { 
        $provinceId = $request->get('province_id');
        $districtId = $request->get('district_id'); 
        $response = $this->callApiGet('district', '?province_id='. $provinceId); 
        $data = $this->toCollect($response)->firstWhere('DistrictID',  $districtId)['DistrictName'];  
        
        return $data;
    }
    public function getWard($request)
    { 
        $districtId = $request->get('district_id'); 
        $wardId = $request->get('ward_id');
        $response = $this->callApiGet('ward', '?district_id='. $districtId); 
        $data = $this->toCollect($response)->firstWhere('WardCode',  $wardId)['WardName'];  
        return $data;
    }
    public function toCollect($data)
    {   
        return collect($data->collect()['data']);
    }
}