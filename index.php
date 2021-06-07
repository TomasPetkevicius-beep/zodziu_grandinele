<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grandinėlė</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/ae58c7a07e.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
    <span class="kaipzaisti content">
        <img id="logo" src="img/LOGO.png" alt="LOGO">Kaip žaisti</span>                
        <span class="instruction content">Sudaryk žodžių grandinėlę pakeisdamas po vieną raidę žodyje. Pvz.: <em>katė -matė-metė</em></span>
    </span>
    <h5 id="cf"><i class="fas fa-envelope-square"></i>Parašyk mums</h5>

    <form id="cf1">
Turite klausimų, pastebėjimų ar idėjų? Parašykite mums!
<br>
<br>
Jūsų vardas:
<br>
     <input type="text" placeholder="įrašykite savo vardą" name="vardas">
     <br>
Jūsų el. pašto adresas: 
<br>
<input type="email" placeholder="įveskite savo el. pašto adresą">
<br>
Jūsų žinutė: 
<br>
<textarea rows="10"></textarea>
<br>
<button type="submit" id="formbtn">Siųsti</button>
    </form>
</p>        
    <section>
        <img src="img/titul.png" alt="Grandinele_picture">
    <h1 style="font-family: 'Merriweather', serif;">Žodžių grandinėlė</h1>
    <p style="font-family: 'Merriweather', serif;">Įdomus, interaktyvus žaidimas tau, tavo šeimai ir draugams!</p
    >
    <br>
    <div class="start">
<a href="first/index.php"><i class="fas fa-space-shuttle"></i>PRADĖTI</i></a>
    </div>
    </section>
    <script src="script.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="script1.js"></script>
    <footer><?php echo '&copy;'.date('Y');?></footer>
</body>
</html>