{include file="header.tpl"}
<form action="{BASE_URL}finalizarJugador/{$id}" method="post">
    <label class="form-label">nombre</label>
    <input type="text" name="nombre" class="form-control">
    <label class="form-label">nacionalidad</label>
    <input type="text" name="nacionalidad" class="form-control">
    <select name="categoria">
        {foreach from=$categorias item=$categoria}
            <option value="{$categoria->id}">
                {$categoria->deporte|cat: " "|cat:$categoria->genero}

            </option>
        {/foreach}
            </select>
    <button type="submit">submit</button>
</form>
{include file="footer.tpl"}