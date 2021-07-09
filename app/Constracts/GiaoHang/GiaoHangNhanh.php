<?php

namespace App\Constracts\GiaoHang;

use App\Gateway\GiaoHang\GiaoHangNhanhGateway;

class GiaoHangNhanh implements GiaoHangNhanhGateway
{
    public function fee()
    {
        return 121;
    }
}