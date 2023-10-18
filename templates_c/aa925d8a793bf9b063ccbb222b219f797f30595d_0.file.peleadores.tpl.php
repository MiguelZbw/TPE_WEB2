<?php
/* Smarty version 4.2.1, created on 2023-10-18 00:56:56
  from 'C:\xampp\htdocs\TPE-migue\templates\peleadores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f11383c8a13_91867526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa925d8a793bf9b063ccbb222b219f797f30595d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-migue\\templates\\peleadores.tpl',
      1 => 1697583412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652f11383c8a13_91867526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="list-group-item">Peleadores</h1>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peleadores']->value, 'peleador');
$_smarty_tpl->tpl_vars['peleador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['peleador']->value) {
$_smarty_tpl->tpl_vars['peleador']->do_else = false;
?>
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['peleador']->value->nombre;?>
</li>
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['peleador']->value->nacionalidad;?>
</li>
        <li class="list-group-item">(categoria: <?php echo $_smarty_tpl->tpl_vars['categoriasNombres']->value[$_smarty_tpl->tpl_vars['peleador']->value->id_categoria];?>
)</li>
        <button><a href="verPeleador/<?php echo $_smarty_tpl->tpl_vars['peleador']->value->id;?>
">visualizacion</a></button>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
