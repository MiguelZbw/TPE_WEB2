<?php
/* Smarty version 4.2.1, created on 2022-10-18 01:20:46
  from 'C:\xampp\htdocs\web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634de34ed89d40_75943705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7813dff1baf40d1de9a641e58798223a0264454' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\header.tpl',
      1 => 1666048843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634de34ed89d40_75943705 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC</title>
    <base href="<?php echo BASE_URL;?>
">
</head>
<body>
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">
      <img src="imagen\ufc.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Ultimate Fighting Championship
    </a>
    <ul class="navbar-nav">
        <li>
          <a class="nav-link active" aria-current="page" href="categorias">Categoria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="peleadores">Peleadores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cerrarSesion">Cerrar Sesion</a>
        </li>
    </ul>
  </div>
</nav><?php }
}
