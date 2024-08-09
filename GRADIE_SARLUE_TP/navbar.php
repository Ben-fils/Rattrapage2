<!DOCTYPE html>
   <html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
      
      <title>Barre de navigation responsive</title>
      <style>

@import url("https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;500&display=swap");

:root {
  --header-height: 3.5rem;

  --white-color: hsl(0, 0%, 100%);
  --black-color: hsl(0, 0%, 0%);

  --body-font: "Montserrat Alternates", sans-serif;
  --h1-font-size: 1.5rem;
  --normal-font-size: .938rem;

  --font-regular: 400;
  --font-medium: 500;

  --z-tooltip: 10;
  --z-fixed: 100;
}

@media screen and (min-width: 1150px) {
  :root {
    --normal-font-size: 1rem;
  }
}

* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

html {
  scroll-behavior: smooth;
}

body {
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
}

ul {
  list-style: none;
}

a {
  text-decoration: none;
}

.container002 {
  max-width: 1120px;
  margin-inline: 1.5rem;
}

.header002 {
  position: fixed;
  width: 100%;
  top: 0;
  left: 0;
  background-color: var(--black-color);
  z-index: var(--z-fixed);
}

.nav002 {
  position: relative;
  height: var(--header-height);
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.nav__logo002 {
  color: var(--white-color);
  font-weight: var(--font-medium);
}

.nav__close002, 
.nav__toggle002 {
  display: flex;
  color: var(--white-color);
  font-size: 1.5rem;
  cursor: pointer;
}

@media screen and (max-width: 1150px) {
  .nav__menu002 {
    position: fixed;
    left: -100%;
    top: 0;
    background-color: var(--black-color);
    width: 100%;
    height: 100%;
    padding: 6rem 3.5rem 4.5rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: left .4s;
  }

  .nav__item002 {
    transform: translateX(-150px);
    visibility: hidden;
    transition: transform .4s ease-out, visibility .4s;
  }

  .nav__item002:nth-child(1) {
    transition-delay: .1s;
  }
  .nav__item002:nth-child(2) {
    transition-delay: .2s;
  }
  .nav__item002:nth-child(3) {
    transition-delay: .3s;
  }
  .nav__item002:nth-child(4) {
    transition-delay: .4s;
  }
  .nav__item002:nth-child(5) {
    transition-delay: .5s;
  }
}

.nav__list002, 
.nav__social002 {
  display: flex;
}

.nav__list002 {
  flex-direction: column;
  row-gap: 3rem;
}

.nav__link002 {
  position: relative;
  color: var(--white-color);
  font-size: var(--h1-font-size);
  font-weight: var(--font-medium);
  display: inline-flex;
  align-items: center;
  transition: opacity .4s;
}

.nav__link002 i {
  font-size: 2rem;
  position: absolute;
  opacity: 0;
  visibility: hidden;
  transition: opacity .4s, visibility .4s;
}

.nav__link002 span {
  position: relative;
  transition: margin .4s;
}

.nav__link002 span::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -6px;
  width: 0;
  height: 2px;
  background-color: var(--white-color);
  transition: width .4s ease-out;
}


.nav__link002:hover span {
  margin-left: 2.5rem;
}

.nav__link002:hover i {
  opacity: 1;
  visibility: visible;
}

.nav__link002:hover span::after {
  width: 100%;
}

.nav__list002:has(.nav__link002:hover) .nav__link002:not(:hover) {
  opacity: .4;
}

.nav__close002 {
  position: absolute;
  top: 1rem;
  right: 1.5rem;
}

.nav__social002 {
  column-gap: 1rem;
}

.nav__social-link002 {
  color: var(--white-color);
  font-size: 1.5rem;
  border: 2px solid #fff;
  border-radius: 10px;
  padding: 5px 10px;
  transition: transform .4s;
}

.nav__social-link002:hover {
  transform: translateY(-.25rem);
}

.show-menu002 {
  left: 0;
}

.show-menu002 .nav__item002 {
  visibility: visible;
  transform: translateX(0);
}

@media screen and (min-width: 1150px) {
  .container002 {
    margin-inline: auto;
  }

  .nav002 {
    height: calc(var(--header-height) + 2rem);
  }

  .nav__toggle002, 
  .nav__close002 {
    display: none;
  }

  .nav__link002 {
    font-size: var(--normal-font-size);
  }

  .nav__link002 i {
    font-size: 1.5rem;
  }

  .nav__list002 {
    flex-direction: row;
    column-gap: 3.5rem;
  }

  .nav__menu002 {
    display: flex;
    align-items: center;
    column-gap: 3.5rem;
  }
}

      </style>
   </head>
   <body>
      <header class="header002" id="header002">
         <nav class="nav002 container002">

            <a href="index.php" class="nav__logo002">GRADIE SARLU</a>

            <div class="nav__menu002" id="nav-menu002">
               <ul class="nav__list002">
                  <li class="nav__item002">
                     <a href="index.php" class="nav__link002">
                        <i class="ri-home-4-line"></i>
                        <span>ACCUEIL</span>
                     </a>
                  </li>

                  <li class="nav__item002">
                     <a href="about.php" class="nav__link002">
                        <i class="ri-id-card-line"></i>
                        <span>À PROPOS DE NOUS</span>
                     </a>
                  </li>

                  <li class="nav__item002">
                     <a href="product.php" class="nav__link002">
                        <i class="ri-shopping-bag-line"></i>
                        <span>PRODUITS</span>
                     </a>
                  </li>
                  <li class="nav__item002">
                     <a href="contact.php" class="nav__link002">
                        <i class="ri-customer-service-2-line"></i>
                        <span>CONTACTS</span>
                     </a>
                  </li>
               </ul>

               <!-- button fermeture (remixicon pour les icons)-->
               <div class="nav__close002" id="nav-close002">
                  <i class="ri-close-large-line"></i>
               </div>

               <div class="nav__social002">
               <a href="home.php" class="nav__social-link002">
                  <i class="ri-login-circle-line">Connexion</i>
                  </a>
                  <a href="https://web.facebook.com/p/Maison-Gradie-Sarlu-100064276205372/?_rdc=1&_rdr" target="_blank" class="nav__social-link002">
                  <i class="ri-facebook-circle-line"></i>
                  </a>
               </div>
            </div>

            <div class="nav__toggle002" id="nav-toggle002">
               <i class="ri-menu-line"></i>
            </div>

         </nav>

      </header>

      <script></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>