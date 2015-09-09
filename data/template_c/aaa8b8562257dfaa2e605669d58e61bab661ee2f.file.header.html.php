<?php /* Smarty version Smarty-3.1.16, created on 2015-09-08 14:35:06
         compiled from "Tpl\front\header.html" */ ?>
<?php /*%%SmartyHeaderCode:2978655ee4b764617a3-25629544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaa8b8562257dfaa2e605669d58e61bab661ee2f' => 
    array (
      0 => 'Tpl\\front\\header.html',
      1 => 1441694105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2978655ee4b764617a3-25629544',
  'Function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55ee4b764fd4f1_02165565',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ee4b764fd4f1_02165565')) {Function content_55ee4b764fd4f1_02165565($_smarty_tpl) {?><div class="header">
    <div class="container">
        <div class="logo">
            <a href="index.html"><h1>DJ ROCKS</h1></a>
        </div>
        <div class="top-menu">
            <ul>
                <li id="home"><a href="<?php echo @constant('FRONT_LINK');?>
Home/index"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li id="about"><a href="<?php echo @constant('FRONT_LINK');?>
Home/about"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>About</a></li>
                <li id="event"><a href="<?php echo @constant('FRONT_LINK');?>
Home/event"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Events</a></li>
                <li id="blog"><a href="<?php echo @constant('FRONT_LINK');?>
Home/blog"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>Blog</a></li>
                <li id="contact"><a href="<?php echo @constant('FRONT_LINK');?>
Home/contact"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!---->
<script src="js/responsiveslides.min.js"></script>

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
    <!---以下是js部分-->
    <script type="text/javascript">
    //获取div下面所有的a标签（返回节点对象）
    var myNav = document.getElementByIdx_x("tabs_nav").getElementsByTagName_r("a");
    //获取当前窗口的url
    var myURL = document.location.href;
    //循环div下面所有的链接，
    for(var i=1;i<myNav.length;i++){
        //获取每一个a标签的herf属性
        var links = myNav[i].getAttribute("href");
        var myURL = document.location.href;
        //查看div下的链接是否包含当前窗口，如果存在，则给其添加样式
    }
    if(myURL.indexOf(links) != -1){
        myNav[i].className="active";
        myNav[0].className="";
    }
</script>

</script>
<?php }} ?>
