<?php /* Smarty version Smarty-3.1.16, created on 2015-09-06 00:10:36
         compiled from "Tpl\front\header.html" */ ?>
<?php /*%%SmartyHeaderCode:2923855ea78e351cfd3-01812155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaa8b8562257dfaa2e605669d58e61bab661ee2f' => 
    array (
      0 => 'Tpl\\front\\header.html',
      1 => 1441469435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2923855ea78e351cfd3-01812155',
  'Function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55ea78e3522b10_66528871',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ea78e3522b10_66528871')) {Function content_55ea78e3522b10_66528871($_smarty_tpl) {?><div class="header">
    <div class="container">
        <div class="logo">
            <a href="index.html"><h1>DJ ROCKS</h1></a>
        </div>
        <div class="top-menu">
            <ul>
                <li class="active"><a href="index.php?c=Home&m=index"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li><a href="index.php?c=Home&m=about"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>About</a></li>
                <li><a href="index.php?c=Home&m=event"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Events</a></li>
                <li><a href="index.php?c=Home&m=blog"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>Blog</a></li>
                <li><a href="index.php?c=Home&m=contact"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!---->
<script src="Tpl/front/js/responsiveslides.min.js"></script>
<script>
    
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            manualControls: '#slider3-pager',
        });

        $('.top-menu li').click(function(){
            $(this).addClass('active').siblings().removeClass('active');
        })
    });
    
</script><?php }} ?>
