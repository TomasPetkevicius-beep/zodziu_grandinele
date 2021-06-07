<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ae58c7a07e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <title>Antra grandinėlė</title>
    
</head>
<body>
    <span class="kaipzaisti content">
        <img id="logo" src="img/LOGO.png" alt="LOGO">Kaip žaisti</span>                
        <span><img id="logo" src="img/LOGO.png">
    <h5 id="cf"><a href="/php/tomas_projektas/index.php"><i class="fas fa-space-shuttle"></i>Į pradžią</i></a></h5></span>
<br>
    <div>
<form action="<?php $_PHP_SELF; ?>" method="POST" id="quests">
        
<h4>Vienetas kuriuo įvertinamas kurio nors reiškinio intensyvumas arba laipsnis</h4>
    <input type="text" name="first" placeholder="atsakymas" method="POST">

    <h4>Indonezijos sala</h4>
    <input type="text" name="second" placeholder="atsakymas" method="POST">

    <h4>Šarminų metalų grupės cheminis elementas</h4>
    <input type="text" name="third" placeholder="atsakymas" method="POST">

    <h4>Kompleksinės sportinės varžybos įvairiais automobiliais</h4>
    <input type="text" name="fourth" placeholder="atsakymas" method="POST">
    <br>
    <button action="<?php $_PHP_SELF; ?>" method="POST" id="quests">Pateikti</button>
    </form>

    <img src="img/girl_quest.png" alt="thinking girl">
</div>
<?php
function second(){

    if (empty($_POST['first']) || empty($_POST['second']) || empty($_POST['third']) || empty($_POST['fourth'])){
        
            echo "<script>alert('Prašome užpildyti visus laukelius!');</script>";
        }     
    else if ($_POST['first'] == "balas" && $_POST['second'] == "balis" && $_POST['third'] == "kalis" && $_POST['fourth'] == "ralis") {
        header("Location: /php/tomas_projektas/second/correct/index.php");
    }
    else { header("Location: /php/tomas_projektas/second/incorrect/index.php");
    }
}
    second();
 ?>

<footer><?php echo '&copy;'.date('Y');?></footer>
</body>
</html>