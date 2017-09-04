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
		<ul class="tabs clear"> 
			<li><a href="#data-table"><i class="fa fa-th"></i> Danh sách</a></li> 
			<li><a href="#form"><i class="fa fa-plus" title="thêm"></i> Thêm hóa đơn</a></li>
		</ul> 
		
		<h2 id="text">Hóa đơn</h2> 
	</div> 
	
	<div class="box-body clear"> 
		<!-- TABLE --> 
		<div id="data-table"> 
			<h1 style="text-align: center">Danh sách hóa đơn</h1>
		
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
		<div id="form"> 
			<div class="left">

				<form method="post" action="" style="width: 100%"> 
				
					<table class="datatable" id="td"> 
					<thead> 
						<tr> 
							<th>Mã vật liệu</th> 
							<th>Tên vật liệu</th> 
							<th>Tên loại</th>
							<th>Giá bán</th>
							<th></th>
							<th></th>
							<th></th>
					<tbody> 
						@foreach($vatlieu as $vl)
							<tr> 
								<td>{{$vl->MaVL}}</td> 
								<td>{{$vl->TenVL}}</td> 
								<td>{{$vl->loai_vl->TenLoai}}</td>
								<td>{{number_format(($vl->GiaBan),3,",",".")}} vnđ</td>
								<td></td>
								<td></td>
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
						</div> 
					</div> 
					<div class="form-field fl " style="margin-top: 40px"> 
							<label for="textfield" class="form-label fl-space2">Số lượng:  <span class="required">*</span></label> 
							<input type="number" id="sl" class="text fl" name="SoLuong" value="1" style="width: 30%" /> 
					</div><!-- /.form-field -->
					
					<div class="chuyen"> 
						<input  name="them" type="button" class="submit fr" onclick="check()" value="Thêm" style="margin-top: -15px" />
					</div><!-- /.form-field -->	
				</form> 
			</div>
			<div class="right">
				<form action=" " method="post" class="form" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}"> 
					<div class="form-field" style="width: 100%"> 
						<label for="textfield" class="form-label fl-space2" style="width: 21%">Tên khách hàng:  <span class="required" >*</span></label> 
						<input type="text" id="textfield" class="text fl" name="TenKH" value="" style="width: 75%" /> 
					</div><!-- /.form-field -->  
					<div class="clear"></div>
					<div class="form-field "> 
						<label for="textfield" class="form-label fl-space2" style="width: 34%">Số điện thoại:  <span class="required" >*</span></label> 
						<input type="text" id="textfield" class="text fl" name="SoDienThoai" value=""  style="width: 50%"/> 
					</div><!-- /.form-field --> 
					
					<div class="form-field "> 
						<label for="textfield" class="form-label fl-space2" style="width: 17%">Email:  <span class="required" >*</span></label> 
						<input type="text" id="textfield" class="text fl" name="Email" value="" style="width: 74%" /> 
					</div><!-- /.form-field -->
					<div class="clear"></div>
					<div class="form-field" style="width: 100%"> 
						<label for="textfield" class="form-label fl-space2" style="width: 10%"> Địa chỉ:  <span class="required" >*</span></label> 
						<input type="text" id="textfield" class="text fl" name="DiaChi" value="" style="width: 86%; height: 30px"/> 
					</div><!-- /.form-field --> 
					<table class="datatable" id="t"> 
						<thead> 
							<tr>
								<th>Mã VL</th> 
								<th>Tên VL</th> 
								<th>Giá bán</th>
								<th>Số lượng</th>
								<th>Thành tiền</th>
								<th>Hành động</th>
							</tr>
						<tbody>
							<tr> 
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>  
						</tbody> 
					</table> 
					<div class="form-field " style="display: none"> 
						<input type="text" id="maVL" class="text fl" name="MaVL" /> 
					</div><!-- /.form-field --> 
					<div class="form-field " style="display: none"> 
						<input type="text" id="maSL" class="text fl" name="SoLuong" /> 
					</div><!-- /.form-field --> 
					<div class="form-field" style="float: right;"> 
						<label for="textfield" class="form-label fl-space2" style="width: 80px">Tổng tiền: <span class="required">*</span></label> 
						<input type="text" id="tt" class="text fl" name="TongTien" value="0" style="text-align: right;" /> 
					</div><!-- /.form-field --> 
					<div class="clear"></div>
					<div class="form-field" style="float: right;"> 
						<label for="textfield" class="form-label fl-space2" style="width: 80px">Trả trước: <span class="required">*</span></label> 
						<input type="text" id="textfield" class="text fl" name="DaTra"  style="text-align: right;"/> 
					</div><!-- /.form-field --> 
					<div class="clear"></div>
					<div class="form-field" style="float: right;"> 
						<input type="submit" class="submit" id="them" value="Thêm hóa đơn"/>
					</div><!-- /.form-field -->	
					<!-- <div class="form-field "> 
						<input type="submit" class="submit" id="in" value="In hóa đơn"  />
					</div> --><!-- /.form-field -->	
				</form> 

			</div><!-- ./right --> 
		</div><!-- /#data-table 
		
		<!-- Custom Forms --> 
	</div> <!-- end of box-body --> 
</div> <!-- end of content-box -->
<script type="text/javascript">
	var td=document.getElementById('td');
	var  selected = td.getElementsByClassName('selected');
	var tongtien=0;

	td.onclick = highlight;

	function highlight(e) 
	{
	    if (selected[0])
	    	selected[0].className = '';
	    e.target.parentNode.className = 'selected';
	}

	function check() {
		var t=document.getElementById('t');
		var sl=document.getElementById('sl');
		var maVL=document.getElementById('maVL');
		var soluong=document.getElementById('maSL');
		var tt=document.getElementById('tt');

		var new_row = t.rows[1].cloneNode(true);
		var len = t.rows.length;
    	new_row.cells[0].innerHTML = $("tr.selected td:eq(0)" ).html();
    	maVL.value+=new_row.cells[0].innerHTML+",";
    	new_row.cells[1].innerHTML = $("tr.selected td:eq(1)" ).html();
    	new_row.cells[2].innerHTML = $("tr.selected td:eq(3)" ).html();
    	if(sl.value== "")
    	{
    		new_row.cells[3].innerHTML = 0;
    	}
    	else
    		new_row.cells[3].innerHTML = sl.value;
    	soluong.value+=new_row.cells[3].innerHTML+",";

    	tongtien+=parseInt($("tr.selected td:eq(3)" ).html())*sl.value;
    	new_row.cells[4].innerHTML = parseInt($("tr.selected td:eq(3)" ).html())*sl.value;
    	new_row.cells[5].innerHTML +='<td class="gt" ><a href="#" ><img src="asset_admin/images/ico_delete_16.png" id="xoa" class="icon16 fl-space2" alt="" title="delete" onclick="deleteRow(this)" /></a></td>';
		t.appendChild(new_row);
		tt.value=tongtien;
	}

	function deleteRow(el) {
		var maVL=document.getElementById('maVL');
		var soluong=document.getElementById('maSL');
		var tt=document.getElementById('tt');
		// var len = t.rows.length;
	    while (el.parentNode && el.tagName.toLowerCase() != 'tr') {
	        el = el.parentNode;
	    }

	    if (el.parentNode && el.parentNode.rows.length > 0) {
	        el.parentNode.removeChild(el);
	       	
	       	var ma =el.cells[0].innerHTML;
	       	maVL.value=maVL.value.replace(ma+',','');
	       	var sl=el.cells[3].innerHTML;
	       	soluong.value=soluong.value.replace(sl+',','');

	       	var sotien=el.cells[4].innerHTML;
	     	tt.value=tt.value-parseInt(sotien);
	     	tongtien-=parseInt(sotien);
	    }
	}
</script>

@endsection