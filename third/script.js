var pirmas = document.getElementById("first").value;
    var antras = document.getElementById("second").value;
    var trecias = document.getElementById("third").value;
    var ketvirtas = document.getElementById("fourth").value;
function first(){
    if (pirmas.length < 1 || antras.length < 1 || trecias.length < 1 || ketvirtas.length < 1){
        alert("Užpildyk visus atsakymų laukelius!");
    }
    else if (pirmas == "rodas" && antras == "kodas" && trecias == "kodis" && ketvirtas == "žodis") {
        location.href="/correct/index.html"
    }
    else {location.href"/incorrect/index.html"
    }
