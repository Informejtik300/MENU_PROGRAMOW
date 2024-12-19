//klawiatura - funkcjonalność
document.getElementById("zero").addEventListener("click", function(){
    let zero_p = document.getElementById("wyswietlacz").value;
    let zero_w = zero_p + 0;
    document.getElementById("wyswietlacz").value = zero_w;
});
document.getElementById("1").addEventListener("click", function(){
    let zero_p = document.getElementById("wyswietlacz").value;
    let zero_w = zero_p + 1;
    document.getElementById("wyswietlacz").value = zero_w;
});
document.getElementById("2").addEventListener("click", function(){
    let zero_p = document.getElementById("wyswietlacz").value;
    let zero_w = zero_p + 2;
    document.getElementById("wyswietlacz").value = zero_w;
});
document.getElementById("3").addEventListener("click", function(){
    let zero_p = document.getElementById("wyswietlacz").value;
    let zero_w = zero_p + 3;
    document.getElementById("wyswietlacz").value = zero_w;
});
document.getElementById("4").addEventListener("click", function(){
    let zero_p = document.getElementById("wyswietlacz").value;
    let zero_w = zero_p + 4;
    document.getElementById("wyswietlacz").value = zero_w;
});
document.getElementById("5").addEventListener("click", function(){
    let zero_p = document.getElementById("wyswietlacz").value;
    let zero_w = zero_p + 5;
    document.getElementById("wyswietlacz").value = zero_w;
});
document.getElementById("6").addEventListener("click", function(){
    let zero_p = document.getElementById("wyswietlacz").value;
    let zero_w = zero_p + 6;
    document.getElementById("wyswietlacz").value = zero_w;
});
document.getElementById("7").addEventListener("click", function(){
    let zero_p = document.getElementById("wyswietlacz").value;
    let zero_w = zero_p + 7;
    document.getElementById("wyswietlacz").value = zero_w;
});
document.getElementById("8").addEventListener("click", function(){
    let zero_p = document.getElementById("wyswietlacz").value;
    let zero_w = zero_p + 8;
    document.getElementById("wyswietlacz").value = zero_w;
});
document.getElementById("9").addEventListener("click", function(){
    let zero_p = document.getElementById("wyswietlacz").value;
    let zero_w = zero_p + 9;
    document.getElementById("wyswietlacz").value = zero_w;
});
document.getElementById("=").addEventListener("click", function(){
    let zero_p = document.getElementById("wyswietlacz").value;
    let zero_w = zero_p + "=";
    document.getElementById("wyswietlacz").value = zero_w;
});

//wyciąganie liczb i znaków z wyświetlacza
document.getElementById("wyswietlacz").addEventListener("change", function(){
    let wyswietlacz = document.getElementById("wyswietlacz").value;
});

//obliczanie wyniku

//podstawianie wyniku