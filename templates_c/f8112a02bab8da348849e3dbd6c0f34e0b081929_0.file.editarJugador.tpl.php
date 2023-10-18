<?php
/* Smarty version 4.2.1, created on 2023-10-18 03:42:13
  from 'C:\xampp\htdocs\TPE-migue\templates\editarJugador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f37f578e429_80843021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8112a02bab8da348849e3dbd6c0f34e0b081929' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-migue\\templates\\editarJugador.tpl',
      1 => 1697593330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652f37f578e429_80843021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="<?php echo BASE_URL;?>
finalizarJugador/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
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
                <?php echo (($_smarty_tpl->tpl_vars['categoria']->value->deporte).(" ")).($_smarty_tpl->tpl_vars['categoria']->value->genero);?>


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
