<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentation produits</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<?php
include_once('navbar.php');
?>

<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    background: #333;
    overflow: hidden;
}

.container{
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: 40px;
    transform: translate(-50%, -50%);
    width: 1000px;
    height: 600px;
    background: #f5f5f5;
    box-shadow: 0 30px 50px #dbdbdb;
}

.container .slide .item{
    width: 200px;
    height: 300px;
    position: absolute;
    top: 50%;
    transform: translate(0, -50%);
    border-radius: 20px;
    box-shadow: 0 30px 50px #505050;
    background-position: 50% 50%;
    background-size: cover;
    display: inline-block;
    transition: 0.5s;
}

.slide .item:nth-child(1),
.slide .item:nth-child(2){
    top: 0;
    left: 0;
    transform: translate(0, 0);
    border-radius: 0;
    width: 100%;
    height: 100%;
}


.slide .item:nth-child(3){
    left: 50%;
}
.slide .item:nth-child(4){
    left: calc(50% + 220px);
}
.slide .item:nth-child(5){
    left: calc(50% + 440px);
}

/* here n = 0, 1, 2, 3,... */
.slide .item:nth-child(n + 6){
    left: calc(50% + 660px);
    opacity: 0;
}



.item .content{
    position: absolute;
    top: 50%;
    left: 100px;
    width: 300px;
    text-align: left;
    color: #eee;
    transform: translate(0, -50%);
    font-family: system-ui;
    display: none;
}


.slide .item:nth-child(2) .content{
    display: block;
}


.content .name{
    font-size: 40px;
    text-transform: uppercase;
    font-weight: bold;
    opacity: 0;
    animation: animate 1s ease-in-out 1 forwards;
}

.content .des{
    margin-top: 10px;
    margin-bottom: 20px;
    opacity: 0;
    animation: animate 1s ease-in-out 0.3s 1 forwards;
}

.content button{
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    opacity: 0;
    animation: animate 1s ease-in-out 0.6s 1 forwards;
}


@keyframes animate {
    from{
        opacity: 0;
        transform: translate(0, 100px);
        filter: blur(33px);
    }

    to{
        opacity: 1;
        transform: translate(0);
        filter: blur(0);
    }
}



.button{
    width: 100%;
    text-align: center;
    position: absolute;
    bottom: 20px;
}

.button button{
    width: 40px;
    height: 35px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    margin: 0 5px;
    border: 1px solid #000;
    transition: 0.3s;
}

.button button:hover{
    background: #ababab;
    color: #fff;
}
</style>

<div class="container">

  <div class="slide">

    <div class="item" style="background-image: url(Images/produits1.jpg);">
      <div class="content">
        <div class="name">Outils de mésure</div>
        <div class="des">Nous disposons d'une large gamme de produits de mésure.</div>
        <button>Prochainement</button>
      </div>
    </div>
    <div class="item" style="background-image: url(Images/produits2.jpg);">
      <div class="content">
        <div class="name">Outils de mecanique</div>
        <div class="des">Nous disposons d'une large gamme de produits pour la mecanique.</div>
        <button>Prochainement</button>
      </div>
    </div>
    <div class="item" style="background-image: url(Images/produits3.jpg);">
      <div class="content">
        <div class="name">Mêches de toutes sorte</div>
        <div class="des">Nous disposons d'une large gamme de produits mêches.</div>
        <button>Prochainement</button>
      </div>
    </div>
    <div class="item" style="background-image: url(Images/produits4.jpg);">
      <div class="content">
        <div class="name">Vis, Ecrous, Boulons</div>
        <div class="des">Nous disposons d'une large gamme de produits, Vis, Ecrous et Boulons.</div>
        <button>Prochainement</button>
      </div>
    </div>
    <div class="item" style="background-image: url(Images/produits5.jpg);">
      <div class="content">
        <div class="name">Camion de transport</div>
        <div class="des">Nous disposons d'une large gamme de produits de camion pour vos transport de produits.</div>
        <button>Prochainement</button>
      </div>
    </div>
    <div class="item" style="background-image: url(Images/produits6.jpg);">
      <div class="content">
        <div class="name">Engin de travail</div>
        <div class="des">Nous disposons d'une large gamme d'engin pour tout type de travail.</div>
        <button>Prochainement</button>
      </div>
    </div>

  </div>

  <div class="button">
    <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
    <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
  </div>

</div>

<script>
    let next = document.querySelector('.next')
let prev = document.querySelector('.prev')

next.addEventListener('click', function(){
    let items = document.querySelectorAll('.item')
    document.querySelector('.slide').appendChild(items[0])
})

prev.addEventListener('click', function(){
    let items = document.querySelectorAll('.item')
    document.querySelector('.slide').prepend(items[items.length - 1])
})
</script>
</body>
</html>