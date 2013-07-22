<?php /* Smarty version Smarty-3.1.8, created on 2013-07-22 15:16:51
         compiled from "./home/views/cial\user\tset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:684851ecdc637174b4-66314099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'beec1be9206a3b8d3c80d928378c998495358d4f' => 
    array (
      0 => './home/views/cial\\user\\tset.tpl',
      1 => 1373939660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '684851ecdc637174b4-66314099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'error' => 0,
    'public' => 0,
    'user' => 0,
    'flush' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ecdc637e5991_55652495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ecdc637e5991_55652495')) {function content_51ecdc637e5991_55652495($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body style="background:white;margin:20px;">
<div class="top">	
	<div class="uhead">
		<h3>账号设置</h3>
	</div>
		
	<div class="ucontent">
		<div class="uzcolor"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/set">账户资料</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/pset">密码设置</a> | <b><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/tset">头像设置</a></b></div> 
		<?php if ($_smarty_tpl->tpl_vars['error']->value){?>
			<div class="redh"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
		<?php }?>
		<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/tset" method="post" enctype="multipart/form-data">	
		<div class="uimg" style="margin-top:10px">
			<img width="80" alt="<?php echo $_SESSION['username'];?>
" height="80" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['user']->value['upic']){?>uploads/user/<?php echo $_smarty_tpl->tpl_vars['user']->value['upic'];?>
<?php }else{ ?>images/<?php echo $_smarty_tpl->tpl_vars['user']->value['sex'];?>
.gif<?php }?>" />
		</div>
		<div class="uset" style="width:350px;margin-top:10px;">
			<div>
			
				<input type="hidden" name="srcimg" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['upic'];?>
">
				<input type="file" name="upic" ><br>
				<p style="font-size:12px;line-height:20px;width:300px">
				请选择您计算机中的图片文件，文件需小于<span class="redh">500k</span><br>
				你可以上传<span class="redh">JPG</span>、<span class="redh">JPEG</span>、<span class="redh">GIF</span>或<span class="redh">PNG</span>文件。<br>
				</p>
				
			</div>
			
		

			<?php if ($_smarty_tpl->tpl_vars['flush']->value){?>
				<script>
					window.top.frames["menu"].location.reload(true);
				</script>
			<?php }?>
		
		</div>	
		<div style="width:450px;float:left;clear:left;margin-left:5px;height:32px">
				<input class="button" name="sub" style="width:80px;height:30px;font-size:16px;font-weight:bold" type="submit" value="上传">
			
		</div>
		</form>						
	</div>
</div>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				
<?php }} ?>