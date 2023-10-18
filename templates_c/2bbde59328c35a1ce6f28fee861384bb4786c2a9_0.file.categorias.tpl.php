<?php
/* Smarty version 4.2.1, created on 2023-10-18 00:54:30
  from 'C:\xampp\htdocs\TPE-migue\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f10a666dc39_20457058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bbde59328c35a1ce6f28fee861384bb4786c2a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-migue\\templates\\categorias.tpl',
      1 => 1697583268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652f10a666dc39_20457058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="list-group-item">Categorias</h1>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
        <li class="list-group-item">deporte:<?php echo $_smarty_tpl->tpl_vars['categoria']->value->deporte;?>
</li>
        <li class="list-group-item">genero:<?php echo $_smarty_tpl->tpl_vars['categoria']->value->genero;?>
</li>
        <li class="list-group-item"></li>
        <button><a href="verCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
">visualizacion</a></button>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
