<?php /* Smarty version Smarty-3.1.8, created on 2013-07-19 14:31:58
         compiled from "./admin/views/default\projects\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1157151e4a9f600b223-37409869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ce09240f34df2685dea9c1b838ba1248de60f8d' => 
    array (
      0 => './admin/views/default\\projects\\index.tpl',
      1 => 1374215486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1157151e4a9f600b223-37409869',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51e4a9f608e9c5_42700584',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e4a9f608e9c5_42700584')) {function content_51e4a9f608e9c5_42700584($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">内容管理>项目管理>编辑项目</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                 
		    <form  method="post" action="main.php?action=projects">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width2 width_font">项目名称</span>
						<span class="width_font">操&nbsp;&nbsp;作</span>
					</li>
					<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

				</ul>	
			</div>
                    </form>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>