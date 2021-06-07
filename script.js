    let pirmas = document.getElementById("first").value;
    let antras = document.getElementById("second").value;
    let trecias = document.getElementById("third").value;
    let ketvirtas = document.getElementById("fourth").value;
    
function first(){
    if (pirmas.length < 1 || antras.length < 1 || trecias.length < 1 || ketvirtas.length < 1){
        alert("Užpildyk visus atsakymų laukelius!");
    }
    /*else if (pirmas == "balas" && antras == "balis" && trecias == "kalis" && ketvirtas == "ralis"){
        <?php echo "Valio";?>
    }
    else {<?php header("Location: /first/incorrect/index.php"); ?>}*/
}
