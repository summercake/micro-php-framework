<?php /* Smarty version Smarty-3.1.17, created on 2018-06-29 07:07:10
         compiled from "tpl\test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2946276695b35d45c1ec1b5-18726988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '993d0a8df898c0f4072435541bc301f02265491a' => 
    array (
      0 => 'tpl\\test.tpl',
      1 => 1530256026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2946276695b35d45c1ec1b5-18726988',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5b35d45c2164d0_83983877',
  'variables' => 
  array (
    'articletitle' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b35d45c2164d0_83983877')) {function content_5b35d45c2164d0_83983877($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'D:\\Laragon\\framework\\03_smarty\\smarty\\plugins\\modifier.capitalize.php';
?><?php echo $_smarty_tpl->tpl_vars['articletitle']->value;?>

<?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>

<?php echo $_smarty_tpl->tpl_vars['arr']->value['author'];?>

<?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>

<?php echo $_smarty_tpl->tpl_vars['arr']->value['author'];?>

<?php echo $_smarty_tpl->tpl_vars['arr']->value['articlecontent']['content'];?>


<hr>
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articletitle']->value);?>

<?php echo ($_smarty_tpl->tpl_vars['articletitle']->value).(" tomorrow");?>

<?php }} ?>
