@extends('master')

@section('content')
<style type="text/css" media="screen">
	.form-field
	{
		float: left;
	}
</style>
<div class="content-box"> 
	<div class="box-header clear"> 
		<h2 id="text">Quản lý công nợ</h2> 
	</div> 
	
	<div class="box-body clear"> 
		<!-- TABLE --> 
		<div id="data-table"> 
			<h1 style="text-align: center">Công nợ khách hàng</h1>
		
			<form method="post" action=""> 
			
				<table class="datatable"> 
				<thead> 
					<tr> 
						<th>Mã hóa đơn</th> 
						<th>Tên khách hàng</th> 
						<th>Ngày mua</th>
						<th>Tổng tiền</th>
						<th>Đã trả</th>
						<th>Còn lại</th>
						<th></th>
				<tbody> 
					@foreach($hoadon as $hd)
					<tr> 
						<td>{{$hd->MaHD}}</td> 
						<td>{{$hd->khachhang->TenKH}}</td> 
						<td>{{$hd->NgayMua}}</td>
						<td>{{number_format(($hd->TongTien),3,",",".")}} vnđ</td>
						<td>{{number_format(($hd->DaTra),3,",",".")}} vnđ</td>
						<td>{{number_format(($hd->ConLai),3,",",".")}} vnđ</td>
						<td >
							<a href="hoadon-chitiet-{{$hd->MaHD}}"><i class="fa fa-eye" title="chi tiết" ></i></a>
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
						<label for="">Tổng hóa đơn:<span style="font-weight: bold"> {{$tongHD}}</span></label><br>
						<label for="">Tổng tiền:<span style="font-weight: bold"> {{number_format(($tongT),3,",",".")}} </span> vnđ</label><br>
						<label for="">Đã trả:<span style="font-weight: bold"> {{number_format(($tongTra),3,",",".")}} </span> vnđ</label>
					</div> 
				</div> 
			</form> 
		</div><!-- /#data-table --> 
	</div> <!-- end of box-body --> 
</div> <!-- end of content-box -->

@endsection