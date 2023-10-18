{include file="header.tpl"}
    <h1>Categoria</h1>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{$categoria->deporte} - {$categoria->genero}</li>
    </ul>
    <h2 class="list-group-item">jugador:</h2>
    <ul class="list-group list-group-flush">
        {foreach from=$jugadores item=$jugador}
            <li class="list-group-item">nombre:{$jugador->nombre}</li>
            <li class="list-group-item">nacionalidad:{$jugador->nacionalidad}</li>
            <li></li>
        {/foreach}
    </ul>
{include file="footer.tpl"}