@extends('master')

@section('content')
<div class="content-box"> 
	<div class="box-header clear"> 
		
		
		<h2>VẬT LIỆU</h2> 
	</div> 
	
	<div class="box-body clear"> 
		<!-- TABLE --> 
		<div id="data-table"> 
			<h1 style="text-align: center">Vật liệu tồn kho</h1>
		
			<form method="post" action=""> 
			
				<table class="datatable"> 
				<thead> 
					<tr> 
						<th>Mã vật liệu</th> 
						<th>Tên vật liệu</th> 
						<th>Loại vật liệu</th> 
						<th></th> 
						<th></th> 
						<th>Số lượng</th> 
						<th></th> 
				<tbody> 
					@foreach($vatlieu as $vl)
					<tr> 
						<td>{{$vl->MaVL}}</td> 
						<td>{{$vl->TenVL}}</td> 
						<td>{{$vl->loai_vl->TenLoai}}</td> 
						<td></td>  
						<td></td>
						<td>{{$vl->SoLuong}}</td>
						<td></td>
						
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
	</div> <!-- end of box-body --> 
</div> <!-- end of content-box -->

@endsection