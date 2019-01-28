<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-01-28 06:36:03
         compiled from "templates\mail_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7365863765c4e94c3aae513-70073041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fc9fe59b0b6c2f0effd82707f950b6bc9dd6b89' => 
    array (
      0 => 'templates\\mail_user.tpl',
      1 => 1547789523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7365863765c4e94c3aae513-70073041',
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
  'unifunc' => 'content_5c4e94c3aeb425_99535387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4e94c3aeb425_99535387')) {function content_5c4e94c3aeb425_99535387($_smarty_tpl) {?>
この度はエンジニアラボからのエントリーありがとうございました。
担当マネージャーよりご連絡させていただきます。

【ご登録内容】
メールアドレス：
<?php echo $_smarty_tpl->tpl_vars['email']->value;?>


エントリー：
<?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['var']->value;?>

<?php } ?>

----------------------------------------------
ITエンジニア、SEの方たち専門のマッチングサイト
http://it-enlabo.com

<?php }} ?>
