<?php
include "./static/Header.html";
include "service_dispo_vue.php";
?>
<div class="row">
    <div class="col-sm-offset-2 col-sm-8">
      	<div class="input-group">
	      <input id="search_addr" type="text" class="form-control" placeholder="Adresse">
	      <span class="input-group-btn">
	        <button class="btn btn-default" type="button">Go!</button>
	      </span>
    	</div><!-- /input-group -->
	</div>
</div>
<div class="row">
    <div class="col-sm-offset-2 col-sm-8">
    	<div id = "carte" style="height:300px;">
    	</div>
    </div>
</div>
<div class="row">
    <div class="col-sm-offset-2 col-sm-8">

<?php echo getVue("13 rue de mon cul", "manger", "4"); ?>
	</div>
</div>
<?php
include "./static/Footer.html";
?>