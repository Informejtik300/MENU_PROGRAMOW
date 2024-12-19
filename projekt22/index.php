<!DOCTYPE html>
<html>
    <head>
        <title>Pasek postępu</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <table>
            <tr><td colspan="2"><input type="checkbox" id="wypisywanie" class="toggle-checkbox">Przyciski <label for="wypisywanie" class="toggle-label" readonly>.</label> Formularz</td></tr>
            <tr><td colspan="2"><div id="pasek_zew"><div id="pasek_wew" style="width:0%;"></div></div></td></tr>
            <tr class="nacisnij"><td colspan="2"><button id="minus">-</button><button id="plus">+</button></td></tr>
            <tr class="wpisz"><th>Imię:</th><td><input type="text" id="imie" placeholder="Wpisz imię" class="czyszczenie"></td></tr>
            <tr class="wpisz"><th>Nazwisko:</th><td><input type="text" id="nazwisko" placeholder="Wpisz nazwisko" class="czyszczenie"></td></tr>
            <tr class="wpisz"><th>Wiek:</th><td><input type="number" id="wiek" placeholder="Wpisz wiek" class="czyszczenie"></td></tr>
            <script>
                //zmiana rodzaju ładowania paska postępu
                document.getElementById('wypisywanie').addEventListener('change', function(){
                    var nacisnij = document.querySelector('.nacisnij');
                    var checkbox = document.getElementById('wypisywanie').checked;
                    if (checkbox){
                        nacisnij.classList.add('hidden');
                        var elementyWpisz = document.querySelectorAll('.wpisz');
                        elementyWpisz.forEach(function(element){
                            element.classList.add('visible');
                        })

                        document.getElementById('pasek_wew').style.width = '0%';
                    } else {
                        nacisnij.classList.remove('hidden');
                        var elementyWpisz = document.querySelectorAll('.wpisz');
                        elementyWpisz.forEach(function(element){
                            element.classList.remove('visible');
                        })

                        var czyszczenie = document.querySelectorAll('.czyszczenie');
                        czyszczenie.forEach(function(element){
                            element.value = '';
                        })
                        document.getElementById('pasek_wew').style.width = '0%';
                    }
                })
                document.getElementById('minus').addEventListener('click', function(){
                    var pasek = parseInt(document.getElementById('pasek_wew').style.width);
                    if (pasek != 0 || pasek > 0) {
                        document.getElementById('pasek_wew').style.width = (parseInt(pasek) - 10) + '%';
                    } else {
                        document.getElementById('pasek_wew').style.width = '0%';
                    }
                })
                document.getElementById('plus').addEventListener('click', function(){
                    var pasek = parseInt(document.getElementById('pasek_wew').style.width);
                    if (pasek != 100 || pasek < 100) {
                        document.getElementById('pasek_wew').style.width = (parseInt(pasek) + 10) + '%';
                    } else {
                        document.getElementById('pasek_wew').style.width = '100%';
                    }
                })
                //przyciski
                var podzielonyPasek = parseFloat(100 / 3);
                var imiezrobione = 0;
                var nazwiskozrobione = 0;
                var wiekzrobiony = 0;
                document.getElementById('imie').addEventListener('change', function(){
                    var imie = document.getElementById('imie').value;
                    if (imie.length > 0 && imiezrobione == 0) {
                        var pasek = parseFloat(document.getElementById('pasek_wew').style.width);
                        var nowyPasek = (pasek + podzielonyPasek).toFixed(4) + '%';
                        document.getElementById('pasek_wew').style.width = nowyPasek;
                        imiezrobione = 1;
                    } else {
                        if (imie.length < 1) {
                            var pasek = parseFloat(document.getElementById('pasek_wew').style.width);
                            var nowyPasek = (pasek - podzielonyPasek).toFixed(4) + '%';
                            document.getElementById('pasek_wew').style.width = nowyPasek;
                            imiezrobione = 0;
                        } else {
                            
                        }
                    }
                })
                document.getElementById('nazwisko').addEventListener('change', function(){
                    var nazwisko = document.getElementById('nazwisko').value;
                    if (nazwisko.length > 0 && nazwiskozrobione == 0) {
                        var pasek = parseFloat(document.getElementById('pasek_wew').style.width);
                        var nowyPasek = (pasek + podzielonyPasek).toFixed(4) + '%';
                        document.getElementById('pasek_wew').style.width = nowyPasek;
                        nazwiskozrobione = 1;
                    } else {
                        if (nazwisko.length < 1) {
                            var pasek = parseFloat(document.getElementById('pasek_wew').style.width);
                            var nowyPasek = (pasek - podzielonyPasek).toFixed(4) + '%';
                            document.getElementById('pasek_wew').style.width = nowyPasek;
                            nazwiskozrobione = 0;
                        } else {
                            
                        }
                    }
                })
                document.getElementById('wiek').addEventListener('change', function(){
                    var wiek = document.getElementById('wiek').value;
                    if (wiek.length > 0 && wiekzrobiony == 0) {
                        var pasek = parseFloat(document.getElementById('pasek_wew').style.width);
                        var nowyPasek = (pasek + podzielonyPasek).toFixed(4) + '%';
                        document.getElementById('pasek_wew').style.width = nowyPasek;
                        wiekzrobiony = 1;
                    } else {
                        if (wiek.length < 1) {
                            var pasek = parseFloat(document.getElementById('pasek_wew').style.width);
                            var nowyPasek = (pasek - podzielonyPasek).toFixed(4) + '%';
                            document.getElementById('pasek_wew').style.width = nowyPasek;
                            wiekzrobiony = 0;
                        } else {
                            
                        }
                    }
                })
            </script>
        </table>
    </body>
</html>