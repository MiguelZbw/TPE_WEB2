<?php
/* Smarty version 4.2.1, created on 2022-10-17 16:35:54
  from 'C:\xampp\htdocs\web2\templates\editarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d684a172269_51087332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a5c2f10a53c1f55597d52f6d8bb4694f58ccfda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\editarCategoria.tpl',
      1 => 1666016805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634d684a172269_51087332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="<?php echo BASE_URL;?>
finalizarCategoria/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
    <label  class="form-label">peso</label>
    <input type="text" name="peso" class="form-control">
    <label class="form-label">nombre</label>
    <input type="text" name="nombre" class="form-control">
    <button type="submit">submit</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
