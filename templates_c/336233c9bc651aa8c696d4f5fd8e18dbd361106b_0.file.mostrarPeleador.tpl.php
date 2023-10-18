<?php
/* Smarty version 4.2.1, created on 2022-10-18 03:13:31
  from 'C:\xampp\htdocs\web2\templates\mostrarPeleador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dfdbb1c6d77_48305712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '336233c9bc651aa8c696d4f5fd8e18dbd361106b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\mostrarPeleador.tpl',
      1 => 1666055609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dfdbb1c6d77_48305712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1 class="list-group-item">Peleador</h1>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">nombre:<?php echo $_smarty_tpl->tpl_vars['peleador']->value->nombre;?>
</li>
        <li class="list-group-item">peso:<?php echo $_smarty_tpl->tpl_vars['peleador']->value->peso;?>
kg</li>
        <li class="list-group-item">nacionalidad:<?php echo $_smarty_tpl->tpl_vars['peleador']->value->nacionalidad;?>
</li>
    </ul>
    <h2>su categoria:</h2>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">nombre:<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</li>
        <li class="list-group-item">peso:<?php echo $_smarty_tpl->tpl_vars['categoria']->value->peso;?>
kg</li>
    </ul>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
