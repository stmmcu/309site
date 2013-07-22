<?php /* Smarty version Smarty-3.1.8, created on 2013-07-19 14:31:53
         compiled from "./admin/views/default\projects\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3149951e8dd594e3c67-83736924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4033d586e751692b48bc6c7a45145b92f89b4148' => 
    array (
      0 => './admin/views/default\\projects\\add.tpl',
      1 => 1374215486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3149951e8dd594e3c67-83736924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51e8dd595840f5_70731147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e8dd595840f5_70731147')) {function content_51e8dd595840f5_70731147($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理->项目管理->添加项目</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form name="article" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					
					<li class="light-row">
						<span class="col_width">项目名字&nbsp;<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="proName" size="30" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" maxlength="40">
					</li>

					<li class="dark-row">
						<span class="col_width" style="margin-top:25px">项目描述</span>
						<textarea class="text-box" name="proSum" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['post']->value['summary'];?>
</textarea>&nbsp;&nbsp;小于100个汉字.
					</li>
				

					<li class="light-row">
                                            <span class="col_width">项目人员&nbsp;<span class = "red_font">*</span></span>
						<input type="text" class="text-box" name="proTeam" size="25" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['comefrom'];?>
" maxlength="25">
					</li>
					<li class="dark-row">
						<span class="col_width">项目关键字&nbsp;&nbsp;&nbsp;<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="proKeyword" size="25" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['keyword'];?>
" maxlength="20">&nbsp;&nbsp;用于文章搜索,多个请用逗号","隔开.
					</li>
		
                                        <li class="light-row-row">
                                            <span class="col_width" style="float:left;">上传项目文件 </span>
						<span id="apic" style="float:left !important;float:none;width:300px;">
						<input type="file" name="projects[]" ><br>
						</span>
                                            
                                        </li>
					
	
					<li class="light-row-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="button"  value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>