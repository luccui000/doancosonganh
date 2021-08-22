<?php

namespace App\Services; 

class ThanhToan 
{
    public function handle($requestId, $amount)
    {
        /**
         * Thong tin thanh toan
         * 
         * Ngân hàng	NCB
         * Số thẻ	9704198526191432198
         * Tên chủ thẻ	NGUYEN VAN A
         * Ngày phát hành	07/15
         * Mật khẩu OTP	123456
         */
        session(['cost_id' => $requestId]);
        session(['url_prev' => url()->previous()]);
        $vnp_TmnCode = config('payment.vnpay.tmp_code');  
        $vnp_HashSecret = config('payment.vnpay.hash_secret'); 
        $vnp_Url = config('payment.vnpay.url');
        $vnp_Returnurl = config('payment.vnpay.return_url');
        $vnp_TxnRef = date("YmdHis"); 
        $vnp_OrderInfo = "Thanh toán hóa đơn mua hàng";
        $vnp_OrderType = 'billpayment';
        // $vnp_Amount =  str_replace('.', '', Cart::total()) * 100;
        $vnp_Amount =  $amount * 100;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();
 
        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
           // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        return $vnp_Url;
    }
}