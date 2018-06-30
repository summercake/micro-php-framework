<?php /* Smarty version Smarty-3.1.17, created on 2018-06-30 01:07:49
         compiled from "tpl\admin\leftmenu.html" */ ?>
<?php /*%%SmartyHeaderCode:28545b36d7e513ba87-25320200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bac752f0fd3ffd4b8093b2506f1efe4f0fe5fe6' => 
    array (
      0 => 'tpl\\admin\\leftmenu.html',
      1 => 1402885538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28545b36d7e513ba87-25320200',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5b36d7e5148be5_32470632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b36d7e5148be5_32470632')) {function content_5b36d7e5148be5_32470632($_smarty_tpl) {?><aside id="sidebar" class="column">
	<h3>新闻管理</h3>
	<ul class="toggle">
		<li class="icn_new_article"><a href="admin.php?controller=admin&method=newsadd">添加新闻</a></li>
		<li class="icn_categories"><a href="admin.php?controller=admin&method=newslist">管理新闻</a></li>
	</ul>
	<h3>管理员管理</h3>
	<ul class="toggle">
		<li class="icn_jump_back"><a href="admin.php?controller=admin&method=logout">退出登录</a></li>
	</ul>
	
	<footer>
		
	</footer>
</aside><!-- end of sidebar --><?php }} ?>
