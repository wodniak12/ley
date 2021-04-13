<?php
/* Smarty version 3.1.39, created on 2021-04-12 16:14:53
  from 'C:\xampp\htdocs\ley\smarty\templates\townHall.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607455dd065d26_67733843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb0776d41f51b24bf3efac8d186b451c2204d538' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ley\\smarty\\templates\\townHall.tpl',
      1 => 1618236745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607455dd065d26_67733843 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ley\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<h3>Ratusz</h3>
<table class="table table-bordered">
<tr>
<th>Nazwa budyku</th>
<th>Poziom budynku</th>
<th>Produkcja/h / pojemność</th>
<th>Koszt ulepszenia</th>
<th>Rozbudowa</th>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buildingList']->value, 'building', false, 'key');
$_smarty_tpl->tpl_vars['building']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['building']->value) {
$_smarty_tpl->tpl_vars['building']->do_else = false;
?>
    
    <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['building']->value['buildingName'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['building']->value['buildingLVL'];?>
</td>
    <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['building']->value['hourGain'])===null||$tmp==='' ? '' : $tmp);?>
 / <?php echo (($tmp = @$_smarty_tpl->tpl_vars['building']->value['capacity'])===null||$tmp==='' ? '' : $tmp);?>
</td>
    <td>         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['building']->value['upgradeCost'], 'cost', false, 'resource');
$_smarty_tpl->tpl_vars['cost']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value => $_smarty_tpl->tpl_vars['cost']->value) {
$_smarty_tpl->tpl_vars['cost']->do_else = false;
?>
            <?php echo $_smarty_tpl->tpl_vars['resource']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['cost']->value;?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </td>
    <td>
    <?php if ($_smarty_tpl->tpl_vars['building']->value['upgradePossible']) {?>
        <a href="index.php?action=upgradeBuilding&building=<?php echo $_smarty_tpl->tpl_vars['building']->value['buildingName'];?>
">
            <button>Rozbuduj</button>
    </a>
    <?php }?>
    </td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<h3>Aktywne budowy:</h3>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buildingUpgrades']->value, 'buildingUpgrade');
$_smarty_tpl->tpl_vars['buildingUpgrade']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['buildingUpgrade']->value) {
$_smarty_tpl->tpl_vars['buildingUpgrade']->do_else = false;
?>
    <p>Budynek <?php echo $_smarty_tpl->tpl_vars['buildingUpgrade']->value['param'];?>
 będzie gotowy <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['buildingUpgrade']->value['timestamp'],$_smarty_tpl->tpl_vars['config']->value['datetime']);?>
</p>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<a href="index.php">Powrót</a>
<?php }
}
