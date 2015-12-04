function getVue(address, type, placeRestantes, placeTotale, description){
	var result;
	result =  "<div class='row panel panel-default'>";
  	result += "<div class='panel-body'>";

	result += "<div class='col-xs-1'>";

	if (type=='manger'){
		result += "<span class='glyphicon glyphicon-cutlery'></span></div>";
	}else if(type=='dodo'){
		$result += "<span class='glyphicon glyphicon-bed'></span></div>";
	}else{
		result += type + "</div>";
	}

	result += "<div class='col-xs-3'>";
	result += address + "</div>";

	result += "<div class='col-xs-4'>";
	result += description+"</div>";

	result += "<div class='col-xs-2'>";
	result += placeRestantes +"/"+placeTotale;
	result += "<span class='glyphicon glyphicon-user'></span></div>";


	result += "<div class='col-xs-2'>";
	result += "<button type='button' class='btn btn-block'><span class='glyphicon glyphicon-ok'></span></button></div>";
	result +="</div></div>";

	return result;
}