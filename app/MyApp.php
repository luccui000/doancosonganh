<?php 
namespace App;

class MyApp {  
    const LOAI_SAN_PHAM = [
        'MAYTINH_MAYCHU' => 1,
        'MAYTINHXACHTAY_LAPTOP' => 2,
        'MAYIN_TBVANPHONG' => 3,
        'LINHKIENMAYTINH' => 4,
        'MANHINHMAYTINH' => 5,
        'THIETBILUUTRU' => 6,
        'DIENTHOAIDIDONG' => 7,
    ];
    const MA_LOAI_SAN_PHAM = ['MM', 'ML', 'TB', 'LK', 'MH', 'LT', 'DT'];
    const UNDEFINE_IMAGE = 'storage/undefine.png';
    const THONG_TIN_BAO_HANH = [
        '3' => '3 tháng',
        '6' => '6 tháng',
        '9' => '9 tháng',
        '12' => '12 tháng',
        '24' => '24 tháng',
        '36' => '36 tháng',
        '0' => 'Bảo hành theo từng linh kiện',
    ];
}