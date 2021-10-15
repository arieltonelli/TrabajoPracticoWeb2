{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<a href="logout">Log Out</a>
<div>

<h1>Nombre: {$editorial->name}</h1>
<h2>Idioma: {$editorial->language}</h2>
<a href="home" > Volver a Home (Libros) </a>
<a href="category" > Volver a Editoriales </a>
</div>

{foreach from=$books item=$book}
    <li>
        <div>
        <a href="viewBook/{$book->id_book}">{$book->title}</a>
                        {$book->author}
                        {$book->id_publisher}
                        {$book->price}
        <a href="deleteBook/{$book->id_book}">Borrar</a>
        </div>
    </li>
{/foreach}
<a href="category"> Volver a Lista Editoriales </a>
<a href="admHome"> Volver a Home Administrador </a>
<a href="logout">Log Out</a>

{include file='templates/footer.tpl'}