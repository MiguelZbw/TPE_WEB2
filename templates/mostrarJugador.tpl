{include file="header.tpl"}
    <h1 class="list-group-item">Jugador</h1>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">nombre:{$jugador->nombre}</li>
        <li class="list-group-item">nacionalidad:{$jugador->nacionalidad}</li>
    </ul>
    <h2>su categoria:</h2>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">deporte:{$categoria->deporte}</li>
        <li class="list-group-item">genero:{$categoria->genero}</li>
    </ul>
{include file="footer.tpl"}