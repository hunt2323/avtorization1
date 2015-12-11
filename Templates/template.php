<!DOCTYPE html>
<html>

<head>
    <title>Autorization</title>
</head>

<body>
    <h3>Autorization</h3>
    <br>
    <form name="Autorization" method="POST" action="">
        Enter youre name(с ограничением 2-20 символов, которыми могут быть буквы и цифры, первый символ обязательно буква):
        <input type="text" name="login" placeholder="login">
        <span class="error"><?php $error['login']?></span>
        <br>
        <br> Enter youre password(Строчные и прописные латинские буквы, цифры):
        <input type="password" name="pass" placeholder="password"/>
        <br>
        <br>
        <input type="submit" valie="Acsept">
    </form>

    <?php var_dump($_POST[ 'login']); var_dump($_POST[ 'pass']); ?>

</body>

</html>
