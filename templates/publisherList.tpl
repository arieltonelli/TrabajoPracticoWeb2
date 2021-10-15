{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<a href="logout">Log Out</a>
<h1>{$nombre}</h1>
<ul>
{foreach from=$publishers item=$publisher}
    <li>
        <div>
        <a href="viewPublisher/{$publisher->id_publisher}">{$publisher->name}</a>
                                {$publisher->language}
        <a href="formUpdatePublisher/{$publisher->id_publisher}">Editar</a>
        <a href="deletePublisher/{$publisher->id_publisher}">Borrar</a>
        </div>
    </li>
{/foreach}
</ul>

<h2> Crear Editorial </h2>
<form action="createPublisher" method="POST">
    Nombre <input type="text" name="name" id="name">
    Idioma <input type="text" name="language" id="language">
    <input type="submit" value="Cargar">
</form>
<ul>
<li><a href="admHome"> Volver a Home Administrador </a></li>
<li><a href="logout">Log Out</a></li>
</ul>
{include file='templates/footer.tpl'}