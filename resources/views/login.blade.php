<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<meta name="description"  content=""/> 
<meta name="keywords" content=""/> 
<meta name="robots" content="ALL,FOLLOW"/> 
<meta name="Author" content="AIT"/> 
<meta http-equiv="imagetoolbar" content="no"/> 
<title>Login</title> 
 
<link rel="stylesheet" href="asset_admin/css/reset.css" type="text/css"/> 
<link rel="stylesheet" href="asset_admin/css/screen.css" type="text/css"/> 
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="css/ie7.css" />
<![endif]-->	
 
<script type="text/javascript" src="asset_admin/js/jquery.js"></script> 
<script type="text/javascript" src="asset_admin/js/Geometr231_Hv_BT_400.font.js"></script> 
<script type="text/javascript" src="asset_admin/js/script.js"></script> 
<style>
html{background:url(asset_admin/images/bg.jpg) !important; }
.h2
{
	width: 81%;
    text-transform: uppercase;
    margin-top: 0px;
    font-size: 21px !important;
    margin-left: 1px !important;;
    text-align: center;
}
</style>
 
</head> 
 
<body class="no-side"> 
 
<div class="login-box"> 
<div class="login-border"> 
<div class="login-style"> 
	<div class="login-header"> 
		<div class="logo clear" style="float: left;"> 
			<img src="asset_admin/images/logo_earth.png" alt="" class="picture" style="width: 20%;margin-top: 0px;margin-left: -7px;" /> 
			<h2 class="title h2">Cửa hàng vật liệu xây dựng Danh Phú</h2> 
			
		</div> 
	</div>
	<form action="login" method="post"> 
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="login-inside"> 
			<div class="login-data"> 
				<div class="row clear"> 
					<label for="user" style="margin-left:-40px">Email:</label> 
    					<input type="text" placeholder="Nhập email" size="25" class="text" id="user" name="email" /> 
    				</div> 
 				<div class="row clear"> 
					<label for="password" style="margin-left:-40px">Mật khẩu:</label> 
					<input type="password" value="password" size="25" class="text" id="password" name="password" /> 
				</div> 
				<input type="submit" class="submit" value="Login" style="margin-top: 0" /> 
			</div>
		</div> 
		<div class="login-footer clear" style="margin-bottom: 0px;"> 
			<span class="remember"> 
				<input type="checkbox" class="checkbox" checked="checked" id="remember" /> <label for="remember">Remember</label> 
			</span> 
		</div> 
	</form> 
 
</div> 
</div> 
</div> 
 
</body> 
</html> 