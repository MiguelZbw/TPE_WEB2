<?php
/* Smarty version 4.2.1, created on 2023-10-18 03:55:02
  from 'C:\xampp\htdocs\TPE-migue\templates\home1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f3af6d44fe7_95543403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9feec8fff5a50c34c12ce580a9f382d04d08fcb7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-migue\\templates\\home1.tpl',
      1 => 1697594100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652f3af6d44fe7_95543403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="card" style="width: 18rem;">
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="alert alert-danger" role="alert">
            <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
        </div>
    <?php }?>
    <div class="card-header">
    HOME
    </div>
    <h1>Categoria</h1>
    <ul class="list-group list-group-flush">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
            <li class="list-group-item"> deporte: <?php echo $_smarty_tpl->tpl_vars['categoria']->value->deporte;?>
 genero: <?php echo $_smarty_tpl->tpl_vars['categoria']->value->genero;?>
 </li>
            <?php if ($_smarty_tpl->tpl_vars['loggeado']->value == true) {?>
            <button><a href="editarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
">editar</a></button>
            <button><a href="borrarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
">borrar</a></button>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
        <?php if ($_smarty_tpl->tpl_vars['loggeado']->value == true) {?>
        <form action="agregarCategoria" method="post">
            <legend>Agregar Categoria</legend>
            <div class="mb-3">
                <label class="form-label">Deporte</label>
                <input type="text" name="deporte" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">genero</label>
                <input type="text" name="genero" class="form-control">
            </div>
            <button type="text" class="btn btn-primary">Submit</button>
        </form>
        <?php }?>
    <h2>Jugadores</h2>
    <ul class="list-group list-group-flush">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jugadores']->value, 'jugador');
$_smarty_tpl->tpl_vars['jugador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->value) {
$_smarty_tpl->tpl_vars['jugador']->do_else = false;
?>
            <li class="list-group-item"> nombre: <?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
 nacionalidad: <?php echo $_smarty_tpl->tpl_vars['jugador']->value->nacionalidad;?>
 (categoria: <?php echo $_smarty_tpl->tpl_vars['categoriasNombres']->value[$_smarty_tpl->tpl_vars['jugador']->value->id_categoria];?>
) </li>
            <?php if ($_smarty_tpl->tpl_vars['loggeado']->value == true) {?>
            <button><a href="editarJugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id;?>
">editar</a></button>
            <button><a href="borrarJugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id;?>
">borrar</a></button>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php if ($_smarty_tpl->tpl_vars['loggeado']->value == true) {?>
    <form action="agregarJugador" method="post">
        <legend>Agregar jugador</legend>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Nacionalidad</label>
            <input type="text" name="nacionalidad" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Categoria</label>
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
        </div>
        <button type="text" class="btn btn-primary">Submit</button>
    </form>
    <?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
