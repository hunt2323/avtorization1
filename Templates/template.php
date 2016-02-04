<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <title>Autorization</title>
</head>

<body>
    <h3>Autorization</h3>
    <br>
    <form name="Autorization" method="POST" action="">
       <span class="error"><?php echo $error['avtoriz'];?></span><br>
        Enter youre name(с ограничением 2-20 символов, которыми могут быть буквы и цифры, первый символ обязательно буква):
        <input type="text" name="login" placeholder="login">
        <br>
        <span class="error"><?php echo $error['patternlog'];?></span><br>
        <br> Enter youre password(Строчные и прописные латинские буквы, цифры):
        <input type="password" name="pass" placeholder="password"/>
        <br>
        <span class="error"><?php echo $error['patternpass'];?></span>
        <br>
        <input type="submit" valie="Acsept">
    </form>

    <?php //var_dump($_POST[ 'login']); var_dump($_POST[ 'pass']); ?>

</body>

</html>
