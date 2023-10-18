{include file="header.tpl"}
<div class="card" style="width: 18rem;">
    {if $error}
        <div class="alert alert-danger" role="alert">
            <p>{$error}</p>
        </div>
    {/if}
    <div class="card-header">
    HOME
    </div>
    <h1>Categoria</h1>
    <ul class="list-group list-group-flush">
        {foreach from=$categorias item=$categoria }
            <li class="list-group-item"> deporte: {$categoria->deporte} genero: {$categoria->genero} </li>
            {if $loggeado == true}
            <button><a href="editarCategoria/{$categoria->id}">editar</a></button>
            <button><a href="borrarCategoria/{$categoria->id}">borrar</a></button>
            {/if}
        {/foreach}
    </ul>
        {if $loggeado == true}
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
        {/if}
    <h2>Jugadores</h2>
    <ul class="list-group list-group-flush">
        {foreach from=$jugadores item=$jugador }
            <li class="list-group-item"> nombre: {$jugador->nombre} nacionalidad: {$jugador->nacionalidad} (categoria: {$categoriasNombres[$jugador->id_categoria]}) </li>
            {if $loggeado == true}
            <button><a href="editarJugador/{$jugador->id}">editar</a></button>
            <button><a href="borrarJugador/{$jugador->id}">borrar</a></button>
            {/if}
        {/foreach}
    </ul>
    {if $loggeado == true}
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
                {foreach from=$categorias item=$categoria}
                    <option value="{$categoria->id}">
                    {$categoria->deporte|cat: " "|cat:$categoria->genero}
                    </option>
                {/foreach}
            </select>
        </div>
        <button type="text" class="btn btn-primary">Submit</button>
    </form>
    {/if}
</div>
{include file="footer.tpl"}