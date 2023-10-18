{include file="header.tpl"}
<form action="{BASE_URL}finalizarCategoria/{$id}" method="post">
    <label  class="form-label">genero</label>
    <input type="text" name="genero" class="form-control">
    <label class="form-label">nombre</label>
    <input type="text" name="deporte" class="form-control">
    <button type="submit">submit</button>
</form>
{include file="footer.tpl"}