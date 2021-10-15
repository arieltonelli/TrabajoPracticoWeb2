{include file='templates/header.tpl'}
{include file='templates/publicNav.tpl'}
<h1>{$nombre}</h1>
<ul>
{foreach from=$publishers item=$publisher}
    <li>
        <div>
        <a href="viewPublicPublisher/{$publisher->id_publisher}">{$publisher->name}</a>
                                {$publisher->language}
        </div>
    </li>
{/foreach}

</ul>
<a href="home"> Volver a Home </a>
{include file='templates/footer.tpl'}