<?php
$info = new InfoClientDB($cnx);
$texte = $info->getInfoClient("accueil");
?>

<h1 id="titre"> Bienvenue sur le site n°1 en matière de jeux vidéos <h1>
        <h3 id="tdces">Les nouveautés et dernières tendances  <h3>
                <div class ="row">
                    <div class="col-sm-4" id="cadre"> 
                        </br>
                        <div id ="cadre3"> Le coin des devs </div>
                        </br>
                        Découvrez les dernière tendances en 
                        exclusivité sur <b>Retro-Gaming</b>
                        </br>
                        </br>
                        Dès aujourd'hui et jusqu'au <b>15/06</b>
                        bénéficiez de <b>15%</b> de réduction sur 
                        vos commandes en lignes. 
                        </br>
                        </br>
                        Valable sur tous les jeux, toutes 
                        les consoles et sans minimum 
                        d'achat. 
                        </br> </br>
                        Indiquez le code promo <b>EXAM</b> lors de la 
                        finalisation de la comande 
                        </br> </br>
                        </br>
                        <b> L'équipe Retro-Gaming</b>
                        </br>
                        </br>
                       
                         <img class="d-block w-100" src="./admin/images/gameover.png" alt="Premier">
                    </div>
                    <div class="col-sm-4" id = "cadre2">
                        <div id="gt_carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="./admin/images/gta.png" alt="Premier">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./admin/images/cod.png" alt="Deuxieme">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./admin/images/fc.png" alt="Troisieme">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./admin/images/ac.png" alt="Quatrieme">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#gt_carousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#gt_carousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div> 
                    </div>
                </div>







