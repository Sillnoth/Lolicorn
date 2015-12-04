<?php
include "./static/Header.php";
?>

<div class="row">
    <div class="col-sm-offset-3 col-sm-6">

        <form role="form">

            <div class="form-group">
                <label for="adresse">Adresse:</label>
                <input required="true" id="adresse" type="text" class="form-control" placeholder="adresse">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <input required="true" type="description" id="description" type="text" class="form-control" placeholder="Description">
            </div>

            <div class="form-group">
                <label for="nombrePlace">Nombre de Place:</label>
                <input required="true" type="nombrePlace" id="nombrePlace" type="text" class="form-control" placeholder="Nombre de Place">
            </div>

			<div class="form-group">Type d'aide:
              <select class="selectpicker" name="typeAide">
                <option>manger</option>
                <option>dodo</option>
              </select>
            </div>

            <div class="form-group">
                <button id="btn_login" type="submit" class="btn btn-default">
                    Valider
                </button>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-sm-offset-3 col-sm-6">
    <div> Je propose déjà: </div>

    ICI LISTER LES ACTIONS DEJA FAITE
    </div>
</div>

<?php
include "./static/Footer.html";
?>