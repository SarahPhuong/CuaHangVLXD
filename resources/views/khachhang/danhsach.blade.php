@extends('master')

@section('content')
<div class="content-box"> 
	<div class="box-header clear"> 
		<ul class="tabs clear"> 
			<li><a href="#data-table">Danh sách</a></li> 
		</ul> 
		
		<h2>Khách hàng</h2>

	</div> 
	
	<div class="box-body clear"> 
		<!-- TABLE --> 
		<div id="data-table"> 
			<h1 style="text-align: center">Danh sách khách hàng</h1>
		
			<form method="post" action=""> 
			
				<table class="datatable"> 
				<thead> 
					<tr> 
						<th class="bSortable"><input type="checkbox" class="checkbox select-all" style="display: none"/></th> 
						<th>Mã khách hàng</th> 
						<th>Tên khách hàng</th> 
						<th>Số điện thoại</th>
						<th>Email</th>
						<th>Địa chỉ</th>
						<th>Hành động</th>
				<tbody> 
					@foreach($khachhang as $kh)
					<tr> 
						<td><input type="checkbox" class="checkbox" style="display: none"/></td> 
						<td>{{$kh->MaKH}}</td> 
						<td>{{$kh->TenKH}}</td> 
						<td>{{$kh->SoDienThoai}}</td>
						<td>{{$kh->Email}}</td>
						<td>{{$kh->DiaChi}}</td>
						<td >
							<a href="khachhang-sua-{{$kh->MaKH}}"><img src="asset_admin/images/ico_edit_16.png" class="icon16 fl-space2" alt="" title="sửa" /></a>
							<a href="khachhang-themdh-{{$kh->MaKH}}"><i class="fa fa-plus" title="thêm"></i></a>
						</td> 
					</tr> 
	                @endforeach                      
					
				</tbody> 
				</table> 
				
				<div class="tab-footer clear fl"> 
					<div class="fl"> 
						<select name="dropdown" class="fl-space" style="display: none"> 
							<option value="option1">choose action...</option> 
							<option value="option2">Edit</option> 
							<option value="option3">Delete</option> 
						</select> 
						<input style="display:none;margin-left: 0px;margin-top: 0px;padding: 3px 10px 3px 10px;" type="submit" value="Apply" id="submit1" class="submit fl-space" /> 
						<label for="">Tổng khách hàng:<span style="font-weight: bold"> {{$tongKH}}</span></label><br>
					</div> 
				</div> 
			</form> 
		</div><!-- /#data-table --> 
		
		<!-- Custom Forms --> 
	</div> <!-- end of box-body --> 
</div> <!-- end of content-box -->

@endsection