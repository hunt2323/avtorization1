<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css" />
        <title>Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../style.css" />
    <!-- Latest compiled and minified JavaScript -->
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>

    <body>
       <div class="container">

<div class="row text-center col-sm-4 col-sm-offset-4 well">
        <h3>Registration</h3>
            <form name="Registration" method="POST" action="">
            <div class="form-group">
                <label for="login">Enter youre name:</label>
            <input type="text" class="form-control" name="login" placeholder="login" id="login">
            </div>
            <span class="error"><?php echo $error['patternlog'];?></span><br>
            <div class="form-group">
                <label for="pass">Enter youre password:</label>
            <input type="password" name="pass" class="form-control" placeholder="password" id="pass" />
            </div>
            <span class="error"><?php echo $error['patternpass'];?></span>
             <label for="pass">Confirm youre password:</label>
            <input type="password" name="confirmpass" placeholder="confirmpassword"/>
            <br>
            <span class="error"><?php echo $error['patternconfirmpass'];?></span><br>
            <input type="submit" valie="Acsept">
        </form>
</div>
   </div>
    </body>
</html>
