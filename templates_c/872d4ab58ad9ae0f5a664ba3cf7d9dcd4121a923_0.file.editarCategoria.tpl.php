<?php
/* Smarty version 4.2.1, created on 2023-10-18 03:23:52
  from 'C:\xampp\htdocs\TPE-migue\templates\editarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f33a8ccbf70_23413590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '872d4ab58ad9ae0f5a664ba3cf7d9dcd4121a923' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-migue\\templates\\editarCategoria.tpl',
      1 => 1697592228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652f33a8ccbf70_23413590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="<?php echo BASE_URL;?>
finalizarCategoria/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
    <label  class="form-label">genero</label>
    <input type="text" name="genero" class="form-control">
    <label class="form-label">nombre</label>
    <input type="text" name="deporte" class="form-control">
    <button type="submit">submit</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
