@extends('master')

@section('content')
<div class="content-box"> 
	<div class="box-body clear"> 
		<!-- Custom Forms --> 
		<div id="table">
			<h1>Vật liệu {{$vatlieu->MaVL}}</h1>
			<form action=" " method="post" class="form" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-field"> 
					<label for="select" class="form-label fl-space2">Loại vật liệu</label> 
					 
					<select name="MaLoai" style="width: 30%">
						 <option value="{{$vatlieu->loai_vl->MaLoai}}">{{$vatlieu->loai_vl->TenLoai}}</option>
                        @foreach($loai_vl as $sp)
                            <option value="{{$sp->MaLoai}}">{{$sp->TenLoai}}</option>
                        @endforeach
                    </select>
					
				</div><!-- /.form-field -->	 
				<div class="form-field"> 
					<label for="file" class="form-label fl-space2">Giá gốc</label> 
					<input type="number" id="textfield" class="text fl" name="GiaGoc" value="{{$vatlieu->GiaGoc}}" /> 
				</div><!-- /.form-field -->
				<div class="form-field"> 
					<label for="textfield" class="form-label fl-space2">Tên vật liệu: <span class="required">*</span></label> 
					<input type="text" id="textfield" class="text fl" name="TenVL" value="{{$vatlieu->TenVL}}" /> 
				</div><!-- /.form-field --> 

				<div class="form-field"> 
					<label for="number" class="form-label fl-space2">Giá bán</label> 
					<input type="number" id="textfield" class="text fl" name="GiaBan" value="{{$vatlieu->GiaBan}}" /> 
				</div><!-- /.form-field -->							
                  
                 <div class="form-field"> 
					<label for="file" class="form-label fl-space2">Số lượng</label> 
					<input type="number" id="textfield" class="text fl" name="SoLuong" value="{{$vatlieu->SoLuong}}"/> 
				</div><!-- /.form-field -->         
				<div class="form-field"> 
					<label for="file" class="form-label fl-space2">Đơn vị tính</label> 
					
					<select id="select" class="fl" name="DonViTinh" style="width: 20%;height: 25px">
						<option value="{{$vatlieu->DonViTinh}}" >{{$vatlieu->DonViTinh}}</option>
						<option value="m3" >m3</option> 
						<option value="viên" >viên</option>
						<option value="bao" >bao</option>
						<option value="kg" >kg</option> 
						<option value="cây" >cây</option>  
					</select> 
				</div>

				
				<div class="form-field" style="margin-left: 120px"> 
					<input type="reset" class="submit fr" value="Hủy" />
					<input type="submit" class="submit fr" value="Lưu" />
				</div><!-- /.form-field -->	
			</form> 
		</div><!-- /#forms --> 
	</div> <!-- end of box-body --> 
</div> <!-- end of content-box -->

@endsection