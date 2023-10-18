<?php
/* Smarty version 4.2.1, created on 2023-10-18 00:57:30
  from 'C:\xampp\htdocs\TPE-migue\templates\mostrarPeleador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f115a8b09d1_51343073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08a71321b098078d95d2e4f12defc0c828b2b417' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-migue\\templates\\mostrarPeleador.tpl',
      1 => 1697583448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652f115a8b09d1_51343073 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1 class="list-group-item">Peleador</h1>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">nombre:<?php echo $_smarty_tpl->tpl_vars['peleador']->value->nombre;?>
</li>
        <li class="list-group-item">nacionalidad:<?php echo $_smarty_tpl->tpl_vars['peleador']->value->nacionalidad;?>
</li>
    </ul>
    <h2>su categoria:</h2>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">deporte:<?php echo $_smarty_tpl->tpl_vars['categoria']->value->deporte;?>
</li>
        <li class="list-group-item">genero:<?php echo $_smarty_tpl->tpl_vars['categoria']->value->genero;?>
</li>
    </ul>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
