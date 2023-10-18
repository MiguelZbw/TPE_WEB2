<?php
/* Smarty version 4.2.1, created on 2022-10-17 05:10:43
  from 'C:\xampp\htdocs\web2\templates\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cc7b392c0a7_89853094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f13bcb0c2472229ecc721646d642204e7102c2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\editar.tpl',
      1 => 1665976233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634cc7b392c0a7_89853094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="<?php echo BASE_URL;?>
finalizarEditar/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
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
