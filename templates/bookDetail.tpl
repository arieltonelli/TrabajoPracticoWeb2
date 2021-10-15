{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<a href="logout">Log Out</a>

<div>

<h1>Titulo: {$libro->title}</h1>
<h2>Editorial: {$libro->name}</h2>
<h2>Autor: {$libro->author}</h2>
<h2>Precio: {$libro->price}</h2>

</div>


<ul>
<li><a href="books"> Volver a Lista Libros </a></li>
<li><a href="admHome"> Volver a Home Administrador </a></li>
<li><a href="logout">Log Out</a></li>
</ul>

{include file='templates/footer.tpl'}