<?php
/* Smarty version 3.1.39, created on 2021-03-30 12:16:07
  from 'C:\xampp\htdocs\generic\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6062fa6798c437_93641281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9e7aeace3361a9e1fb0f563bcc7d890b6d4830f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\generic\\smarty\\templates\\index.tpl',
      1 => 1616680259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:log.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6062fa6798c437_93641281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <header class="row border-bottom">
            <div class="col-12 col-md-3">
                Informacje o graczu
            </div>
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12 col-md-3">
                        Drewno: <?php echo $_smarty_tpl->tpl_vars['wood']->value;?>

                    </div>
                    <div class="col-12 col-md-3">
                        Żelazo: <?php echo $_smarty_tpl->tpl_vars['iron']->value;?>

                    </div>
                    <div class="col-12 col-md-3">
                        Zasób 3
                    </div>
                    <div class="col-12 col-md-3">
                        Zasób 4
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                Guzik wyloguj
            </div>
        </header>
        <main class="row border-bottom">
            <div class="col-12 col-md-2 border-right">
                Lista budynków<br>
                <ul style="list-style-type: none; padding:0;">
                    <li>
                        <a href="index.php?action=townHall">Ratusz</a>
                    </li>
                    <li>
                        <a href="index.php?action=townSquare">Plac</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-8">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['mainContent']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <div class="col-12 col-md-2 border-left">
                Lista wojska
            </div>
        </main>
        <footer class="row">
            <div class="col-12">
            
            <?php $_smarty_tpl->_subTemplateRender("file:log.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            
            </div>
        </footer>
    </div> <!-- /container -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
