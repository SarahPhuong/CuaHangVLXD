<style>
  body {
    margin: 0;
    padding: 0;
    background-color: #FAFAFA;
    font: 12pt "Tohoma";
}
* {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}
.page {
    width: 21cm;
    overflow:hidden;
    min-height:297mm;
    padding: 2.5cm;
    margin-left:auto;
    margin-right:auto;
    background: white;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
.subpage {
    padding: 1cm;
    border: 5px red solid;
    height: 237mm;
    outline: 2cm #FFEAEA solid;
}
 @page {
 size: A4;
 margin: 0;
}
button {
    width:100px;
    height: 24px;
}
.header {
    overflow:hidden;
}
.logo {
    background-color:#FFFFFF;
    text-align:left;
    float:left;
}
.company {
    text-transform:uppercase;
    background-color:#FFFFFF;
    text-align:right;
    float:right;
    font-size:16px;
}
.title {
    text-align:center;
    position:relative;
    color:#0000FF;
    font-size: 24px;
    top:1px;
}
.footer-left {
    text-align:center;
    text-transform:uppercase;
    padding-top:24px;
    position:relative;
    height: 150px;
    width:50%;
    color:#000;
    float:left;
    font-size: 12px;
    bottom:1px;
}
.footer-right {
    text-align:center;
    text-transform:uppercase;
    padding-top:24px;
    position:relative;
    height: 150px;
    width:50%;
    color:#000;
    font-size: 12px;
    float:right;
    bottom:1px;
}
.TableData {
    background:#ffffff;
    font: 11px;
    width:100%;
    border-collapse:collapse;
    font-family:Verdana, Arial, Helvetica, sans-serif;
    font-size:12px;
    border:thin solid #d3d3d3;
}
.TableData TH {
    background: rgba(0,0,255,0.1);
    text-align: center;
    font-weight: bold;
    color: #000;
    border: solid 1px #ccc;
    height: 24px;
}
.TableData TR {
    height: 24px;
    border:thin solid #d3d3d3;
}
.TableData TR TD {
    padding-right: 2px;
    padding-left: 2px;
    border:thin solid #d3d3d3;
}
.TableData TR:hover {
    background: rgba(0,0,0,0.05);
}
.TableData .cotSTT {
    text-align:center;
    width: 10%;
}
.TableData .cotTenSanPham {
    text-align:left;
    width: 40%;
}
.TableData .cotHangSanXuat {
    text-align:left;
    width: 20%;
}
.TableData .cotGia {
    text-align:right;
    width: 120px;
}
.TableData .cotSoLuong {
    text-align: center;
    width: 50px;
}
.TableData .cotSo {
    text-align: right;
    width: 120px;
}
.TableData .tong {
    text-align: right;
    font-weight:bold;
    text-transform:uppercase;
    padding-right: 4px;
}
.TableData .cotSoLuong input {
    text-align: center;
}
@media print {
 @page {
 margin: 0;
 border: initial;
 border-radius: initial;
 width: initial;
 min-height: initial;
 box-shadow: initial;
 background: initial;
 page-break-after: always;
}
}
</style>

<body onload="window.print();">

    <div id="page" class="page">
    <div class="header">
        <div class="logo"><img src="asset_admin/images/logo_earth.png"/></div>
        <div class="company" style="text-align: right;text-transform: none">
            <h4>CÔNG TY VẬT LIỆU XÂY DỰNG DANH PHÚ</h4>
            Địa chỉ: Số 272-Hùng Vương-Hồ Chí Minh<br>
            Số điện thoại: 0962 929 942<br>
            Email: danhphu@gmail.com<br>
            Mã hóa đơn: {{$hoadon->MaHD}}

        </div>
    </div>
  <br/>
  <div class="title">
        HÓA ĐƠN BÁN HÀNG
        <br/>
        -------oOo-------
  </div>
  <br/>
  <br/>
  <div class="khachhang">
      Tên khách hàng:<b> {{$hoadon->khachhang->TenKH}}</b><br>
      <span style="margin-right: 280px">Địa chỉ: <b>{{$hoadon->khachhang->DiaChi}}</b></span>
      Số điện thoại:<b> {{$hoadon->khachhang->SoDienThoai}}</b>
  </div>
  <br>
  <table class="TableData">
    <tr>
      <th>Mã</th>
      <th>Tên vật liệu</th>
      <th>Số lượng</th>
      <th>Đơn giá</th>
      <th>Thành tiền</th>
    </tr>
    @foreach($chitiet as $ct)
        <tr> 
            <td>{{$ct->MaVL}}</td>
            <td>{{$ct->vatlieu->TenVL}}</td>
            <td>{{$ct->SoLuong}}</td>
            <td style="text-align: right;">{{number_format(($ct->vatlieu->GiaBan),3,",",".")}} vnđ</td>
            <td style="text-align: right;">{{number_format(($ct->vatlieu->GiaBan*$ct->SoLuong),3,",",".")}} vnđ</td>
        </tr>  
    @endforeach
    <tr>
      <td colspan="4" class="tong">Tổng cộng</td>
      <td class="cotSo">{{number_format(($hoadon->TongTien),3,",",".")}} vnđ</td>
    </tr>
    <tr>
      <td colspan="4" class="tong">Trả trước</td>
      <td class="cotSo">{{number_format(($hoadon->DaTra),3,",",".")}} vnđ</td>
    </tr>
    <tr>
      <td colspan="4" class="tong">Chưa thanh toán</td>
      <td class="cotSo">{{number_format(($hoadon->ConLai),3,",",".")}} vnđ</td>
    </tr>
    </table>
  <div class="footer-left"> <br/>
    Người mua hàng <br>(Ký, ghi rõ họ tên)</div> 
  <div class="footer-right"> .........., ngày ...... tháng ..... năm ........<br/>
    Người bán hàng <br>(Ký, ghi rõ họ tên)</div>
</div>
</body>