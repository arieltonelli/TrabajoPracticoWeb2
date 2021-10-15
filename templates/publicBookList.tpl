{include file='templates/header.tpl'}
{include file='templates/publicNav.tpl'}

<h1>{$titulo}</h1>
<ul>
{foreach from=$books item=$book}
    <li>
        <div>
        <a href="publicViewBook/{$book->id_book}">{$book->title}</a>
                        {$book->author}
                        {$book->name}
                        {$book->price}
        </div>
    </li>
{/foreach}

</ul>
<a href="home"> Volver a Home </a>

{include file='templates/footer.tpl'}