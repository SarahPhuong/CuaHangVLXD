@extends('master')

@section('content')
<div class="content-box"> 
	<div class="box-header"> 
		<ul class="tabs clear"> 
			<li><a href="#data-table"><i class="fa fa-th"></i> Danh sách</a></li> 
			<li><a href="#table"><i class="fa fa-plus" title="thêm"></i> Thêm mới</a></li>
		</ul> 
		
		<h2>VẬT LIỆU</h2> 
	</div> 
	
	<div class="box-body clear"> 
		<!-- TABLE --> 
		<div id="data-table"> 
			<h1 style="text-align: center">Danh sách vật liệu</h1>
		
			<form method="post" action=""> 
			
				<table class="datatable"> 
				<thead> 
					<tr> 
						<th>Mã vật liệu</th> 
						<th>Tên vật liệu</th> 
						<th>Loại vật liệu</th> 
						<th>Giá gốc</th> 
						<th>Giá bán</th> 
						<th>Số lượng</th> 
						<th>Đơn vị tinh</th> 
						<th>Hành động</th>
				<tbody> 
					@foreach($vatlieu as $vl)
					<tr> 
						<td>{{$vl->MaVL}}</td> 
						<td>{{$vl->TenVL}}</td> 
						<td>{{$vl->loai_vl->TenLoai}}</td> 
						<td>{{number_format(($vl->GiaGoc),3,",",".")}} vnđ</td>  
						<td>{{number_format(($vl->GiaBan),3,",",".")}} vnđ</td>
						<td>{{$vl->SoLuong}}</td>
						<td>{{$vl->DonViTinh}}</td>
						<td >
							<a href="vatlieu_sua_{{$vl->MaVL}}"><img src="asset_admin/images/ico_edit_16.png" class="icon16 fl-space2" alt="" title="edit" /></a> 
							<a href="vatlieu_xoa_{{$vl->MaVL}}"><img src="asset_admin/images/ico_delete_16.png" class="icon16 fl-space2" alt="" title="delete" /></a>
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
						<label for="">Tổng số vật liệu:<span style="font-weight: bold"> {{$tongVL}}</span></label><br>
						<label for="">Tổng số lượng:<span style="font-weight: bold"> {{$tongSL}}</span></label>
					</div> 
				</div>
			</form> 
		</div><!-- /#data-table --> 
		<!-- Custom Forms --> 
		
		<div id="table"> 
			<h1>Thông tin vật liệu</h1>
			<form action=" " method="post" class="form" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}"> 
				<div class="form-field"> 
					<label for="textfield" class="form-label fl-space2">Tên vật liệu: <span class="required">*</span></label> 
					<input type="text" id="textfield" class="text fl" name="TenVL" placeholder="Nhập tên vật liệu" /> 
				</div><!-- /.form-field --> 
				<div class="form-field"> 
					<label for="file" class="form-label fl-space2">Giá gốc</label> 
					<input type="number" id="textfield" class="text fl" name="GiaGoc" value="0" /> 
				</div><!-- /.form-field -->
				<div class="form-field"> 
					<label for="select" class="form-label fl-space2">Loại vật liệu</label> 
					<!-- <input type="text" id="textfield" class="text fl" name="MaLoai" />  -->
					<select id="select" class="fl" name="MaLoai" style="width: 30%"> 
						@foreach($loai_vl as $vl)
						<option value="{{$vl->MaLoai}}" >{{$vl->TenLoai}}</option> 
						@endforeach
					</select> 
				</div><!-- /.form-field -->	 						


				<div class="form-field"> 
					<label for="file" class="form-label fl-space2">Giá bán</label> 
					<input type="number" id="textfield" class="text fl" name="GiaBan" value="0" /> 
				</div><!-- /.form-field -->							
	              
	            <div class="form-field"> 
					<label for="file" class="form-label fl-space2">Số lượng</label> 
					<input type="number" id="textfield" class="text fl" name="SoLuong" value="0" /> 
				</div><!-- /.form-field -->         
				<div class="form-field"> 
					<label for="file" class="form-label fl-space2">Đơn vị tính</label> 
					
					<select id="select" class="fl" name="DonViTinh" style="width: 30%">
						<option value="m2" >m2</option> 
						<option value="m3" >m3</option> 
						<option value="viên" >viên</option>
						<option value="bao" >bao</option>
						<option value="kg" >kg</option> 
						<option value="cây" >cây</option>  
					</select> 
				</div><!-- /.form-field -->  
				<div class="form-field" style="margin-left: 240px"> 
					<input type="submit" class="submit fl" value="Thêm" style="" />
					<input type="reset" class="submit fl" value="Hủy bỏ" style="" />
				</div><!-- /.form-field -->		
			</form>  
		</div><!-- ./table -->

	</div> <!-- end of box-body --> 
</div> <!-- end of content-box -->

@endsection