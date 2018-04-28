<?php
require './admin/lib/php/adm_list_include.php';
$cnx = Connexion :: getInstance($dsn, $user, $pass);
session_start();
?>
<html>
    <head>

    <html>
        <head>
            <title id="titremain">Retro gaming</title>
        <header>        
            <img src="admin/images/banniere1.jpg" alt="banniere"/>
        </header>
        <h2 id="titrepr"> Retro gaming </h2>
        <link rel="stylesheet" type="text/css" href="admin/lib/css/bootstrap-4.0.0/dist/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="admin/lib/css/mycss.css" />
        <script src="admin/lib/js/jquery-3.2.1.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="admin/lib/css/bootstrap-4.0.0-beta-dist/js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js"></script>
        <script src="admin/lib/js/gt_functions.js"></script>

        <meta charset="utf8"/>

    </head>

    <body>
        <div class="container">
            <header>
                
                <a href="./pages/disconnect.php" class="float-right">Déconnexion</a>;

            </header>  </div>

    </div>

    <div class="container2">
        <nav>
            <?php
            if (file_exists('./lib/php/p_gt_menu.php')) {
                include ('./lib/php/p_gt_menu.php');
            }
            ?>   

        </nav>


        <div class="col-sm-10">

            <div class="row">
                <div class="col-sm-12"> <a href="./admin/index.php" class="float-right"> 
                        Administration</a> 
                </div>
            </div>
            <section id="main">
                <?php
                if (!isset($_SESSION['page'])) {
                    $_SESSION['page'] = "accueil";
                }
                if (isset($_GET['page'])) {
                    $_SESSION['page'] = $_GET['page'];
                }
                $path = './pages/' . $_SESSION['page'] . '.php';
                if (file_exists($path)) {
                    include ($path);
                } else {
                    ?>
                    <span class="lefcolumn">Page introuvable</span>
                    <meta http-refresh: Content="1;url=index.php?page=accueil"/>
                    <?php
                }
                ?>  
            </section>
        </div>



        <footer class="footer">
            <?php
            if (file_exists('./lib/php/p_gt_footer.php')) {
                include ('./lib/php/p_gt_footer.php');
            }
            ?>       
        </footer>  

    </div>
</div>
</div>		
</body>
</html>
