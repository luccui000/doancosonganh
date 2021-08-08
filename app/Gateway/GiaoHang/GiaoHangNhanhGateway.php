<?php

namespace App\Gateway\GiaoHang;

interface GiaoHangNhanhGateway
{
    public function phiVanChuyen($districtId, $wardId);
}