@extends('master')

@section('content')
<div class="content-box"> 
	<div class="box-header clear"> 
		<ul class="tabs clear"> 
			<li><a href="#data-table"><i class="fa fa-th"></i> Danh sách</a></li> 
			<li><a href="#table"><i class="fa fa-plus" title="thêm"></i> Thêm loại</a></li>
		</ul> 
		
		<h2>Loại vật liệu</h2> 
	</div> 
	
	<div class="box-body clear"> 
		<!-- TABLE --> 
		<div id="data-table"> 
			<h1 style="text-align: center">Danh sách loại vật liệu</h1>
		
			<form method="post" action=""> 
			
				<table class="datatable"> 
				<thead> 
					<tr> 
						<th>Mã loại</th> 
						<th>Tên loại</th> 
						<th style="display: none"></th> 
						<th style="display: none"></th>
						<th style="display: none"></th>
						<th style="display: none"></th>
						<th></th>
				<tbody> 
					@foreach($loai_vl as $vl)
					<tr> 
						<td>{{$vl->MaLoai}}</td> 
						<td>{{$vl->TenLoai}}</td> 
						<td style="display: none"></td>
						<td style="display: none"></td>
						<td style="display: none"></td>
						<td style="display: none"></td> 
						<td >
							<a href="loaivl_sua_{{$vl->MaLoai}}"><img src="asset_admin/images/ico_edit_16.png" class="icon16 fl-space2" alt="" title="sửa" style="float: right;" /></a> 
							<a href="loaivl_xoa_{{$vl->MaLoai}}"><img src="asset_admin/images/ico_delete_16.png" class="icon16 fl-space2" alt="" title="xóa" style="float: right;" /></a>
						</td> 
					</tr> 
	                @endforeach                      
					
				</tbody> 
				</table> 
			</form> 
		</div><!-- /#data-table 
		<!-- Custom Forms --> 
		
		<div id="table"> 
			<form action=" " method="post" class="form" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}"> 
				<h1>Thông tin loại vật liệu</h1>
				<div class="form-field clear" style="margin-left: 200px"> 
					<label for="textfield" class="form-label fl-space2" style="width: 90px">Tên loại <span class="required">*</span></label> 
					<input type="text" id="textfield" class="text fl" name="TenLoai" style="width: 77%" /> 
				</div><!-- /.form-field --> 
				<div class="form-field clear" style="margin-left: 270px"> 
					<input type="submit" class="submit" value="Thêm" />
					<input type="reset" class="submit" value="Hủy bỏ" />
					
				</div><!-- /.form-field -->																								
			</form> 
		</div><!-- /#forms --> 
		
	</div> <!-- end of box-body --> 
</div> <!-- end of content-box -->

@endsection