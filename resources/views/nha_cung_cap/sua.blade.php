@extends('master')

@section('content')
<div class="content-box"> 
	<div class="box-body clear"> 
		<!-- Custom Forms --> 
		<div id="table"> 
			<h1>Sửa thông tin nhà cung cấp <small>{{$ncc->TenNCC}}</small></h1>
			<form action=" " method="post" class="form" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}"> 
				<div class="form-field" style="width: 100%"> 
						<label for="textfield" class="form-label fl-space2" style="width: 21%">Tên nhà cung cấp:  <span class="required" >*</span></label> 
						<input type="text" id="textfield" class="text fl" name="TenNCC" value="{{$ncc->TenNCC}}" style="width: 75%" /> 
				</div><!-- /.form-field -->  
				<div class="clear"></div>
				<div class="form-field "> 
					<label for="textfield" class="form-label fl-space2" style="width: 34%">Số điện thoại:  <span class="required" >*</span></label> 
					<input type="text" id="textfield" class="text fl" name="SoDienThoai" value="{{$ncc->SoDienThoai}}""  style="width: 50%"/> 
				</div><!-- /.form-field --> 
				
				<div class="form-field "> 
					<label for="textfield" class="form-label fl-space2" style="width: 17%">Email:  <span class="required" >*</span></label> 
					<input type="text" id="textfield" class="text fl" name="Email" value="{{$ncc->Email}}" style="width: 74%" /> 
				</div><!-- /.form-field -->
				<div class="clear"></div>
				<div class="form-field" style="width: 100%"> 
					<label for="textfield" class="form-label fl-space2" style="width: 10%"> Địa chỉ:  <span class="required" >*</span></label> 
					<input type="text" id="textfield" class="text fl" name="DiaChi" value="{{$ncc->DiaChi}}" style="width: 86%; height: 30px"/> 
				</div><!-- /.form-field --> 
				<div class="form-field clear" style="margin-left: 30px;"> 
					<input type="submit" class="submit fr" value="Lưu"> 
				</div><!-- /.form-field -->																								
			</form>  
		</div><!-- /#forms --> 
	</div> <!-- end of box-body --> 
</div> <!-- end of content-box -->

@endsection