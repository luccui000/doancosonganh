<?php

namespace Database\Seeders;

use App\MyApp;
use App\Models\SanPham;
use App\Models\HangSanXuat;
use App\Models\LoaiSanPham;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        HangSanXuat::insert([
            'id' => 1,
            'ten_hang' => 'Dell',
            'dia_chi' => '126 Hai Bà Trưng, Quận 1, Tp Hồ Chí Minh',
            'email' => 'dell@gmail.com',
            'dien_thoai' => '0399942301',
            'website' => 'https://www.dell.com.vn', 
            'trang_thai' => 1,
        ]);
        HangSanXuat::insert([
            'id' => 2,
            'ten_hang' => 'Asus',
            'dia_chi' => '127 Lý Tự Trọng, Quận 1, Tp Hồ Chí Minh',
            'email' => 'asus@gmail.com',
            'dien_thoai' => '0399942303',
            'website' => 'https://www.asus.com.vn', 
            'trang_thai' => 1,
        ]);
        HangSanXuat::insert([
            'id' => 3,
            'ten_hang' => 'Microsoft',
            'dia_chi' => '274 Đồng Khởi, Quận 5, Tp Hồ Chí Minh',
            'email' => 'micrsoft@gmail.com',
            'dien_thoai' => '0399942304',
            'website' => 'https://www.microsoft.com.vn', 
            'trang_thai' => 1,
        ]);
        LoaiSanPham::insert([
            'id' => 1,
            'ten_loai_sanpham' => 'Máy tính - Máy chủ'
        ]);
        LoaiSanPham::insert([
            'id' => 2,
            'ten_loai_sanpham' => 'Máy tính xách tay - Laptop'
        ]);
        LoaiSanPham::insert([
            'id' => 3,
            'ten_loai_sanpham' => 'Máy in - TB Văn phòng'
        ]);
        LoaiSanPham::insert([
            'id' => 4,
            'ten_loai_sanpham' => 'Linh kiện máy tính'
        ]);
        LoaiSanPham::insert([
            'id' => 5,
            'ten_loai_sanpham' => 'Màn hình máy tính'
        ]);
        LoaiSanPham::insert([
            'id' => 6,
            'ten_loai_sanpham' => 'Thiết bị lưu trữ'
        ]);
        LoaiSanPham::insert([
            'id' => 7,
            'ten_loai_sanpham' => 'Điện thoại di động'
        ]);
        SanPham::insert([
            'ma_sanpham' => MyApp::MA_LOAI_SAN_PHAM[1] . str_pad(1, 4, '0', STR_PAD_LEFT),
            'id' => 1,
            'ten_sanpham' => 'Microsoft Surface Go (Core i5 | 8GB | 128GB | Intel UHD | 12.4 inch | Win 10) ', 
            'duong_dan_lien_ket' => tieng_viet_khong_dau('Microsoft Surface Go (Core i5 | 8GB | 128GB | Intel UHD | 12.4 inch | Win 10) ',). '_id' . rand(1000, 9999),
            'thong_tin_khuyen_mai' => 'Giá FLASH SALE: 17,990,000đ (Không áp dụng cùng CTKM khác)',
            'chi_tiet_thong_so' => 'CPU: Intel® Core i5 RAM: 8GB Ổ cứng: 128GB SSD VGA: Intel® UHD Graphics Màn hình: 12.4 inch - Cảm ứng Cân nặng: 1,1kg OS: Windows 10 ',
            'bao_hanh' => '12',
            'gia_nhap' => 18000000,
            'gia_niem_yet' => 19900000,
            'gia_khuyen_mai' => 18900000,
            'trang_thai' => 1,
            'so_luong_ton_kho' => 10,

            'hangsanxuat_id' => 3,
            'loaisanpham_id' => 2,
        ]);
        SanPham::insert([
            'ma_sanpham' => MyApp::MA_LOAI_SAN_PHAM[1] . str_pad(2, 4, '0', STR_PAD_LEFT),
            'id' => 2,
            'ten_sanpham' => 'Laptop MSI GF63 Thin 10SCXR 020VN (I7-10750H/ RAM 8GB/ 512GB SSD/ GTX 1650/ 15.6 inch FHD/ Win 10/ Đen) ', 
            'duong_dan_lien_ket' => tieng_viet_khong_dau('Laptop MSI GF63 Thin 10SCXR 020VN (I7-10750H/ RAM 8GB/ 512GB SSD/ GTX 1650/ 15.6 inch FHD/ Win 10/ Đen) ',). '_id' . rand(1000, 9999),
            'thong_tin_khuyen_mai' => 'Pin sạc dự phòng Recci King 12.000mAh trị giá 690.000đ (XADP0028)
                ✦   Balo MSI Stealth Trooper Backpack trị giá 2.990.000đ (TUNB0092)
                ✦ Chuột máy tính không dây AP2021(MUKH0061) hoặc Chuột không dây Konig KM919 (MUKM0021)
                ✦ Bộ vệ sinh laptop (BOVS0001)
                ✦ Bàn di chuột KM (BDRZ0003) ',
            'chi_tiet_thong_so' => 'CPU: Intel® Core™ I7-10750H (2.60GHz upto 5.00GHz, 12MB) RAM: 8GB(8GBx1) DDR4-3200Mhz (2 khe, tối đa 64GB) Ổ cứng: 512GB NVMe PCIe M2 SSD + 1x2.5"(HDD/SSD) VGA: NVIDIA® GeForce GTX 1650 Max Q 4GB GDDR6 Màn hình: 15.6 inch FHD (1920x1080), IPS-Level Pin: 3 Cell 51 Whr Cân nặng: 1.86 kg Tính năng: Đèn nền bàn phím Màu sắc: Đen OS: Windows 10 Home ',
            'bao_hanh' => '12',
            'gia_nhap' => 21000000,
            'gia_niem_yet' => 22999000,
            'gia_khuyen_mai' => 21999000,
            'trang_thai' => 1,
            'so_luong_ton_kho' => '20',

            'hangsanxuat_id' => 3,
            'loaisanpham_id' => 2,
        ] );
        SanPham::insert([
            'ma_sanpham' => MyApp::MA_LOAI_SAN_PHAM[1] . str_pad(3, 4, '0', STR_PAD_LEFT),
            'id' => 3,
            'ten_sanpham' => 'Laptop Acer Nitro 5 AMD AN515-45-R9SC NH.QBRSV.001 (Ryzen 7-5800H | 8GB | 512GB | RTX TM 3070 8GB | 15.6 inch FHD | Win 10 | Đen) ',
            'duong_dan_lien_ket' => tieng_viet_khong_dau('Laptop Acer Nitro 5 AMD AN515-45-R9SC NH.QBRSV.001 (Ryzen 7-5800H | 8GB | 512GB | RTX TM 3070 8GB | 15.6 inch FHD | Win 10 | Đen) '). '_id' . rand(1000, 9999),
            'thong_tin_khuyen_mai' => '   ✦Hỗ trợ nâng cấp Bộ nhớ lên 16GB DDR4 (RALE0002) với giá 1090.000vnđ.
            ✦Balo Gaming Predator Acer SUV trị giá 1.700.000đ (TUNB0061) 
            ✦ Pin Sạc dự phòng 12000 mah Trị giá 690k (XADP0029,XADP0030))
            ✦ Tặng Bộ vệ sinh laptop (BOVS0001)
            ✦ Tặng Bàn di chuột (BDRZ0003',
            'chi_tiet_thong_so' => 'CPU: AMD Ryzen™ 7-5800H (3.3GHz upto 4.4GHz, 16MB) RAM: 8GB DDR4 3200Mhz khe rời (2 khe, tối đa 32GB) Ổ cứng: 512GB PCIe NVMe SSD (nâng cấp tối đa 2 TB SSD và 2TB HDD) VGA: NVIDIA® GeForce® RTX TM 3070 8GB GDDR6 Màn hình: 15.6 inch FHD(1920 x 1080) IPS 144Hz slim bezel LCD Pin: 57 Wh, 4-cell Cân nặng: 2.2 kg Tính năng: Đèn nền bàn phím Màu sắc: Đen OS: Windows 10 Home ',
            'bao_hanh' => '12',
            'gia_nhap' => 38000000,
            'gia_niem_yet' => 39999000,
            'gia_khuyen_mai' => 38999000,
            'trang_thai' => 1,
            'so_luong_ton_kho' => 10,

            'hangsanxuat_id' => 2,
            'loaisanpham_id' => 2,
        ]);
        SanPham::insert([
            'ma_sanpham' => MyApp::MA_LOAI_SAN_PHAM[1] . str_pad(4, 4, '0', STR_PAD_LEFT),
            'id' => 4,
            'ten_sanpham' => 'Laptop Lenovo Legion 5 15ARH05H 82B100BJVN (Ryzen 7-4800H | 8GB | 512GB | GTX 1660 Ti 6GB | 15.6 inch FHD | Win 10 | Đen) ',
            'duong_dan_lien_ket' => tieng_viet_khong_dau('Laptop Lenovo Legion 5 15ARH05H 82B100BJVN (Ryzen 7-4800H | 8GB | 512GB | GTX 1660 Ti 6GB | 15.6 inch FHD | Win 10 | Đen) '). '_id' . rand(1000, 9999),
            'thong_tin_khuyen_mai' => '   ✦ Pin Sạc dự phòng 12000 mah Trị giá 690k (XADP0029,XADP0030)
            ✦ Balo Lenovo Legion 15.6-inch Recon Gaming Backpack_GX40S69333 (TUNB0082)
            ✦ Chuột Gaming cao cấp (MUKH0020)
            ✦ Đế tản nhiệt Laptop trị giá: 179.000 vnđ (DEKH0008 )
            ✦ Bàn di chuột (BDRZ0003)
            ✦ Bộ vệ sinh laptop (BOVS0001) ',
            'chi_tiet_thong_so' => 'CPU: AMD Ryzen™ 7-4800H (2.90GHz upto 4.20GHz, 8MB) RAM: 8GB(1x 8GB) SO-DIMM DDR4-3200Mhz (2 khe, tối đa 32GB) Ổ cứng: 512GB SSD M.2 2280 PCIe 3.0x4 NVMe + Empty HDD Bay VGA: NVIDIA GeForce GTX 1660 Ti 6GB GDDR6 Màn hình: 15.6 inch FHD (1920x1080) IPS 300nits Anti-glare, 144Hz, 100% sRGB, Dolby Vision, DC dimmer Pin: 4Cell, 60WH Cân nặng: 2.46 kg Màu sắc: Đen OS: Windows 10 Home ',
            'bao_hanh' => '24',
            'gia_nhap' => 27000000,
            'gia_niem_yet' => 29999000,
            'gia_khuyen_mai' => 27999000,
            'trang_thai' => 1,

            'so_luong_ton_kho' => 10,
            'hangsanxuat_id' => 1,
            'loaisanpham_id' => 2,
        ]);
        SanPham::insert([
            'ma_sanpham' => MyApp::MA_LOAI_SAN_PHAM[1] . str_pad(5, 4, '0', STR_PAD_LEFT),
            'id' => 5,
            'ten_sanpham' => ' Laptop Dell Inspiron 15 N3505 Y1N1T1 ',
            'duong_dan_lien_ket' => tieng_viet_khong_dau(' Laptop Dell Inspiron 15 N3505 Y1N1T1 '). '_id' . rand(1000, 9999),
            'thong_tin_khuyen_mai' => ' Pin sạc dự phòng Recci King 12.000mAh trị giá 690.000đ (XADP0028)
            ✦ Túi cho máy Notebook (TUNB0009)
            ✦ Chuột máy tính không dây AP2021(MUKH0061) hoặc Chuột không dây Konig KM919 (MUKM0021)
            ✦ Túi chống sốc 15.6"(TUNB0001)
            ✦ Bộ vệ sinh laptop (BOVS0001)
            ✦ Bàn di chuột (BDRZ0003 ',
            'chi_tiet_thong_so' => 'CPU: AMD Ryzen™ 3-3250U (2.60GHz upto 3.50GHz, 4MB) RAM: 8GB (4GBx2) DDR4 3200Mhz( 2 Khe) Ổ cứng: 256GB M.2 PCIe NVMe SSD + 1 slot 2.5"(HDD/SSD) VGA: AMD Radeon™ Graphics Màn hình: 15.6 inch FHD (1920 x 1080) Anti-glare LED Backlight Pin: 3 Cell, 42WHr Cân nặng: 1.83kg Màu sắc: Đen OS: Windows 10 SL ',
            'bao_hanh' => '12',
            'gia_nhap' => 13000000,
            'gia_niem_yet' => 14999000,
            'gia_khuyen_mai' => 13999000,
            'trang_thai' => 1,

            'so_luong_ton_kho' => 20,
            'hangsanxuat_id' => 2,
            'loaisanpham_id' => 2,
        ]);
        SanPham::insert([
            'ma_sanpham' => MyApp::MA_LOAI_SAN_PHAM[0] . str_pad(6, 4, '0', STR_PAD_LEFT),
            'id' => 6,
            'ten_sanpham' => ' PC Gaming-Máy tính chơi game PCAP Hela 3.0 ',
            'duong_dan_lien_ket' => tieng_viet_khong_dau(' PC Gaming-Máy tính chơi game PCAP Hela 3.0 '). '_id' . rand(1000, 9999),
            'thong_tin_khuyen_mai' => 'Tặng thẻ bảo hành 12 tháng tại nơi sử dụng trị giá 290.000 VNĐ (phạm vi 15km, tối đa 5 lần, THED0016)
            - Giá SỐC, không áp dụng cùng hoặc cộng dồn với các CTKM khác
            - Giảm giá lên tới 1.000.000đ khi mua cùng màn hình:',
            'chi_tiet_thong_so' => 'Hình ảnh chỉ mang tính chất minh họa CPUA0033 - CPU AMD Ryzen 5 3600 TNCP0191 - Tản nhiệt CPU Cooler Master HYPER 212 SPECTRUM MAAS0204 - Mainboard ASUS TUF GAMING B550-PLUS RAPN0001 x 2 - Ram PNY XLR8 Gaming 16GB (2x8GB) DDR4 3200MHz VGAS0241 - VGA ASUS TUF Gaming GeForce RTX 3060 OC OCGI0008 - SSD GIGABYTE M2 2280 256GB NVMe PCI-Express 3.0 x4 NGCM0078 - Nguồn Cooler Master Elite V3 230V PC700 700W CAAT0017 / CAAT0026 - Vỏ case ANTEC NX300 ARGB Đen hoặc Trắng TNCP0218 x 2 - Fan Case Xigmatek GALAXY III ROYAL BR120 ARGB (EN46119) x 2 kit (tổng 6 fan)  ',
            'bao_hanh' => 'Theo tung linh kien',
            'gia_nhap' => 37000000,
            'gia_niem_yet' => 41999000,
            'gia_khuyen_mai' => 37999000,
            'trang_thai' => 1,

            'so_luong_ton_kho' => 5,
            'hangsanxuat_id' => 2,
            'loaisanpham_id' => 1,
        ]);
        SanPham::insert([
            'ma_sanpham' => MyApp::MA_LOAI_SAN_PHAM[0] . str_pad(7, 4, '0', STR_PAD_LEFT),
            'id' => 7,
            'ten_sanpham' => ' Mini PC Intel NUC NUC10i5FNH ',
            'duong_dan_lien_ket' => tieng_viet_khong_dau(' Mini PC Intel NUC NUC10i5FNH '). '_id' . rand(1000, 9999),
            'thong_tin_khuyen_mai' => '
            TẶNG KÈM
            + Tặng ngay bộ bàn phím chuột Logitech MK120 
            ƯU ĐÃI
            + Giảm giá 100.000đ vào máy khi mua kèm RAM hoặc ổ cứng
            + Giảm giá 100.000đ vào phần mềm khi mua kèm bản quyền Window 10 Pro (PMWD0004)
            + Giảm giá 50.000đ vào gói bảo hành khi mua kèm gói bảo hành mở rộng  
            Giá tốt hơn khi mua số lượng lớn (Vui lòng liên hệ nhân viên kinh doanh để biết thêm chi tiết)
            ',
            'chi_tiet_thong_so' => 'CPU: Intel Core i5-10210U (1.6 Upto 4.2GHz, 4 nhân 8 luồng, 6MB) RAM: 2 khe x DDR4-2666MHz SODIMM Slots (Up to 64GB) Ổ cứng: 2 ổ lưu trữ, kích thước 2.5, M.2 VGA: UHD Graphics Hệ điều hành: PC DOS Kết nối mạng: Wlan + Bluetooth ',
            'bao_hanh' => '36',
            'gia_nhap' => 10000000,
            'gia_niem_yet' => 10900000,
            'gia_khuyen_mai' => 9700000,
            'trang_thai' => 1,

            'so_luong_ton_kho' => 5,
            'hangsanxuat_id' => 2,
            'loaisanpham_id' => 1,
        ]);
        SanPham::insert([
            'ma_sanpham' => MyApp::MA_LOAI_SAN_PHAM[0] . str_pad(8, 4, '0', STR_PAD_LEFT),
            'id' => 8,
            'ten_sanpham' => ' Máy tính đồng bộ Dell Vostro 3681 SFF STI31501W-4G-1T /Core i3/4Gb/1Tb/Windows 10 home ',
            'duong_dan_lien_ket' => tieng_viet_khong_dau(' Máy tính đồng bộ Dell Vostro 3681 SFF STI31501W-4G-1T /Core i3/4Gb/1Tb/Windows 10 home '). '_id' . rand(1000, 9999),
            'thong_tin_khuyen_mai' => ' 
                ✦ Mua 15 máy PC đồng bộ ( HP, Dell, Lenovo) tặng 01 máy in laser Canon 161DN trị giá 5.000.000VNĐ
                ✦ Mua 10 máy PC đồng bộ ( HP, Dell, Lenovo) tặng phiếu mua hàng 3.000.000VNĐ khi mua máy in canon laser 161DN 
                ✦ Mua 5 máy PC đồng bộ ( HP, Dell, Lenovo) tặng phiếu mua hàng 1.500.000VNĐ khi mua máy in canon laser 161DN 
                ✦ Giảm lên tới 1.000.000VNĐ cho màn hình LCD khi mua cùng PC nguyên bộ (Xem chi tiết)  
                ✦ Ưu đãi mua cùng Loa máy vi tính Creative SBS A35 chỉ với giá 190.000 VNĐ 
                ✦ Ưu đãi mua thêm RAM 4GB chỉ với giá 480.000 VNĐ - RADA0007 
                ✦ Ưu đãi nâng cấp SSD 128GB Nvme chỉ với giá 590.000 VNĐ - OCGI0010 
                ✦ Ưu đãi giảm 10% khi mua ổ cắm điện thông minh thương hiệu Nhật Bản 
            ',
            'chi_tiet_thong_so' => 'CPU: Intel Core i3-10100 (3.60GHz Upto 4.30GHz, 4 Cores 8 Threads, 6MB Cache) RAM: 4GB (4Gx1) DDR4 2666MHz ( 2 Khe cắm Hỗ trợ tối đa 32GB ) Ổ cứng: 1TB 7200rpm (1 x M.2 NVMe SSD) VGA: Intel® UHD Graphics 630 Kết nối mạng: Wlan + Bluetooth Ổ đĩa: Non DVD Hệ điều hành: Windows 10 SL ',
            'bao_hanh' => '12',
            'gia_nhap' => 10000000,
            'gia_niem_yet' => 10900000,
            'gia_khuyen_mai' => 10700000,
            'trang_thai' => 1,

            'so_luong_ton_kho' => 10,
            'hangsanxuat_id' => 2,
            'loaisanpham_id' => 1,
        ]);
        SanPham::insert([
            'ma_sanpham' => MyApp::MA_LOAI_SAN_PHAM[2] . str_pad(9, 4, '0', STR_PAD_LEFT),
            'id' => 9,
            'ten_sanpham' => ' Máy in EPSON L1110 máy In phun màu ',
            'duong_dan_lien_ket' => tieng_viet_khong_dau(' Máy in EPSON L1110 máy In phun màu '). '_id' . rand(1000, 9999),
            'thong_tin_khuyen_mai' => '   ',
            'chi_tiet_thong_so' => 'Loại máy in : Máy in màu Khổ giấy tối đa : A4 Độ phân giải : 5760x1440 dpi. Kết nối: USB Tốc độ in chuẩn : 10 trang trắng đen /phút Tốc độ in màu: 5 trang màu /phút. Tốc độ in ảnh : 69 giây / ảnh (tiêu chuẩn). ',
            'bao_hanh' => '12',
            'gia_nhap' => 3500000,
            'gia_niem_yet' => 3999000,
            'gia_khuyen_mai' => 3650000,
            'trang_thai' => 1,

            'so_luong_ton_kho' => 10,
            'hangsanxuat_id' => 1,
            'loaisanpham_id' => 3,
        ]);
        SanPham::insert([
            'ma_sanpham' => MyApp::MA_LOAI_SAN_PHAM[2] . str_pad(10, '0', STR_PAD_LEFT),
            'id' => 10,
            'ten_sanpham' => ' Máy chấm công vân tay và thẻ từ bàn phím cảm ứng Suprema BioStation 2 BS2-OEPW ',
            'duong_dan_lien_ket' => tieng_viet_khong_dau(' Máy chấm công vân tay và thẻ từ bàn phím cảm ứng Suprema BioStation 2 BS2-OEPW '). '_id' . rand(1000, 9999),
            'thong_tin_khuyen_mai' => ' Tặng Balo Rivacase 8065 (TUNB0099) trị giá 799.000 đến 30/06/2021
            ✦ Tặng công lắp máy khi khách có sẵn đường mạng và đường điện
            ✦ Tặng công cài đặt máy
            ✦ Cấp key phần mềm miễn phí kèm máy chấm công
            ✦ Bảo hành phần mềm trọn đời
            ',
            'chi_tiet_thong_so' => 'BioStation 2BS2-OEPW cung cấp dung lượng bộ nhớ lớn để xử lý số lượng lớn người dùng. Thiết bị có thể quản lý tới 1.000.000 mẫu vân tay Có thể chuyển tới 500.000 người dùng tối đa tương đương với dân số của một khu vực tàu điện ngầm lớn như Miami. Ngoài ra, BioStation 2 có thể chứa tới 3.000.000 nhật ký để sao lưu trong trường hợp mất kết nối với máy chủ để bảo vệ an toàn tất cả các bản ghi. Máy được thiết kế để cung cấp kết hợp và xác thực ngay lập tứ ',
            'bao_hanh' => '12',
            'gia_nhap' => 22000000,
            'gia_niem_yet' => 22999000,
            'gia_khuyen_mai' => 21999000,
            'trang_thai' => 1,

            'so_luong_ton_kho' => 10,
            'hangsanxuat_id' => 1,
            'loaisanpham_id' => 3,
        ]);
        SanPham::insert([
            'ma_sanpham' => MyApp::MA_LOAI_SAN_PHAM[3] . str_pad(11, '0', STR_PAD_LEFT),
            'id' => 11,
            'ten_sanpham' => ' VGA ASUS TUF Gaming GeForce GTX 1660 SUPER 6GB GDDR6 (TUF-GTX1660S-6G-GAMING) ',
            'duong_dan_lien_ket' => tieng_viet_khong_dau(' VGA ASUS TUF Gaming GeForce GTX 1660 SUPER 6GB GDDR6 (TUF-GTX1660S-6G-GAMING) '). '_id' . rand(1000, 9999),
            'thong_tin_khuyen_mai' => ' 
            Do nguồn hàng khan hiếm nên tạm thời sản phẩm này An Phát chỉ bán kèm PC lắp ráp dùng cấu hình sau:
            - CPU i5/ryzen 5 trở lên
            - Mainboard B460/B450 trở lên
            - Ram 8GB trở lên
            - Nguồn 500W trở lên
            - Vỏ case 500k trở lên
            - SSD bất kỳ
            ',
            'chi_tiet_thong_so' => ' Dung lượng bộ nhớ: 6GB GDDR6 Chế độ Chơi Game - Xung Tăng cường GPU : 1785 MHZ , Xung Nền GPU : 1530 MHz Chế độ OC: 1815 MHz (Xung tăng cường) Băng thông: 192-bit Kết nối: HDMI, DVI Nguồn yêu cầu: 450W ',
            'bao_hanh' => '36',
            'gia_nhap' => 11000000,
            'gia_niem_yet' => 15999000,
            'gia_khuyen_mai' => 11000000,
            'trang_thai' => 1,

            'so_luong_ton_kho' => 3,
            'hangsanxuat_id' => 1,
            'loaisanpham_id' => 4,
        ]);
        SanPham::insert([
            'ma_sanpham' => MyApp::MA_LOAI_SAN_PHAM[3] . str_pad(12, '0', STR_PAD_LEFT),
            'id' => 12,
            'ten_sanpham' => ' Bàn phím cơ IKBC CD87 PD Blue switch ',
            'duong_dan_lien_ket' => tieng_viet_khong_dau(' Bàn phím cơ IKBC CD87 PD Blue switch '). '_id' . rand(1000, 9999),
            'thong_tin_khuyen_mai' => '   ',
            'chi_tiet_thong_so' => ' Bàn phím cơ IKBC CD87 PD Blue switch Phiên bản bàn phím cơ mới nhất của hãng Keycap PBD DoubleShot Siêu bền Bàn phím cơ sử dụng công tắc cơ khí Cherry MX Độ bên trên 50 triệu lần bấm Kết cấu vững chắc Cảm giác bấm tuyệt vời Là bàn phím cơ tốt nhất tầm giá dưới 2 triệu đồng ',
            'bao_hanh' => '12',
            'gia_nhap' => 1700000,
            'gia_niem_yet' => 1899000,
            'gia_khuyen_mai' => 1799000,
            'trang_thai' => 1,

            'so_luong_ton_kho' => 10,
            'hangsanxuat_id' => 1,
            'loaisanpham_id' => 4,
        ]);
    }
}
