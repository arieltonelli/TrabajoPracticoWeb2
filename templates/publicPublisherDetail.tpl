{include file='templates/header.tpl'}
{include file='templates/publicNav.tpl'}

<div>

<h1>Nombre: {$editorial->name}</h1>
<h2>Idioma: {$editorial->language}</h2>

</div>

{foreach from=$books item=$book}
   <ul> 
   <li>     
        <a href="publicViewBook/{$book->id_book}">{$book->title}</a>
                        {$book->author}
                        {$book->id_publisher}
                        {$book->price}
        
    </li>
    </ul>
{/foreach}
<div>
<ul>
<li><a href="publicCategories"> Volver a Editoriales </a></li>
<li><a href="home"> Volver a Home </a></li>
</ul>
</div>
{include file='templates/footer.tpl'}