<?php
include "./static/Header.html";
?>
<div class="row">
    <div class="col-sm-offset-2 col-sm-8"onload="init()">
      	<div class="input-group">
	      <input type="text" id="search_addr" class="form-control" placeholder="Adresse">
	      <span class="input-group-btn">
	        <button class="btn btn-default" id="search" type="button" onclick="setCenter()">Go!</button>
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
<?php
include "./static/Footer.html";
?>