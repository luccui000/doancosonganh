<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'redirect' => env('FACEBOOK_REDIRECT_URL'),
    ],
    'google' => [
        'client_id' => '511988970496-t7k51njp2t690pn4epmm80ef00dif6c4.apps.googleusercontent.com',
        'client_secret' => 'MVdOD_a9CWFKRGb7lDoRDvug',
        'redirect' => 'http://localhost:8000/google/callback',
    ],
    'giaohangnhanh' => [
        'token' => env('GIAOHANGNHANH_TOKEN'),
        'shop_id' => env('GIAOHANGNHANH_SHOP_ID'),
        'from_province_id' => env('GIAOHANGNHANH_FROM_PROVINCE_ID'),
        'from_district_id' => env('GIAOHANGNHANH_FROM_DISTRICT_ID'),
        'api_get_province' => 'https://dev-online-gateway.ghn.vn/shiip/public-api/master-data/province',
        'api_get_district' => 'https://dev-online-gateway.ghn.vn/shiip/public-api/master-data/district',
        'api_get_ward' => 'https://dev-online-gateway.ghn.vn/shiip/public-api/master-data/ward',
    ],
];
