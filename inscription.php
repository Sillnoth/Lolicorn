<?php
include './inc/basic_print.inc';
?>

<!DOCTYPE html PUBLIC
        "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <?php
    print_head();
    ?>
</head>
<body>


<div class="container">
    <?php
    print_nav();
    ?>

 <form role="form">
     <div class="form-group">
         <label for="username">Login:</label>
         <input required="true" name="username" id="username" type="text" class="form-control" placeholder="Username">
     </div>
     <div class="form-group">
         <label for="password">Mot de passe:</label>
         <input required="true" name="password" type="password" id="password" class="form-control" placeholder="Mot de passe">
         <input required="true" type="password" id="password_valid" class="form-control" placeholder="Mot de passe">
     </div>
     <div class="form-group">
         <label for="tel">téléphone:</label>
        <input class="form-control" name="tel" id="tel" placeholder="téléphone">
     </div>
      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="email">
      </div>
        <div class="form-group">
        <label for="name">Nom:</label>
        <input class="form-control" name="name" id="name" placeholder="nom">
      </div>
        <div class="form-group">
        <label for="surname">Prénom:</label>
        <input class="form-control" name="surname" id="surname" placeholder="Prénom">
      </div>
       <div class="radio">
      <label><input type="radio" name="optradio">Mâle</label>
    </div>
<div class="radio">
  <label><input type="radio" name="optradio">Femelle</label>
</div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div><!-- /.container -->

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>