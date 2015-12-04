<?php
include './inc/basic_print.inc';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    print_head();
    ?>
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