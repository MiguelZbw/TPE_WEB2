{include file="header.tpl"}
<h1 class="list-group-item">Jugadores</h1>
<ul>
    {foreach from=$jugadores item=$jugador }
        <li class="list-group-item">{$jugador->nombre}</li>
        <li class="list-group-item">{$jugador->nacionalidad}</li>
        <li class="list-group-item">(categoria: {$categoriasNombres[$jugador->id_categoria]})</li>
        <button><a href="verJugador/{$jugador->id}">visualizacion</a></button>
    {/foreach}
</ul>
{include file="footer.tpl"}