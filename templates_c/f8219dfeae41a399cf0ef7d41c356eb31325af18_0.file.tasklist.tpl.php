<?php
/* Smarty version 4.2.1, created on 2022-10-14 01:32:34
  from 'C:\xampp\htdocs\web2\templates\tasklist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348a0125eaf98_21055161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8219dfeae41a399cf0ef7d41c356eb31325af18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\tasklist.tpl',
      1 => 1665703943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6348a0125eaf98_21055161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peleadores']->value, 'peleador');
$_smarty_tpl->tpl_vars['peleador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['peleador']->value) {
$_smarty_tpl->tpl_vars['peleador']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['peleador']->value->nombre;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
