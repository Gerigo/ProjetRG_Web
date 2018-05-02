<?php
if (isset($_GET['id'])) {
    $_SESSION['id_jeu'] = $_GET['id'];
}
if (isset($_SESSION['id_jeu'])) {
    $jeux = new JeuxDB($cnx);
    $monjeu = $jeux->getJeux($_SESSION['id_jeu']);
}

if (isset($_GET['acheter'])) {
    $commande = new CommandeDB($cnx);
    $commande->addCommande(array("id_client" => $_SESSION['mon_client'], "id_jeu" => $_SESSION['id_jeu'], "prix" => $monjeu[0]['prix']));
    
    
    ?>
    <meta http-equiv = "refresh": content = "2;url=index.php?page=catalogue">
    <?php
   
}
?>

</br></br>
<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" id="form_commande">
    <table class="table table-hover table-dark">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Plateforme</th>
                <th scope="col">Nom du jeu </th>
                <th scope="col">Genre</th>
                <th scope="col">Prix</th>
                <th scope="col">Panier</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><img src="./admin/images/<?php print $monjeu[0]['image'] ?>" alt="Jeux"/></th>
                <td> <?php
                    print utf8_decode($monjeu[0]['console']);
                    ?></td>
                <td>  <?php
                    print utf8_decode($monjeu[0]['nom']);
                    ?></td>
                <td> <?php
                    print utf8_decode($monjeu[0]['genre']);
                    ?></td>
                <td> <?php
                    print utf8_decode($monjeu[0]['prix']);
                    ?>€</td>
                <td>  
                    <input type="submit" button type="button" name="acheter" id="acheter" value="Ajouter au panier" class="btn btn-secondary">&nbsp;  

                    <button type="button" value="Annuler" class="btn btn-secondary" onClick="javascript:document.location.href = 'index.php?page=catalogue'" /> Retour  </button>

                </td>

            </tr>




        </tbody>
    </table>


    <?php
    ?>

</div> 