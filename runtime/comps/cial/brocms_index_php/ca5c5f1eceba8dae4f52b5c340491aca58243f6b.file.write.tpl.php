<?php /* Smarty version Smarty-3.1.8, created on 2013-07-22 15:18:18
         compiled from "./home/views/cial\message\write.tpl" */ ?>
<?php /*%%SmartyHeaderCode:451151ecdcba58ec21-15630039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca5c5f1eceba8dae4f52b5c340491aca58243f6b' => 
    array (
      0 => './home/views/cial\\message\\write.tpl',
      1 => 1373939659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '451151ecdcba58ec21-15630039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'mess' => 0,
    'user' => 0,
    'app' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ecdcba6746e8_15452508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ecdcba6746e8_15452508')) {function content_51ecdcba6746e8_15452508($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body style="background:white;margin:20px;">
<div class="top">	
	<div class="uhead">
		<h3>站内信</h3>
	</div>
		
	<div class="ucontent">
	
		<div class="uzcolor"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index">收件箱</a> | <b><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/write">写消息</a></b></div> 
		
		<?php if ($_smarty_tpl->tpl_vars['mess']->value){?>
			<div class="redh"><?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
</div>
		<?php }?>
		<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/write" method="post">
			<div>
			
				<b>收件人：</b><br>
				<?php if ($_smarty_tpl->tpl_vars['user']->value['id']){?>
					<a target="_top" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/uid/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a>
						<input type="hidden" name="revicename"   size="20" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
">
				<?php }elseif($_GET['revicename']){?>
					<?php echo $_GET['revicename'];?>

					<input type="hidden" name="revicename"   size="20" value="<?php echo $_GET['revicename'];?>
">
				<?php }else{ ?>
					<input type="text" name="revicename"   size="20" value="">&nbsp;&nbsp;<span style="font-size:12px">通过填写用户名称向指定用户发送站内信</span>
				<?php }?>
			</div>
			
			<div>
				<b>主题：</b><br> 
				<input type="text" name="title"  size="40" value="<?php if ($_smarty_tpl->tpl_vars['message']->value['title']){?>回复：<?php echo $_smarty_tpl->tpl_vars['message']->value['title'];?>
<?php }?>">
			</div>

			<div>
				<b>内容：</b><br>
				<textarea cols="40" rows="4" name="content" style="height:60px"><?php echo $_smarty_tpl->tpl_vars['user']->value['info'];?>
</textarea><br>
				<span style="font-size:12px">请输入个人简介，简介内容不超过40字。</span>
			</div>

			<div style="height:32px;margin-top:10px">
				<input class="button" name="sub" style="width:80px;height:30px;font-size:16px;font-weight:bold" type="submit" value="寄 出">
			
			</div>
		
		</form>				
	</div>
</div>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				
<?php }} ?>