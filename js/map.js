
			var maCarte;	
			var marker;
			var geocoder;
			var latln;
			var prev_infobulle;

			  function setCenter() {
			    //In this case it gets the address from an element on the page, but obviously you  could just pass it to the method instead
			    //var address = document.getElementById("search_addr").value;
			    var address = "7 rue veillon Nice ";
			    geocoder.geocode( { 'address': address}, function(results, status) {
			      if (status == google.maps.GeocoderStatus.OK) {
			        maCarte.setCenter(results[0].geometry.location);
			        maCarte.setZoom(8);
			      } else {
			        alert("Geocode was not successful for the following reason: " + status);
			      }
			    });
			  }


			function creatMarker(lat, lng){
				var optionsMarqueur1 = {
					position: new google.maps.LatLng(lat, lng),
					map: maCarte
				};

				return new google.maps.Marker(optionsMarqueur1);
			}

			function addList(marker, lien){

				//CrÃ©er un Ã©vÃ¨nement au clic sur le marker
				google.maps.event.addListener(marker, 'click', function(event) {
				 
				//Initialiser la variable dans laquelle va Ãªtre construit l'objet InfoBubble
				var lat = event.latLng.lat() ;
				var lng = event.latLng.lng() ;
				var infobulle;
				infobulle = new InfoBubble({
				map: maCarte,
				content:'<a href="'+ lien + '">aaa</a>',
				position: new google.maps.LatLng(lat, lng),   //CoordonnÃ©es latitude longitude du marker ********************** Modifier pour ne pas gener le marquer
				shadowStyle: 0,  // Style de l'ombre de l'infobulle (0, 1 ou 2)
				padding: 10,  // Marge interne de l'infobulle (en px)
				backgroundColor: 'rgb(255,255,255)',  // Couleur de fond de l'infobulle
				borderRadius: 0, // Angle d'arrondis de la bordure
				arrowSize: 10, // Taille du pointeur sous l'infobulle
				borderWidth: 3,  // Ã‰paisseur de la bordure (en px)
				borderColor: '#393', // Couleur de la bordure
				disableAutoPan: true, // DÃ©sactiver l'adaptation automatique de l'infobulle
				hideCloseButton: false, // Cacher le bouton 'Fermer'
				arrowPosition: 50,  // Position du pointeur de l'infobulle (en %)
				arrowStyle: 2,  // Type de pointeur (0, 1 ou 2)
				disableAnimation: false,  // DÃ©activer l'animation Ã  l'ouverture de l'infobulle
				minWidth :   220  // Largeur minimum de l'infobulle  (en px)
				});
				 
				  //Si on a dÃ©jÃ  une infobulle ouverte, on la ferme
				if( prev_infobulle )
				{
				prev_infobulle.close();
				}
				 
				  //La prÃ©cÃ©dent infobulle devient l'infobulle que l'on va ouvrir
				prev_infobulle = infobulle;
				 
				  //Enfin, on ouvre l'infobulle
				infobulle.open();
				});
			}

			function initialisation(){
				
				geocoder = new google.maps.Geocoder();
				var centreCarte = new google.maps.LatLng(46.697924, 6.299289);
				var optionsCarte = {
					zoom: 5,
					center: centreCarte,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				maCarte = new google.maps.Map(document.getElementById("carte"), optionsCarte);
				var prev_infobulle; 
				//---------------------- Marker -----------------//
				var marker = creatMarker(43.731008, 7.084550);
				addList(marker, 'biobelt.com');
				

				var marker1 = creatMarker(44.731008, 6.084550);
				addList(marker1, 'biobelt.com');

				setCenter();
			}
			 google.maps.event.addDomListener(window, 'load', initialisation);