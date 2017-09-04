@extends('master')

@section('content')
<div class="content-box"> 
	<div class="box-body clear"> 
		<!-- Custom Forms --> 
		<div id="table"> 
			<h1>Sửa loại vật liệu - {{$loai_vl->TenLoai}}</h1>
			<form action=" " method="post" class="form" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}"> 
				<div class="form-field clear" style="margin-left: 200px"> 
					<label for="textfield" class="form-label fl-space2" style="width: 90px">Tên loại <span class="required">*</span></label> 
					<input type="text" id="textfield" class="text fl" name="TenLoai" style="width: 77%" value="{{$loai_vl->TenLoai}}"/> 
				</div><!-- /.form-field --> 
				<div class="form-field clear" style="margin-left:270px"> 
					
					<input type="reset" class="submit" value="Hủy bỏ" />
					<input type="submit" class="submit" value="Lưu" />
				</div><!-- /.form-field -->						
			</form>  
		</div><!-- /#forms --> 
	</div> <!-- end of box-body --> 
</div> <!-- end of content-box -->

@endsection