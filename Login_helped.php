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
    <label for="tel">Tel:</label>
    <input class="form-control" id="tel">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
    <div class="form-group">
    <label for="name">Nom:</label>
    <input class="form-control" id="name">
  </div>
    <div class="form-group">
    <label for="surname">Prenom:</label>
    <input class="form-control" id="surname">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input required="true" type="password" class="form-control" id="pwd">
  </div>
   <div class="radio">
  <label><input type="radio" name="optradio">Male</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Female</label>
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