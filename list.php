<!DOCTYPE html>

<html>
    
    <head>
        <title>Liste - D3Transmo</title>
        <?php include("head.php"); ?>
    </head>
    
    <body>
        <div id="wrapper">

            <div id="sidebar">
                <ul class="menu">
                    <a class="menu-link" href="index.html"> <li class="menu-item"><img src="home.png"><br><span class="textlist">Accueil</span></li></a>
                    <a class="menu-link" href="list.php"> <li class="menu-current"><img src="list.png"><br><span class="textlist">Toutes les transmo.</span></li></a>
                    <a class="menu-link" href="fav.php"> <li class="menu-item"><img src="fav.png"><br><span class="textlist">Favories</span></li></a>
                    <a class="menu-link-last" href="add.php"> <li class="menu-item"><img src="add.png"><br><span class="textlist">Ajouter une transmo.</span></li></a>
                </ul>
            </div>
            <?php include("logo.php"); ?>
            
            
            <div id="main">
            
            
                <?php
                try
                {
                    $bdd = new PDO('mysql:host=localhost;dbname=d3transmo;charset=utf8', 'root', '');
                }
                catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }

                $reponse = $bdd->query('SELECT name,file_name,class  FROM transmos');

                while ($donnees = $reponse->fetch())
                {
                ?>
                    <div class="array">
                        <div class="thumbnail">
                            <img src="uploads/<?php echo $donnees['file_name'] ?>" alt="Image" />
                        </div>
                        
                        <div class="title">
                            <?php echo $donnees['name'] ?>
                        </div>
                        
                        <div class="classe">
                            <?php echo $donnees['class'] ?>
                        </div>
                    </div>
                <?php
                }

                $reponse->closeCursor();

                ?>
            
            
                
            </div>





            <?php include("footer.php"); ?>
            <?php include("sidebarjs.php"); ?>

        </div>
    </body>
</html>