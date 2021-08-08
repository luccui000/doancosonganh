<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Address 
{
    
    private $token;
    private $headers = []; 
    private $shopId;
    private $serviceTypeId;
 
    public function __construct()
    {
        $this->token = config('services.giaohangnhanh.token');
        $this->shopId = config('services.giaohangnhanh.shop_id');
        $this->serviceTypeId = 1; // Đường bộ
        $this->headers = [
            'Content-Type' => 'application/json',
            'token' => $this->token
        ];
    }   
    public function callApiGet($prefix, $query = null)
    {    
        $url = config('services.giaohangnhanh.api_get_' . $prefix);
        if(!is_null($query)) 
            $url .= $query; 
        return $this->province =  Http::withHeaders($this->headers)->get($url);
    }
    /**
     * Get Province name
     *
     * @param [int] $provinceId
     * @return string
     */
    public function getProvince($provinceId)
    {
        $response = $this->callApiGet('province'); 
        $data = $this->toCollect($response)->firstWhere('ProvinceID',  $provinceId); 
        $province = $data['NameExtension'][1];
        
        return $province;
    }
    /**
     * Get district name
     *
     * @param [int] $provinceId
     * @param [int] $districtId
     * @return string
     */
    public function getDistrict($provinceId, $districtId)
    {  
        $response = $this->callApiGet('district', '?province_id='. $provinceId); 
        $data = $this->toCollect($response)->firstWhere('DistrictID',  $districtId)['DistrictName'];  
        
        return $data;
    }
    /**
     *  Get Ward Name
     *
     * @param [int] $districtId
     * @param [int] $wardId
     * @return string
     */
    public function getWard($districtId, $wardId)
    {  
        $response = $this->callApiGet('ward', '?district_id='. $districtId); 
        $data = $this->toCollect($response)->firstWhere('WardCode',  $wardId)['WardName'];  
        return $data;
    }
    public function toCollect($data)
    {   
        return collect($data->collect()['data']);
    } 
}