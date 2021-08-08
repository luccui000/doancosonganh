<?php

namespace App\Services;

use App\Gateway\GiaoHang\GiaoHangNhanhGateway;
use Address;
use Illuminate\Support\Facades\Http;

class GiaoHangNhanh implements GiaoHangNhanhGateway
{
    private $token;
    private $headers = [];
    private $shopId;
    private $fromDistrictId;
    private $serviceTypeId;
    private $height;
    private $width;
    private $length;
    private $weight;
    private $insuranceFee;
    private $coupon;
    
    public function __construct(string $token, array $headers, int $shopId, int $fromDistrictId, $serviceTypeId)
    {
        $this->token = $token;
        $this->headers = $headers;
        $this->shopId = $shopId;
        $this->fromDistrictId = $fromDistrictId;
        $this->serviceTypeId = $serviceTypeId;
        $this->height = 50;
        $this->length = 20;
        $this->weight = 200;
        $this->width = 20;
        $this->insuranceFee = 0;
        $this->coupon = "";
    }
    public function phiVanChuyen($districtId, $wardId)
    {  
         
        $response = Http::withHeaders($this->headers)
            ->post('https://dev-online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/fee', [
                'from_district_id' => $this->fromDistrictId,
                'service_id' => 0,
                'service_type_id' => $this->serviceTypeId,
                'to_district_id' => $districtId,
                'to_ward_code' => $wardId,
                'height' => 30,
                'length' => $this->length,
                'weight' => $this->weight,
                'width' => $this->width,
                'insuranceFee' => $this->insuranceFee,
                'coupon' => $this->coupon,
            ]);
        return $response->collect()['data'];
    }
}