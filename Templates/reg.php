<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <title>Registration</title>
</head>

<body>
    <h3>Registration</h3>
    <br>
    <form name="Registration" method="POST" action="">
        Enter youre name(с ограничением 2-20 символов, которыми могут быть буквы и цифры, первый символ обязательно буква):
        <input type="text" name="login" placeholder="login">
        <br>
        <span class="error"><?php echo $error['patternlog'];?></span><br>
        <br> Enter youre password(Строчные и прописные латинские буквы, цифры):
        <input type="password" name="pass" placeholder="password"/>
        <br>
        <span class="error"><?php echo $error['patternpass'];?></span>
        <br> Confirm youre password (Строчные и прописные латинские буквы, цифры):
        <input type="password" name="confirmpass" placeholder="confirmpassword"/>
        <br>
        <span class="error"><?php echo $error['patternconfirmpass'];?></span>
        <br>
        <input type="submit" valie="Acsept">
    </form>
</body>

</html>
