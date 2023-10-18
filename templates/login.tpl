<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC</title>
</head>
<body>
  <form action="{BASE_URL}iniciarSesion" method="post">
    <div class="mb-3">
      <label class="form-label">Mail</label>
      <input type="email" name="mail" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Contraseña</label>
      <input type="password" name="contrasenia" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">iniciarSesion</button>
  </form>
  <form action="{BASE_URL}registrar" method="post">
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
{include file="footer.tpl"}