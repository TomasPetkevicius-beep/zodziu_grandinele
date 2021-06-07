    let pirmas = document.getElementById("first").value;
    let antras = document.getElementById("second").value;
    let trecias = document.getElementById("third").value;
    let ketvirtas = document.getElementById("fourth").value;

function first(){
    if (pirmas.length < 1 || antras.length < 1 || trecias.length < 1 || ketvirtas.length < 1){
        alert("Užpildyk visus atsakymų laukelius!");
    }
    else if (pirmas == "bakas" && antras == "batas" && trecias == "ratas" && ketvirtas == "retas") {
        <?php header("Location: /correct/index.php"); ?>
    }
    else {<?php header("Location: /incorrect/index.php"); ?>}*/
}
