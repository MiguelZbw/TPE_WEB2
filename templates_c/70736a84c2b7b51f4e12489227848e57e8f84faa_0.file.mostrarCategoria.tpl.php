<?php
/* Smarty version 4.2.1, created on 2022-10-18 03:32:21
  from 'C:\xampp\htdocs\web2\templates\mostrarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634e0225aa6873_44563661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70736a84c2b7b51f4e12489227848e57e8f84faa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\mostrarCategoria.tpl',
      1 => 1666056736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634e0225aa6873_44563661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1>Categoria</h1>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
 de <?php echo $_smarty_tpl->tpl_vars['categoria']->value->peso;?>
kg</li>
    </ul>
    <h2 class="list-group-item">peleadores:</h2>
    <ul class="list-group list-group-flush">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peleadores']->value, 'peleador');
$_smarty_tpl->tpl_vars['peleador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['peleador']->value) {
$_smarty_tpl->tpl_vars['peleador']->do_else = false;
?>
            <li class="list-group-item">nombre:<?php echo $_smarty_tpl->tpl_vars['peleador']->value->nombre;?>
</li>
            <li class="list-group-item">peso:<?php echo $_smarty_tpl->tpl_vars['peleador']->value->peso;?>
kg</li>
            <li class="list-group-item">nacionalidad:<?php echo $_smarty_tpl->tpl_vars['peleador']->value->nacionalidad;?>
</li>
            <li></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
