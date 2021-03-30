<?php
/* Smarty version 3.1.39, created on 2021-03-30 12:31:26
  from 'C:\xampp\htdocs\ley\smarty\templates\log.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6062fdfec880b0_53954837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a75db7ae6c134b1df7d9d1df7444bc7bd287a4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ley\\smarty\\templates\\log.tpl',
      1 => 1617100191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6062fdfec880b0_53954837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ley\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<table class="table table-bordered">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logArray']->value, 'logLine');
$_smarty_tpl->tpl_vars['logLine']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['logLine']->value) {
$_smarty_tpl->tpl_vars['logLine']->do_else = false;
?>
<tr>
<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['logLine']->value['timestamp'],$_smarty_tpl->tpl_vars['config']->value['datetime']);?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['logLine']->value['sender'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['logLine']->value['message'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['logLine']->value['type'];?>
</td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table><?php }
}
