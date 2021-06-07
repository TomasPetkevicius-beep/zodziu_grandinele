<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ae58c7a07e.js" crossorigin="anonymous"></script>
    <title>Pirma grandinėlė</title>
    
</head>
<body>
    <span><img id="logo" src="img/LOGO.png">
    <h5 id="cf"><a href="/php/tomas_projektas/index.php"><i class="fas fa-space-shuttle"></i>Į pradžią</i></a></h5></span>
<br>
<div>
<form action="<?php $_PHP_SELF; ?>" method="POST" id="quests">
        
    <h4>Kuro talpykla</h4>
    <input type="text" name="first" placeholder="atsakymas" method="POST">

    <h4>Aprangos dalis</h4>
    <input type="text" name="second" placeholder="atsakymas" method="POST">

    <h4>Automobilio atsarginis ...</h4>
    <input type="text" name="third" placeholder="atsakymas" method="POST">

    <h4>Dažnas antonimas</h4>
    <input type="text" name="fourth" placeholder="atsakymas" method="POST">
    <br>
    <button action="<?php $_PHP_SELF; ?>" method="POST" id="quests">Pateikti</button>
    </form>

    <img src="img/boy_quest.png" alt="thinking boy">
</div>
<?php
function first(){

    if (empty($_POST['first']) || empty($_POST['second']) || empty($_POST['third']) || empty($_POST['fourth'])){
        
            echo "<script>alert('Prašome užpildyti visus laukelius!');</script>";
        }     
    else if ($_POST['first'] == "bakas" && $_POST['second'] == "batas" && $_POST['third'] == "ratas" && $_POST['fourth'] == "retas") {
        header("Location: /php/tomas_projektas/first/correct/index.php");
    }
    else { header("Location: /php/tomas_projektas/first/incorrect/index.php");
    }
}
    first();
 ?>

    <footer><?php echo '&copy;'.date('Y');?></footer>
</body>
</html>