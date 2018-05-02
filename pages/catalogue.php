
<?php
$info = new JeuxDB($cnx);
$liste_jeux = $info->getListeJeux();
$nbrJeux = count($liste_jeux);
//var_dump($liste_jeux);
?>


<?php
for ($i = 0; $i < $nbrJeux; $i++) {
    ?>

    </br></br>
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
                <th scope="row"><img src="./admin/images/<?php print $liste_jeux[$i]['image'] ?>" alt="Jeux"/></th>
                <td> <?php
                    print utf8_decode($liste_jeux[$i]['console']);
                    ?></td>
                <td>  <?php
                    print utf8_decode($liste_jeux[$i]['nom']);
                    ?></td>
                <td> <?php
                    print utf8_decode($liste_jeux[$i]['genre']);
                    ?></td>
                <td> <?php
                    print utf8_decode($liste_jeux[$i]['prix']);
                    ?>€</td>
                <td>  <?php
                    if (isset($_SESSION['client'])) {
                        ?>
                        <a href="index.php?page=commande&id=<?php print $liste_jeux[$i]['id_jeu']; ?>">
                            Ajouter au panier 
                        </a>
                    <?php
                    } else {
                        print " Vous devez être connecté pour commander";
                    }
                    ?></td>
            </tr>
        </tbody>
    </table>


    <?php
}
?>

</div>  