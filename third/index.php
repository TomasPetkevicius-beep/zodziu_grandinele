<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ae58c7a07e.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <title>Trečia grandinėlė</title>
    
</head>
<body>
<span><img id="logo" src="img/LOGO.png">
    <h5 id="cf"><a href="/php/tomas_projektas/index.php"><i class="fas fa-space-shuttle"></i>Į pradžią</i></a></h5></span>
<br>
<div>
<form action="<?php $_PHP_SELF; ?>" method="POST" id="quests">
        
<h4>Graikijos sala</h4>
    <input type="text" name="first" placeholder="atsakymas" method="POST">

    <h4>Sutartinis ženklų rinkinys</h4>
    <input type="text" name="second" placeholder="atsakymas" method="POST">

    <h4>Vaismedžiais ir uogakrūmiais apsodintas plotas</h4>
    <input type="text" name="third" placeholder="atsakymas" method="POST">

    <h4>Tinginys iš "Ledynmečio"</h4>
    <input type="text" name="fourth" placeholder="atsakymas" method="POST">
    <br>
    <button action="<?php $_PHP_SELF; ?>" method="POST" id="quests">Pateikti</button>
    </form>

    <img src="img/bulb-1.png" alt="bulb">
</div>
<?php
function third(){

    if (empty($_POST['first']) || empty($_POST['second']) || empty($_POST['third']) || empty($_POST['fourth'])){
        
            echo "<script>alert('Prašome užpildyti visus laukelius!');</script>";
        }     
    else if ($_POST['first'] == "Rodas" && $_POST['second'] == "kodas" && $_POST['third'] == "sodas" && $_POST['fourth'] == "Sidas") {
        header("Location: /php/tomas_projektas/third/correct/index.php");
    }
    else { header("Location: /php/tomas_projektas/third/incorrect/index.php");
    }
}
    third();
 ?>

    <footer><?php echo '&copy;'.date('Y');?></footer>
</body>
</html>   