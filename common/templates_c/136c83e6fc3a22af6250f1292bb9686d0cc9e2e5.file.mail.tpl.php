<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-01-28 06:36:03
         compiled from "templates\mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20862025995c4e94c37d3118-01289113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '136c83e6fc3a22af6250f1292bb9686d0cc9e2e5' => 
    array (
      0 => 'templates\\mail.tpl',
      1 => 1547789523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20862025995c4e94c37d3118-01289113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'email' => 0,
    'entry' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c4e94c39f7812_35999124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4e94c39f7812_35999124')) {function content_5c4e94c39f7812_35999124($_smarty_tpl) {?>
メールアドレス:
<?php echo $_smarty_tpl->tpl_vars['email']->value;?>


エントリー:
<?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['var']->value;?>

<?php } ?><?php }} ?>
