
@extends('master')
@section('content')
<style type="text/css" media="screen">
	.container{width: 100%}
	.panel-heading
	{
		background: #fff;
	    color: #219452;
	    text-align: center;
	    font-weight: bold;
	    font-size: 20px;
	    padding: 15px 0px;
	}
	form
	{
		width: 100%;
	}
	label{margin-right: 40px}
	input[type=text]{width: 35%;height: 30px;padding-left: 5px}
	input[type=email]{margin-left: 8px;width: 35%;height: 30px;padding-left: 5px}
	button{
		display: inline;
	    border-width: 0px;
	    font-size: 11px;
	    font-family: arial;
	    color: #FFFFFF;
	    font-weight: bold;
	    cursor: pointer;
	    background: #219452;
	    padding: 10px 25px 10px 25px;
	    margin-top: 30px;
	    margin-left: 35px;
	}
	.bg{background: #fef9e7;padding:10px 10px 10px 335px;}
	.panel-body{width: 100%}
</style>
<div class="container">
    <div class="panel panel-default">
	  	<div class="panel-heading">THÔNG TIN TÀI KHOẢN</div>
	  	<div class="panel-body">
	  	
           		@if(session('thongbao'))
           			<script type="text/javascript">
	  					alert("{{session('thongbao')}}");
	  				</script>
                @endif
           
	    	<form action="" method="post">
	    		<div class="bg">
		    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<div>
		    			<label>Họ tên</label>
					  	<input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1" value="{{$user->name}}">
					</div>
					<br>
					<div>
		    			<label>Email</label>
					  	<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
					  	readonly value="{{$user->email}}">
					</div>
					<br>	
					<div>
						<input type="checkbox" class="checkPassword" name="checkPassword" onclick="check()">
		    			<label>Đổi mật khẩu</label>
		    			<div class="clear"></div>
		    			<label>Mật khẩu mới</label>
					  	<input disabled="" type="password" class="form-control inputMatKhau" name="password" aria-describedby="basic-addon1">
					</div>
					<br>
					<div>
		    			<label>Nhập lại mật khẩu</label>
					  	<input disabled="" type="password" class="form-control inputMatKhau" name="passwordAgain" aria-describedby="basic-addon1" style="margin-left: -28px">
					</div>
					<br>
					<button type="submit" class="btn btn-default"><i class="fa fa-floppy-o"></i> Lưu
					</button>
					<button type="reset" class="btn btn-default"><i class="fa fa-ban"></i> Bỏ qua</button>
				</div>
	    	</form>
	  	</div>
	</div>
</div>
<script>
	
	function check() {
		    $('.inputMatKhau').removeAttr('disabled','');
		}
	</script>
@endsection
	