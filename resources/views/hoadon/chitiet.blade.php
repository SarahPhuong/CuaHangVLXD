@extends('master')

@section('content')
<div class="content-box"> 
	<div class="box-header clear"> 
		<ul class="tabs clear"> 
			<li><a href="#form"><i class="fa fa-th"></i> Chi tiết</a></li> 
			<li><a href="in-{{$hoadon->MaHD}}" target="_blank" onload="window.print();" ><i class="fa fa-plus" title="thêm"></i> In hóa đơn</a></li>
		</ul> 
		
		<h2 id="text">Hóa đơn</h2> 
	</div> 
	
	<div class="box-body clear">
		<div id="form">
			<h1 style="text-align: center;">Hóa đơn bán hàng số {{$hoadon->MaHD}}</h1>
			<div class="right" style="width: 100%">
				<form action=" " method="post" class="form" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}"> 
					<div class="form-field "> 
						<label for="textfield" class="form-label fl-space2">Tên khách hàng:  <span class="required">*</span></label> 
						<input type="text" id="textfield" class="text fl" name="TenNCC" value="{{$hoadon->khachhang->TenKH}}"  disabled="" style="width: 60%" /> 
					</div><!-- /.form-field -->  
					<div class="form-field "> 
						<label for="textfield" class="form-label fl-space2">Số điện thoại:  <span class="required">*</span></label> 
						<input type="text" id="textfield" class="text fl" name="SoDienThoai" value="{{$hoadon->khachhang->SoDienThoai}}" disabled="" style="width: 60%"  /> 
					</div><!-- /.form-field --> 
					<div class="form-field "> 
						<label for="textfield" class="form-label fl-space2">Email:  <span class="required">*</span></label> 
						<input type="text" id="textfield" class="text fl" name="Email" value="{{$hoadon->khachhang->Email}}" disabled="" style="width: 60%" /> 
					</div><!-- /.form-field --> 
					<div class="form-field "> 
						<label for="textfield" class="form-label fl-space2">Địa chỉ:  <span class="required">*</span></label> 
						<input type="text" id="textfield" class="text fl" name="DiaChi" value="{{$hoadon->khachhang->DiaChi}}" disabled="" style="width: 60%"  /> 
					</div><!-- /.form-field -->
					<table class="datatable" id="t"> 
						<thead> 
							<tr>
								<th>Mã VL</th> 
								<th>Tên VL</th> 
								<th>Giá bán</th>
								<th>Số lượng</th>
								<th>Thành tiền</th>
							</tr>
						</thead>
						<tbody>
						@foreach($chitiet as $ct)
							<tr> 
								<td>{{$ct->MaVL}}</td>
								<td>{{$ct->vatlieu->TenVL}}</td>
								<td>{{number_format(($ct->vatlieu->GiaBan),3,",",".")}} vnđ</td>
								<td>{{$ct->SoLuong}}</td>
								<td>{{number_format(($ct->vatlieu->GiaBan*$ct->SoLuong),3,",",".")}} vnđ</td>
							</tr>  
						@endforeach
						</tbody> 
					</table> 
					<div class="ttr">
						<div class="form-field "> 
							<label for="textfield" class="form-label fl-space2">Tổng tiền: <span class="required">*</span></label> 
							<input type="text" id="tt" class="text fl" name="TongTien" value="{{number_format(($hoadon->TongTien),3,',','.')}} vnđ" disabled="" style="text-align: right;" /> 
						</div><!-- /.form-field --> 
						<div class="form-field "> 
							<label for="textfield" class="form-label fl-space2">Trả trước: <span class="required">*</span></label> 
							<input type="text" id="textfield" class="text fl" name="DaTra" value="{{number_format(($hoadon->DaTra),3,',','.')}} vnđ" disabled=""  style="text-align: right;"/> 
						</div><!-- /.form-field --> 
						<div class="form-field "> 
							<label for="textfield" class="form-label fl-space2">Còn lại: <span class="required">*</span></label> 
							<input type="text" id="textfield" class="text fl" name="ConLai" value="{{number_format(($hoadon->ConLai),3,',','.')}} vnđ" disabled=""  style="text-align: right;"/> 
						</div><!-- /.form-field --> 
						<div class="form-field "> 
							<label for="textfield" class="form-label fl-space2">Trả thêm: <span class="required">*</span></label> 
							<input type="text" id="textfield" class="text fl" name="TraThem" value="0" style="text-align: right;" /> 
						</div><!-- /.form-field --> 
					</div>
					<div class="form-field" style="margin-left: 700px"> 
						<input type="submit" class="submit" id="them" value="Cập nhật hóa đơn"  />
						
					</div><!-- /.form-field -->
				</form> 
			</div><!-- ./right --> 
		</div> 
	</div>

</div> <!-- end of content-box -->
	
@endsection
