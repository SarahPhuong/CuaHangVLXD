@extends('master')
@section('content')
<style>
	.txt{color: #ccc;font-size: 12px;padding-left: 5px;text-align: center;}
	.so{font-weight: bold;color:#fff; font-size: 18px}
	.tile-body{
		float: left;
	}
</style>
<div class="content-box"> 
	<div class="head">
		<div class="tk">
			<div class="tile">
			  	<div class="tile-heading">Tổng số hóa đơn  <span class="pull-right">
			        {{$tonghd}}</span></div>
			  	<div class="tile-body"><i class="fa fa-shopping-cart"></i>
			  	</div>
			  	<h2 class="txt" >Tổng thu: <br><span class="so">{{number_format(($tongthu),3,",",".")}} </span> vnđ</h2>
			  	<h2 class="txt">Tổng nợ: <br><span class="so" style="margin-left: -45px">{{number_format(($tongnoHD),3,",",".")}} vnđ</span> </h2>
			</div>
		</div>
		<!-- ./tk -->
		<div class="tk">
			<div class="tile">
			  	<div class="tile-heading">Tổng số đơn nhập nhàng <span class="pull-right">
			        {{$tongdnh}}</span></div>
			  	<div class="tile-body"><i class="fa fa-credit-card"></i>
			  	</div>
			  	
			  	<h2 class="txt">Tổng chi:<br> <span class="so">{{number_format(($tongchi),3,",",".")}}</span> vnđ</h2>
			  	<h2 class="txt" >Tổng nợ:<br> <span class="so" style="margin-left: -45px">{{number_format(($tongnoDNH),3,",",".")}} vnđ</span> </h2>
			</div>
		</div>
		<!-- ./tk -->
		<div class="tk">
			<div class="tile">
			  	<div class="tile-heading">Thống kê</div>
			  	<div class="tile-body"><i class="fa fa-user"></i></div>
			  	
			  	<h2 class="txt">Tổng KH: <br><span class="so">{{$tongkh}}</span></h2>
			  	<h2 class="txt">Tổng NCC: <br><span class="so">{{$ncc}}</span></h2>
			</div>
		</div>
		<!-- ./tk -->
		<div class="tk">
			<div class="tile">
			  	<div class="tile-heading">Tổng doanh thu </div>
			  	<div class="tile-body"><i class="fa fa-line-chart"></i></div>
			    <h2 class="txt" style="margin-top: 25px"><span class="so">{{number_format(($tongDT),3,",",".")}} </span> vnđ</h2>
			  	
			</div>
		</div>
		<!-- ./tk -->
	</div>
	<div class="clear"></div>
	<div class="bd" style="float: left;position: relative;margin-right: 15px;margin-left: 15px">	
		<div class="map" style="float: left;">
			<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247803.82656850104!2d107.82984617053734!3d13.96248710857005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316c1f82022f81a3%3A0x2234918a6e4ab03a!2sPleiku%2C+Gia+Lai+Province%2C+Vietnam!5e0!3m2!1sen!2s!4v1476610070425" width="350" height="350" frameborder="0" style="border:0" allowfullscreen></iframe> -->
			<img src="asset_admin/images/bando.png" alt="">
		</div>
		<div class="box-body clear" style="width:170%;float:left;background: #fef9e7;margin-left: 15px;margin-right: 15px; position: absolute;right: -660px"> 
			<!-- TABLE --> 
			<div id="data-table"> 
				<h5 style="border-bottom: 1px solid #fff;padding: 20px 10px; margin-bottom: 10px"><i class="fa fa-shopping-cart"></i> Danh sách hóa đơn</h5>
			
				<form method="post" action=""> 
				
					<table class="datatable"> 
						<thead> 
							<tr> 
								<th>Mã hóa đơn</th> 
								<th>Tên khách hàng</th>
								<th>Còn nợ</th>
								<th></th>
							</tr>
						</thead>
						<tbody> 
							@foreach($hoadon as $hd)
							<tr> 
								<td>{{$hd->MaHD}}</td> 
								<td>{{$hd->khachhang->TenKH}}</td> 
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
						</div> 
					</div> 
				</form> 
			</div><!-- /#data-table -->
		</div>
	</div>
</div>

@endsection