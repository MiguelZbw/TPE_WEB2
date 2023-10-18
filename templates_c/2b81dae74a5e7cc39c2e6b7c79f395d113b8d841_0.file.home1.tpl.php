<?php
/* Smarty version 4.2.1, created on 2022-10-18 02:54:55
  from 'C:\xampp\htdocs\web2\templates\home1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634df95f36fb66_72354958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b81dae74a5e7cc39c2e6b7c79f395d113b8d841' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\home1.tpl',
      1 => 1666054495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634df95f36fb66_72354958 (Smarty_Internal_Template $_smarty_tpl) {
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
            <li class="list-group-item"> nombre: <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
 peso: <?php echo $_smarty_tpl->tpl_vars['categoria']->value->peso;?>
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
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Peso</label>
                <input type="text" name="peso" class="form-control">
            </div>
            <button type="text" class="btn btn-primary">Submit</button>
        </form>
        <?php }?>
    <h2>Peleadores</h2>
    <ul class="list-group list-group-flush">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peleadores']->value, 'peleador');
$_smarty_tpl->tpl_vars['peleador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['peleador']->value) {
$_smarty_tpl->tpl_vars['peleador']->do_else = false;
?>
            <li class="list-group-item"> nombre: <?php echo $_smarty_tpl->tpl_vars['peleador']->value->nombre;?>
 peso: <?php echo $_smarty_tpl->tpl_vars['peleador']->value->peso;?>
 nacionalidad: <?php echo $_smarty_tpl->tpl_vars['peleador']->value->nacionalidad;?>
 (categoria: <?php echo $_smarty_tpl->tpl_vars['categoriasNombres']->value[$_smarty_tpl->tpl_vars['peleador']->value->id_categoria];?>
) </li>
            <?php if ($_smarty_tpl->tpl_vars['loggeado']->value == true) {?>
            <button><a href="editarPeleador/<?php echo $_smarty_tpl->tpl_vars['peleador']->value->id;?>
">editar</a></button>
            <button><a href="borrarPeleador/<?php echo $_smarty_tpl->tpl_vars['peleador']->value->id;?>
">borrar</a></button>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php if ($_smarty_tpl->tpl_vars['loggeado']->value == true) {?>
    <form action="agregarPeleador" method="post">
        <legend>Agregar Peleador</legend>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Nacionalidad</label>
            <input type="text" name="nacionalidad" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Peso</label>
            <input type="text" name="peso" class="form-control">
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
                    <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>

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
