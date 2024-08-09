<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCUEIL</title>
    <link rel="stylesheet" href="V0.css">
</head>
<body>
    <?php 
    include_once("navbar.php");
    ?>
    <section id="home">
     <h2>Une Mains-d'ouevre à porter de mains</h2>
     <h4>Louer tout type de matériels de travail</h4>
     <p>" United de stand ,Divided we fall"</p>
     
     <a href="contact.php" class="btn-contact home-btn">Nous contacter</a>

    </section>
    <! ----- section a propos --------!>
    <section id="a__propos">
        <h1 class="title02">à propos</h1>
        <div class="img-a-propos">
        <div class="left02">
            <video src="Videos/a__propos.mp4" autoplay loop muted></video>
        </div>
        <div class="right02">
            <h3>Nous vous permettrons d'avoir accés a plusieurs solution dans le deroulément de votre projet.</h3>
            <p>"United de stand ,Divided we fall"</p>
            <a href="about.php">Lire plus sur nous.</a>
        </div>
        </div>

    </section>

    <! ----------- section produit ----------- !>

    <section id="prod__popu">
        <h1 class="title02">Produit populaires</h1>
        <div class="content02">
            <div class="box02">
                <img src="Images/produits1.jpg" alt="">
                <div class="content02">
                    <div>
                        <h4>Outils de mésure</h4>
                        <p>Nos outils de mesure on faits leurs preuves.</p>
                        <p>Louer les, sans tarder.</p>
                        <a href="product.php">Voir en details.</a>
                    </div>
                </div>
            </div>
            <div class="box02">
                <img src="Images/produits2.jpg" alt="">
                <div class="content02">
                    <div>
                        <h4>Outils mecanique</h4>
                        <p>Nos outils permette une bonne pratique technique.</p>
                        <p>Louer les, sans tarder</p>
                        <a href="product.php">Voir en details.</a>
                    </div>
                </div>
            </div>
            <div class="box02">
                <img src="Images/produits3.jpg" alt="">
                <div class="content02">
                    <div>
                        <h4>Mêches</h4>
                        <p>Nos mêches sont de qualité supérieur.</p>
                        <p>Louer les, sans tarder.</p>
                        <a href="product.php">Voir en details.</a>
                    </div>
                </div>
            </div>
            <div class="box02">
                <img src="Images/produits4.jpg" alt="">
                <div class="content02">
                    <div>
                        <h4>Vis, Ecrous, Boulons</h4>
                        <p>Nos vis, ecrous et boulons pourrons vous satisfaire.</p>
                        <p>Louer les, sans tarder</p>
                        <a href="product.php">Voir en details.</a>
                    </div>
                </div>
            </div>
            <div class="box02">
                <img src="Images/produits5.jpg" alt="">
                <div class="content02">
                    <div>
                        <h4>Camion de transport</h4>
                        <p>Deplacé vos affaires en toutes sécurité.</p>
                        <p>Louer les, sans tarder</p>
                        <a href="product.php">Voir en details.</a>
                    </div>
                </div>
            </div>
            <div class="box02">
                <img src="Images/produits6.jpg" alt="">
                <div class="content02">
                    <div>
                        <h4>Engin</h4>
                        <p>Nous sommes confiant dans les future usage de nos engins.</p>
                        <p>Lorem ipsum dolor sit.</p>
                        <a href="product.php">Voir en details.</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <! ---------- footer section ------------- !>

    <footer>
        <p>Nous somme a votre disposition <span>Gradie sarlu</span></p>
    </footer>
</body>
</html>