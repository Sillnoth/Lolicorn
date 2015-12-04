<?php
include './inc/basic_print.inc';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nom de l'application</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <script src="bootstrap/js/jquery-2.1.4.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<?php
print_nav();
?>
    <form role="form">

    <div class="form-group">
        <label for="login">Login:</label>
        <input required="true" id="login" type="text" class="form-control" placeholder="Email or username">
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input required="true" type="password" id="password" type="text" class="form-control" placeholder="Password">
    </div>

    <div class="form-group">
        <button id="btn_login" type="submit" class="btn btn-default">
            Login
        </button>
        <button id="btn_forgot" type="button" class="btn btn-default">
            Forgot password ?
        </button>
    </div>

    <div class="form-group">
        <button id="btn_inscription" type="submit" class="btn btn-default">
            Inscription
        </button>
    </div>

    </form>
</div>

</body>
</html>