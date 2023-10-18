<?php
/* Smarty version 4.2.1, created on 2022-10-17 05:46:32
  from 'C:\xampp\htdocs\web2\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cd018762027_85072723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2b035d8b078b0ea139091dc4d393d4e37646d40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\error.tpl',
      1 => 1665978201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:home1.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634cd018762027_85072723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:home1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<p>error, no se permite eliminar la categoria/peleador</p>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
