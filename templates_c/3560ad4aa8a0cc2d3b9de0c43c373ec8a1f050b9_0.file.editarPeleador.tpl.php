<?php
/* Smarty version 4.2.1, created on 2022-10-17 17:00:32
  from 'C:\xampp\htdocs\web2\templates\editarPeleador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d6e1062b5c3_90583985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3560ad4aa8a0cc2d3b9de0c43c373ec8a1f050b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\editarPeleador.tpl',
      1 => 1666018827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634d6e1062b5c3_90583985 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="<?php echo BASE_URL;?>
finalizarPeleador/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
    <label  class="form-label">peso</label>
    <input type="text" name="peso" class="form-control">
    <label class="form-label">nombre</label>
    <input type="text" name="nombre" class="form-control">
    <label class="form-label">nacionalidad</label>
    <input type="text" name="nacionalidad" class="form-control">
    <select name="categoria">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
">
                <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>

            </option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
    <button type="submit">submit</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
