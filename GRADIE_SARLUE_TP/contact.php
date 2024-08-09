<?php 

try{
    $db = new mysqli("localhost", "root", "", "gradie_sarlue");

} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $msg = $_POST['msg'];

    $is_insert =  $db->query("INSERT INTO `data`(`name`, `email`, `msg`) VALUES ('$name','$email',' $msg')");

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="V07.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php 
include_once("navbar.php");
?>

<div class="contact-section02">
    <div class="contact-info02">
        <div><i class="fa-solid fa-location-dot"></i>Adresse, Pays, Ville</div>
        <div><i class="fa-solid fa-envelope"></i>gradiesarlu@gmail.com</div>
        <div><i class="fa-solid fa-phone"></i>+243978564287</div>
        <div><i class="fa-solid fa-clock"></i>Lundi - Vendredi De 8h30 à 17h30</div>
    </div>

    <div class="contact-form02">
        <h2>Contactez-nous</h2>
        <form class="contact02" action="" method="post">
            <input type="text" name="name" placeholder="Votrez Nom" class="text-box02" requete>
            <input type="email" name="email" placeholder="Votrez Email" class="text-box02" requete>
            <textarea name="msg" rows="5" placeholder="Ecrivez votre Message." requete></textarea>
            <input type="submit" name="submit" class="send-btn02" value="Envoyer">
        </form>
    </div>
</div>
</body>
</html>