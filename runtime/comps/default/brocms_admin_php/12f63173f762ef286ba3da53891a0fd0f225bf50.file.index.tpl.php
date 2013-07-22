<?php /* Smarty version Smarty-3.1.8, created on 2013-07-18 14:50:27
         compiled from "./admin/views/default\album\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:732451e79033a70577-05689217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12f63173f762ef286ba3da53891a0fd0f225bf50' => 
    array (
      0 => './admin/views/default\\album\\index.tpl',
      1 => 1373939658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '732451e79033a70577-05689217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51e79033b26ed0_08297905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e79033b26ed0_08297905')) {function content_51e79033b26ed0_08297905($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">内容管理>图片管理>编辑相册</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="main.php?action=album">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width2 width_font">相册名称</span>
						<span class="width_font">操&nbsp;&nbsp;作</span>
					</li>
					<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

				</ul>	
			</div>
                    </form>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>