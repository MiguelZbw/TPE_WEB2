<?php
/* Smarty version 4.2.1, created on 2022-10-16 12:52:59
  from 'C:\xampp\htdocs\web2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634be28b03ee85_18079889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48f12d7d2a567b4fd2964de921cadd24331b8d49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\home.tpl',
      1 => 1665917556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634be28b03ee85_18079889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul class="list-group">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peleadores']->value, 'peleador');
$_smarty_tpl->tpl_vars['peleador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['peleador']->value) {
$_smarty_tpl->tpl_vars['peleador']->do_else = false;
?>
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['peleador']->value->nombre;?>
</li>
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['peleador']->value->peso;?>
</li>
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['peleador']->value->nacionalidad;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
