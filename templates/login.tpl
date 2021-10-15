{include file='templates/header.tpl'}

<h1>{$titulo}</h1>

<form action="verify" method="POST">
    <input placeholder = "email" type="text" name="email" id="email" required>
    <input placeholder = "password" type="password" name="password" id="password" required>
    <input type="submit" value="Login">
    </form>

    <h4>{$error}</h4>

    <a href="home"> Volver a inicio público <a>

{include file='templates/footer.tpl'}