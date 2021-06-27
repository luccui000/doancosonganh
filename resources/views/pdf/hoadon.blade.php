<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>A simple, clean, and responsive HTML invoice template</title>

        <style>
            body {
                font-family: 'DejaVu Sans'
            } 

            .invoice-box table  {
                width: 100%;
                line-height: inherit;
                text-align: left;
            }
 
 
            .invoice-box h2 {
                text-align: center;
                text-transform: uppercase;
            } 
            .main_table thead tr {
                background-color: #ccc;
                padding: 0;  
            }
            .main_table thead tr th:nth-child(1) {
                border-top-left-radius: 4px;
                padding-left: 4px;
            } 
            .main_table thead tr th:nth-child(6) { 
                border-top-right-radius: 4px;
                text-align: right;
                padding-right: 4px;
            }
        </style>
    </head>

    <body> 
        <div class="invoice-box">
            <h2>Phiếu Giao Hàng</h2> 
            <table>
                <tbody>
                    <td style="float: right; text-align: right;">
                        Mã PX: #{{ $hoadon->id }}<br />
                        Ngày lập: {{ $hoadon->created_at->format('d/m/Y')}}<br />  
                    </td>
                </tbody>
            </table>
            <table>
                <tbody>
                    <tr>
                        <td style="width: 200px;">Khách Hàng: </td>
                        <td style="border-bottom: 1px dashed #ccc">{{ $hoadon->khachhang->ho_ten}}</td>
                    </tr>
                    <tr>
                        <td style="width: 200px">Địa chỉ: </td>
                        <td style="border-bottom: 1px dashed #ccc"> {{ $hoadon->khachhang->dia_chi }}</td>
                    </tr>
                    <tr>
                        <td style="width: 200px">Số điện thoại: </td>
                        <td style="border-bottom: 1px dashed #ccc">{{ $hoadon->khachhang->dien_thoai }}</td>
                    </tr>
                    <tr>
                        <td style="width: 200px">Phương thức thanh toán: </td>
                        <td style="border-bottom: 1px dashed #ccc">Thanh toán khi nhận hàng</td>
                    </tr>
                </tbody> 
            </table> 
            <table style="margin-top: 20px; border-spacing: 0; padding: 1px;" class="main_table" > 
                <thead>
                    <tr> 
                        <th >#</th> 
                        <th style="width: 400px;" >Tên MH</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>  
                        <th>Thành tiền</th>
                    </tr> 
                </thead>
                <tbody>   
                    @foreach ($hoadon->sanpham as $sanpham) 
                        <tr> 
                            <td style="width: 20px;">{{ $sanpham->id }}</td>
                            <td style="width: 90px; text-align: left">{{ $sanpham->ten_sanpham }}</td>
                            <td style="text-align: left; font-size: 15px">{{ $sanpham->pivot->so_luong }}</td>  
                            <td style="text-align: left;font-size: 15px">{{ money_format('%.0n', $sanpham->pivot->don_gia) }}</td>  
                            <td style="text-align: left ;font-size: 15px">{{ money_format('%.0n',$sanpham->pivot->thanh_tien) }}</td>  
                        </tr>  
                    @endforeach
                </tbody>
            </table>
            <table style="margin-top: 10px;">
                <tbody>
                    <tr>
                        <td></td>
                        <td style="border-top: 1px solid #ccc"></td>
                    </tr>
                    <tr>
                        <td style="width: 300px;"></td>
                        <td>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Tổng Tiền Hàng</td>
                                        <td style="text-align: right;">{{ $hoadon->tong_tien_vnd }}</td>
                                    </tr>
                                    <tr>
                                        <td>Giảm giá</td> 
                                        <td style="text-align: right;">0 đ</td>
                                    </tr> 
                                    <tr>
                                        <td>Tổng giá trị đơn hàng </td> 
                                        <td style="text-align: right; font-weight: bold;">{{ $hoadon->tong_thanh_toan_vnd }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="text-align: right; margin-top: 20px;">
                                <tbody>
                                    <tr>
                                        <td>Nguời lập phiếu</td>
                                    </tr>
                                    <tr >
                                        <td style="height: 40px;"></td>
                                    </tr>
                                    <tr>
                                        <td >Administrator</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>