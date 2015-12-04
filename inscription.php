<?php
include "./static/Header.html";
?>
<div class="row">
    <div class="col-sm-offset-3 col-sm-6">

        <form role="form">

            <div class="form-group">
                <label for="login">Email:</label>
                <input required="true" id="email" type="text" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="password">Mot de passe:</label>
                <input required="true" type="password" id="password" type="text" class="form-control" placeholder="Mot de passe">
            </div>

            <div class="form-group">
                <label for="password">Telephone:</label>
                <input required="true" type="telephone" id="telephone" type="text" class="form-control" placeholder="Telephone">
            </div>
            <div class="form-group">
                <label for="password">Nom:</label>
                <input required="true" type="nom" id="nom" type="text" class="form-control" placeholder="Nom">
            </div>
            <div class="form-group">
                <label for="password">Prenom:</label>
                <input required="true" type="prenom" id="prenom" type="text" class="form-control" placeholder="Prenom">
            </div>

            <div class="form-group">
                <button id="btn_inscription" type="submit" class="btn btn-default"
                    onclick="window.location.href='/inscription.php'">
                    Inscription
                </button>
            </div>

        </form>
    </div>
</div>
<?php
include "./static/Footer.html";
?>