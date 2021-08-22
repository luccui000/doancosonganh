<?php

return [
    /**
     * Thanh toan VnPay 
     * Cau hinh 
     */
    'vnpay' => [ 
        'tmp_code' => env('VNP_TMPCODE'),
        'hash_secret' => env('VNP_HASHSECRET'),
        'url' => env('VPN_URL'),
        'return_url' => env('VPN_RETURNURL'),
    ]
];