<?php /* Smarty version Smarty-3.1.16, created on 2015-09-08 14:37:59
         compiled from "Tpl\front\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:986755ee4b7650d363-93480241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'add7bdb2aa1a9e1ee97fcb7508a5be9fd613ab42' => 
    array (
      0 => 'Tpl\\front\\footer.html',
      1 => 1441694278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '986755ee4b7650d363-93480241',
  'Function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55ee4b76564199_56460563',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ee4b76564199_56460563')) {Function content_55ee4b76564199_56460563($_smarty_tpl) {?><div class="footer">
    <div class="container">
        <div class="strp">
            <img src="images/ftr.png" alt=""/>
        </div>
        <div class="copywrite">
            <p><a style="color:#FF008C;" href="../../admin.php">后台管理</a>&emsp;Copyright © 2015 DJ ROCKS All rights
                reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
        <div class="social-icons">
            <a href="#"><i class="twitter"></i></a>
            <a href="#"><i class="facebook"></i></a>
            <a href="#"><i class="flicker"></i></a>
            <a href="#"><i class="wifi"></i></a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>


<script>
    var nav = "<?php echo $_SESSION['nav'];?>
";
    $(function(){
        $('.top-menu').find('#'+nav).addClass('active')
    })
</script><?php }} ?>
