<?php
/* Smarty version 4.2.1, created on 2022-10-18 01:12:50
  from 'C:\xampp\htdocs\web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634de172109101_75911269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee95d9b848700ffcef1a7b850ade61c399e91114' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\login.tpl',
      1 => 1666048368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634de172109101_75911269 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC</title>
</head>
<body>
  <form action="<?php echo BASE_URL;?>
iniciarSesion" method="post">
    <div class="mb-3">
      <label class="form-label">Mail</label>
      <input type="email" name="mail" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Contraseña</label>
      <input type="password" name="contrasenia" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
  </form>
  <form action="<?php echo BASE_URL;?>
registrar" method="post">
  <h1>Registro</h1>
    <div class="mb-3">
      <label class="form-label">Mail</label>
      <input type="email" name="mail" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Contraseña</label>
      <input type="password" name="contrasenia" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">registrar</button>
  </form>
  <button type="submit"><a href="home">acceso publico</a></button>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
