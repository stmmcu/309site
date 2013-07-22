<?php /* Smarty version Smarty-3.1.8, created on 2013-07-19 15:31:25
         compiled from "./home/views/cial\user\top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1501451e8eb4df35f52-53336073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54e109d25e9cd01c49143803960ba09079152e2b' => 
    array (
      0 => './home/views/cial\\user\\top.tpl',
      1 => 1373939660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1501451e8eb4df35f52-53336073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'res' => 0,
    'root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51e8eb4e0b55a7_83788125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e8eb4e0b55a7_83788125')) {function content_51e8eb4e0b55a7_83788125($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
	<div id="top">
			<div class="left">
				<a target="_top" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/uid/<?php echo $_SESSION['id'];?>
"><img  border="0" border="0" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/logo.gif"></a><?php if ($_SESSION['isLogin']){?>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_top" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/admin.php/index/index">进入管理平台</a><?php }?>
			</div>

		
			<div class="right_tool">
					<ul>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/index/index" target="_top"><img border=0 src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/exit4.gif"></a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/login/logout" onclick="return confirm('你确定要退出系统吗？')" target="_top"><img border=0 src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/exit3.gif"></a></li>
					</ul>
			</div>
			<div class="right_user">
				<b>欢迎您-</b><a target="_top" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/uid/<?php echo $_SESSION['id'];?>
"><?php echo $_SESSION['username'];?>
</a> &nbsp;&nbsp;
			</div>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>