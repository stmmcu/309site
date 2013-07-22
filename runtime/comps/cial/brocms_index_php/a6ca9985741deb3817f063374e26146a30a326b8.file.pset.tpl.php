<?php /* Smarty version Smarty-3.1.8, created on 2013-07-22 15:16:54
         compiled from "./home/views/cial\user\pset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:511351ecdc6609a940-37857940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6ca9985741deb3817f063374e26146a30a326b8' => 
    array (
      0 => './home/views/cial\\user\\pset.tpl',
      1 => 1373939660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '511351ecdc6609a940-37857940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'confirm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ecdc66143ff0_14305529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ecdc66143ff0_14305529')) {function content_51ecdc66143ff0_14305529($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body style="background:white;margin:20px;">
<div class="top">	
	<div class="uhead">
		<h3>账号设置</h3>
	</div>
		
	<div class="ucontent">
		<div class="uzcolor"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/set">账户资料</a> | <b><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/pset">密码设置</a></b> | <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/tset">头像设置</a></div> 
		<?php if ($_smarty_tpl->tpl_vars['confirm']->value=="yes"){?>	
			<div style="color:green;">密码修改成功！</div>
		<?php }elseif($_smarty_tpl->tpl_vars['confirm']->value=="no"){?>
			<div style="color:red;">密码修改失败！</div>
		<?php }elseif($_smarty_tpl->tpl_vars['confirm']->value=="error"){?>
			<div style="color:red;">原密码输出错误！</div>
		<?php }elseif($_smarty_tpl->tpl_vars['confirm']->value=="confirm"){?>
			<div style="color:red;">两次密码输入不一至！</div>
		<?php }?>
		<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/pset" method="post">
			<div>
			
				<b>当前密码：</b><br>
				<input type="password" name="cuserpwd"  style="height:30px" size="40" value="">
			</div>
			
			<div>
				<b>新密码：</b><br> 
				<input type="password" name="userpwd" style="height:30px" size="40" value="">
			</div>

			<div>
				<b>确认新密码：</b><br>
				<input type="password" name="repwd"  style="height:30px" size="40" value="">
			</div>

			<div style="height:32px;margin-top:10px">
				<input class="button" name="sub" style="width:80px;height:30px;font-size:16px;font-weight:bold" type="submit" value="提交">
				<input class="button" style="width:80px;height:30px;font-size:16px;font-weight:bold" type="reset" value="撤消">
			</div>

		</form>						
	</div>
</div>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				
<?php }} ?>