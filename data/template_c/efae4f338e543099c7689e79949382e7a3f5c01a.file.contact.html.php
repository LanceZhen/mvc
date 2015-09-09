<?php /* Smarty version Smarty-3.1.16, created on 2015-09-08 12:48:41
         compiled from "Tpl\front\contact.html" */ ?>
<?php /*%%SmartyHeaderCode:746355ee4da974e4a6-64770512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efae4f338e543099c7689e79949382e7a3f5c01a' => 
    array (
      0 => 'Tpl\\front\\contact.html',
      1 => 1441687720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '746355ee4da974e4a6-64770512',
  'Function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55ee4da980db95_50445437',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ee4da980db95_50445437')) {Function content_55ee4da980db95_50445437($_smarty_tpl) {?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>DJ ROCKS a Music Category Flat Bootstarp Responsive Web Template| Contact :: w3layouts</title>
    <base href="<?php echo @constant('FRONT_BASE');?>
">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="DJ ROCKS Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<!---//End-css-style-switecher----->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>
	
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("Tpl/front/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="contact content">
	 <div class="container"> 		 
		 <ol class="breadcrumb">
		  <li><a href="#">Home</a></li>
		  <li class="active">Contact</li>	  
		 </ol>
		 <h2>CONTACT</h2>
		 <div class="contact-main">
			 <h3>Lorem ipsum <span>dolor sit amet,</span> consectetur adipiscing elit. Donec posuere accumsan turpis, vitae bibendum.</h3>
			 <div class="contact-grids">
                 <div class="col-md-6 contact-left">
                     <p>Vestibulum rhoncus dolor quis ipsum feugiat a pulvinar elit imperdiet. Pellentesque elit tortor, blandit ut eleifend quis, </p>
                     <form action="<?php echo @constant('FRONT_LINK');?>
Home/contact" method="post">
                         
                         <ul>
                             <li class="text-info">Name: </li>
                             <li><input name="name" type="text" class="text" value="Required" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Required';}"></li>
                         </ul>
                         <ul>
                             <li class="text-info">Email: </li>
                             <li><input name="email" type="text" class="text" value="Required, not shared" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Required, not shared';}"></li>
                         </ul>
                         <ul>
                             <li class="text-info">Website: </li>
                             <li><input name="webSite" type="text" class="text" value="Your choice" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your choice';}"></li>
                         </ul>
                         <ul>
                             <li class="text-info">Message:</li>
                             <li><textarea name="Message" value="Write here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Write here';}">Message</textarea></li>
                         </ul>
                         <input type="submit" value="Submit">
                         
                     </form>
                 </div>
                 <div class="col-md-6 contact-right">
					 	<div class="contact-map">
							<embed src="http://player.youku.com/player.php/sid/XMTI1NzM1NzQ1Ng==/v.swf" allowFullScreen="true" quality="high" width="480" height="400" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
						</div>
				 </div>
                 <div class="clearfix"></div>
             </div>
		 </div>
		 <?php echo $_smarty_tpl->getSubTemplate ("Tpl/front/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	 </div>
</div>
<!---->

<!---->
</body>
</html><?php }} ?>
