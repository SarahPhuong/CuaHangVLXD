<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<meta name="description"  content=""/> 
<meta name="keywords" content=""/> 
<meta name="robots" content="ALL,FOLLOW"/> 
<meta name="Author" content="AIT"/> 
<meta http-equiv="imagetoolbar" content="no"/> 
<title>Cửa hàng vật liệu xây dựng Dương Dương</title> 

<link rel="stylesheet" href="asset_admin/css/reset.css" type="text/css"/> 
<link rel="stylesheet" href="asset_admin/css/screen.css" type="text/css"/> 
<link rel="stylesheet" href="asset_admin/css/fancybox.css" type="text/css"/> 
<link rel="stylesheet" href="asset_admin/css/jquery.wysiwyg.css" type="text/css"/> 
<link rel="stylesheet" href="asset_admin/css/jquery.ui.css" type="text/css"/> 
<link rel="stylesheet" href="asset_admin/css/visualize.css" type="text/css"/> 
<link rel="stylesheet" href="asset_admin/css/visualize-light.css" type="text/css"/> 
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="css/ie7.css" />
<![endif]-->

 
<script type="text/javascript" src="asset_admin/js/jquery.js"></script> 
<script type="text/javascript" src="asset_admin/js/jquery.visualize.js"></script> 
<script type="text/javascript" src="asset_admin/js/jquery.wysiwyg.js"></script> 
<script type="text/javascript" src="asset_admin/js/tiny_mce/jquery.tinymce.js"></script> 
<script type="text/javascript" src="asset_admin/js/jquery.fancybox.js"></script> 
<script type="text/javascript" src="asset_admin/js/jquery.idtabs.js"></script> 
<script type="text/javascript" src="asset_admin/js/jquery.datatables.js"></script> 
<script type="text/javascript" src="asset_admin/js/jquery.jeditable.js"></script> 
<script type="text/javascript" src="asset_admin/js/jquery.ui.js"></script> 
 
<script type="text/javascript" src="asset_admin/js/excanvas.js"></script> 
<script type="text/javascript" src="asset_admin/js/cufon.js"></script> 
<script type="text/javascript" src="asset_admin/js/Geometr231_Hv_BT_400.font.js"></script> 
<script type="text/javascript" src="asset_admin/js/script.js"></script> 
 

</head> 
 
<body> 
	<div class="clear"> 
		
		@include('blocks.menu')
		
		
		<div class="main"> <!-- *** mainpage layout *** --> 
			<div class="main-wrap">
				@include('blocks.header')
				<div class="page clear">
					@yield('content') 
				</div><!-- ./page -->

			</div><!-- ./main-wrap -->

		</div> 
	</div> 
<script type="text/javascript"> 
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12958851-7']);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script> 
</body> 
</html> 