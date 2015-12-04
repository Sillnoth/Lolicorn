<?php

function getVue($address, $type, $placeRestantes){
	$result =  "<div class='row panel panel-default'>";
  	$result .= "<div class='panel-body'>";

	$result .= "<div class='col-xs-4'>";
	$result .= $type . "</div>";

	$result .= "<div class='col-xs-4'>";
	$result .= $address . "</div>";

	$result .= "<div class='col-xs-4'>";
	$result .= $placeRestantes . "</div>";

	$result .="</div></div>";

	return $result;
}

?>