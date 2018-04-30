   <div class="col-sm-11" id="cadreconnect"> <h3 id="inscription">Formulaire d'inscription </h3>

<?php
if (isset($_GET['envoyer'])) {
    //permet d'extraire les champs du tableau $_GET pour simplifier
    extract($_GET, EXTR_OVERWRITE);
    $client = new ClientDB($cnx);
    //var_dump($_GET);
    $client->addClient($_GET);
    $reussi = "Inscription cloturée avec succès ";
}
?>


<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" id="form_inscription">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <input type="text" id="nom" name="nom" size="30" placeholder="Votre nom"/>
        </div>
        <div class="col-sm-4">
            <input type="text" id="prenom" name="prenom" size="30" placeholder="Votre prénom"/>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <input type="email" id="mail" name="mail" size="30" placeholder="Votre email"/>
        </div>
        <div class="col-sm-4">
            <input type="email" id="email2" name="email2" size="30" placeholder="Confirmez votre email"/>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <input type="password" id="mdp" name="mdp" size="30" placeholder="Mot de passe"/>
        </div>
        <div class="col-sm-4">
            <input type="password" id="mdp2" name="mdp2" size="30" placeholder="Confirmez votre mot de passe"/>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <input type="text" id="adresse" name="adresse" size="30" placeholder="Votre adresse"/>
        </div>
        <div class="col-sm-4">
            <input type="text" id="ville" name="ville" size="30" placeholder="Votre ville"/>
        </div>
    </div>
    </br>
    <div class="row">
    
        <div class="col-sm-8">
            <input type="text" id="tel" name="tel" size="30" placeholder="+32    "/>
        </div>
    </div>
    </br></br>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-2">
            <input type="submit" name="envoyer" id="envoyer" value="Envoyer" class="pull-right">&nbsp;  
        </div>
        <div class="col-sm-6">
            <input type="reset" id="reset" value="Annuler" class="pull-right"/>
        </div>
    </div>
    <div class="row form_reussi">
        <div class="col-sm-1"></div>
        <div class="col-sm-4 reussi">
<?php
if (isset($reussi)) {
    print $reussi;
}
?>
        </div>
    </div>
</form>
   </div>