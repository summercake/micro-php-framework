<?php /* Smarty version Smarty-3.1.17, created on 2018-06-29 09:03:32
         compiled from "tpl\test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13175492595b35d44fad2807-39561672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '993d0a8df898c0f4072435541bc301f02265491a' => 
    array (
      0 => 'tpl\\test.tpl',
      1 => 1530263012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13175492595b35d44fad2807-39561672',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5b35d44fafc2b9_36618948',
  'variables' => 
  array (
    'articletitle' => 0,
    'arr' => 0,
    'time' => 0,
    'default' => 0,
    'url' => 0,
    'enter' => 0,
    'score' => 0,
    'articlelist' => 0,
    'article' => 0,
    'myobj' => 0,
    'str' => 0,
    'string' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b35d44fafc2b9_36618948')) {function content_5b35d44fafc2b9_36618948($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'D:\\Laragon\\framework\\03_smarty\\smarty\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\Laragon\\framework\\03_smarty\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_test')) include 'D:\\Laragon\\framework\\03_smarty\\smarty\\plugins\\function.test.php';
if (!is_callable('smarty_modifier_test')) include 'D:\\Laragon\\framework\\03_smarty\\smarty\\plugins\\modifier.test.php';
if (!is_callable('smarty_block_test2')) include 'D:\\Laragon\\framework\\03_smarty\\smarty\\plugins\\block.test2.php';
?><?php echo $_smarty_tpl->tpl_vars['articletitle']->value;?>

<hr>
<?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>

<?php echo $_smarty_tpl->tpl_vars['arr']->value['author'];?>

<hr>
<?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>

<?php echo $_smarty_tpl->tpl_vars['arr']->value['author'];?>

<hr>
<?php echo $_smarty_tpl->tpl_vars['arr']->value['articlecontent']['content'];?>


<hr>
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articletitle']->value);?>

<?php echo ($_smarty_tpl->tpl_vars['articletitle']->value).(" tomorrow");?>

<hr>
<?php echo $_smarty_tpl->tpl_vars['time']->value;?>

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value);?>

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,"%H:%M:%S");?>

<hr>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['default']->value)===null||$tmp==='' ? 'default' : $tmp);?>

<hr>
<?php echo rawurlencode($_smarty_tpl->tpl_vars['url']->value);?>

<hr>
<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['articletitle']->value, 'UTF-8');?>

<?php echo mb_strtolower($_smarty_tpl->tpl_vars['articletitle']->value, 'UTF-8');?>

<hr>
<?php echo $_smarty_tpl->tpl_vars['enter']->value;?>

<?php echo nl2br($_smarty_tpl->tpl_vars['enter']->value);?>

<hr>
<?php if ($_smarty_tpl->tpl_vars['score']->value>90) {?>
good
<?php } elseif ($_smarty_tpl->tpl_vars['score']->value>60) {?>
pass
<?php } else { ?>
fail
<?php }?>
<hr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['article'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['article']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['name'] = 'article';
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['articlelist']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = (int) 2;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total']);
?>
<?php echo $_smarty_tpl->tpl_vars['articlelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['title'];?>

<?php echo $_smarty_tpl->tpl_vars['articlelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['author'];?>

<?php echo $_smarty_tpl->tpl_vars['articlelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['content'];?>

<br>
<?php endfor; endif; ?>
<hr>

<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articlelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>

<?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

<br>
<?php }
if (!$_smarty_tpl->tpl_vars['article']->_loop) {
?>
No Article
<?php } ?>
<hr>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sitename'=>"awesome"), 0);?>

<hr>
<?php echo $_smarty_tpl->tpl_vars['myobj']->value->method(array('apple','can be eaten'));?>

<hr>
<?php echo date("Y-m-d",$_smarty_tpl->tpl_vars['time']->value);?>

<hr>
<?php echo $_smarty_tpl->tpl_vars['str']->value;?>

<br>
<?php echo str_replace('d','h',$_smarty_tpl->tpl_vars['str']->value);?>

<hr>
<?php echo test(array('p1'=>'abc','p2'=>'efg'),$_smarty_tpl);?>

<hr>
<?php echo smarty_function_test(array('width'=>150,'height'=>200),$_smarty_tpl);?>

<hr>
<?php echo smarty_modifier_test($_smarty_tpl->tpl_vars['time']->value,'Y-m-d H:i:s');?>

<hr>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('test2', array('replace'=>'true','maximum'=>29)); $_block_repeat=true; echo smarty_block_test2(array('replace'=>'true','maximum'=>29), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo $_smarty_tpl->tpl_vars['string']->value;?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_test2(array('replace'=>'true','maximum'=>29), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>





<?php }} ?>
