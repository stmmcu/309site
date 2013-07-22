<?php /* Smarty version Smarty-3.1.8, created on 2013-07-16 09:59:09
         compiled from "./admin/views/default\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2258151e4a8edb524c2-98635010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64f4dd3d5d964c7b0a49fb7d7b366168aee4332d' => 
    array (
      0 => './admin/views/default\\index\\index.tpl',
      1 => 1373939658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2258151e4a8edb524c2-98635010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51e4a8edbca324_96990810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e4a8edbca324_96990810')) {function content_51e4a8edbca324_96990810($_smarty_tpl) {?><html>
	<head>
		<title>《细说PHP》CMS管理平台</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="Author" content="309Lab" />
	</head>

	<frameset rows="61,*,24" cols="*" framespacing="0" frameborder="no" border="0">
 		<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/top" name="top" scrolling="no" noresize="noresize" />
		<frameset cols="200, *">
  			<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu" name="menu" noresize="noresize" scrolling="no" />
  			<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/main" name="main" noresize="noresize" scrolling="yes"/>
		</frameset>
  		<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/bottom" name="bottom" scrolling="No" noresize="noresize" />
	</frameset>
</html>


<?php }} ?>