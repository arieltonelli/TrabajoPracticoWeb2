{include file='templates/header.tpl'}
{include file='templates/publicNav.tpl'}
<div>

<h1>Titulo: {$libro->title}</h1>
<h2>Editorial: {$libro->name}</h2>
<h2>Autor: {$libro->author}</h2>
<h2>Precio: {$libro->price}</h2>

<ul>
<li><a href="publicBooks"> Volver a Listado Libros </a></li>
<li><a href="home"> Volver a Home </a></li>
</ul>
</div>

{include file='templates/footer.tpl'}