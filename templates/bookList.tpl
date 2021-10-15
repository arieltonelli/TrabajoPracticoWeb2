{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<a href="logout">Log Out</a>

<h1>{$titulo}</h1>
<ul>
{foreach from=$books item=$book}
    <li>
        <div>
        <a href="viewBook/{$book->id_book}">{$book->title}</a>
                        {$book->author}
                        {$book->name}
                        {$book->price}
        <a href="formUpdateBook/{$book->id_book}">Editar</a>
        <a href="deleteBook/{$book->id_book}">Borrar</a>
        </div>
    </li>
{/foreach}

</ul>
<h2> Crear Libro </h2>
<form action="createBook" method="POST">
    Titulo <input type="text" name="title" id="title">
    Autor <input type="text" name="author" id="author">
    Editorial <select name="id_publisher" id="id_publisher">
                <option selected>Seleccione una Editorial</option>
                {foreach from=$publishers item=$publisher}
                <option value="{$publisher->id_publisher}">{$publisher->name}</option>
                {/foreach}
              </select>
    Precio <input type="number" name="price" id="price">
    <input type="submit" value="Cargar">
    </form>
<ul>
<li><a href="admHome"> Volver a Home Administrador </a></li>
<li><a href="logout">Log Out</a></li>
</ul>
{include file='templates/footer.tpl'}