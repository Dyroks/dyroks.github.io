<!DOCTYPE html>

<html>
    
    <head>
        <title>Ajouter - D3Transmo</title>
        <link rel="stylesheet" href="lastsidebar.css" />
        <link rel="stylesheet" href="forms.css" />
        <?php include("head.php"); ?>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    
    <body>
        <div id="wrapper">

            <div id="sidebar">
                <ul class="menu">
                    <a class="menu-link" href="index.html"> <li class="menu-item"><img src="home.png"><br><span class="textlist">Accueil</span></li></a>
                    <a class="menu-link" href="list.php"> <li class="menu-item"><img src="list.png"><br><span class="textlist">Toutes les transmo.</span></li></a>
                    <a class="menu-link" href="fav.php"> <li class="menu-item"><img src="fav.png"><br><span class="textlist">Favories</span></li></a>
                    <a class="menu-link-last" href="add.php"> <li class="menu-current"><img src="add.png"><br><span class="textlist">Ajouter une transmo.</span></li></a>
                </ul>
            </div>
            <?php include("logo.php"); ?>
            
            

            <div id="main">
                
                <form action="cible.php" method="post" class="pure-form" enctype="multipart/form-data">
                    Nom de la transmo : <br /><br />
                    <input maxLength="22" type="text" name="nom" class="pure-input-rounded" />
                    <br /><br /><br /><br /><br />
                    
                    Image de la transmo :<br /><br />
                    <div class="custom-file-upload">
                        <input type="file" name="upload" id="file" accept='image/*' />
                    </div>
                    <br /><br /><br /><br /><br />
                    
                    Classe :<br /><br />
                    <select name="classe">
                        <option selected disabled>Choisissez la classe</option>
                        <option value="dh">DH</option>
                        <option value="sorcier">Sorcier</option>
                        <option value="moine">Moine</option>
                        <option value="barbare">Barbare</option>
                        <option value="feticheur">Féticheur</option>
                        <option value="croisé">Croisé</option>
                    </select>
                    <br /><br /><br /><br /><br />
                    
                    Description :<br /><br />
                    <textarea maxLength="2000" name="message" rows="20" cols="55" class="pure-input-rounded"></textarea>
                    <br /><br /><br /><br /><br />
                    
                    <div class="g-recaptcha" data-sitekey="6LfagRcTAAAAAJ6kJ8eX7fWvSLW9Gb0R66jw65Sp"></div>
                    <br /><br />
                    
                    <input type="submit" value="Envoyer" class="btn" />
                    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                </form>
                
            </div>





            <?php include("footer.php"); ?>
            <?php include("sidebarjs.php"); ?>
            <?php include("inputjs.php"); ?>
            <script>
                function maxLength(el) {    
                if (!('maxLength' in el)) {
                    var max = el.attributes.maxLength.value;
                    el.onkeypress = function () {
                        if (this.value.length >= max) return false;
                    };
                }
            }

            maxLength(document.getElementById("message"));
            
            </script>

        </div>
    </body>
</html>