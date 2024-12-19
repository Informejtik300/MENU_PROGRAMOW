<!DOCTYPE html>
<html>
    <head>
        <title>Zmienianie kolorów</title>
        <meta charset="utf-8">
    </head>
    <body>
        <!--kolor czciąki-->
        <fieldset style="width:150px;border-radius:20px;text-align:center;">
            <legend>Wybierz kolor akapitu</legend>
            <select id="kolory">
                <option value="red">Czerwony</option>
                <option value="green">Zielony</option>
                <option value="yellow">Żółty</option>
                <option value="blue">Niebieski</option>
                <option value="pink">Różowy</option>
                <option value="white">Biały</option>
                <option value="black" selected>Czarny</option>
                <option value="wlasny">Stwórz własny</option>
            </select>
            <input type="color" id="kolorWlasny" style="display: none;margin-left:48px;">
            <script>
                document.getElementById('kolory').addEventListener('change', function(){
                    var kolor = document.getElementById('kolory').value;
                    if (kolor == "wlasny") {
                        document.getElementById('kolorWlasny').style.display = 'block';
                        document.getElementById('kolorWlasny').addEventListener('change', function(){
                            var kolorWlasny = document.getElementById('kolorWlasny').value;
                            document.getElementById('akapit').style.color = kolorWlasny;
                        })
                    } else {
                        document.getElementById('kolorWlasny').style.display = 'none';
                        document.getElementById('akapit').style.color = kolor;
                        if (kolor == "yellow" || kolor == "white" || kolor == "pink") {
                            document.getElementById('akapit').style.backgroundColor = "#5a5a5a";
                        } else {
                            document.getElementById('akapit').style.backgroundColor = "white";
                        }
                    }
                })
            </script>
        </fieldset>
        <!--powiększenie czciąki-->
        <fieldset style="width:150px;border-radius:20px;text-align:center;">
            <legend>Rozmiar akapitu</legend>
            <input type="checkbox" id="czyWartoscWlasna">Wartość własna
            <select id="wartosc" style="display:none;margin-left:30px;width:93px;text-align:center;">
                <option value="85">Mały</option>
                <option value="100" selected>Zwykły</option>
                <option value="150">Duży</option>
                <option value="220">Wielki</option>
            </select>
            <input type="number" id="wartoscWlasna" value="100" style="display:none;width:50%;margin-left:36px;text-align:center;">
            <script>
                var wartosc, wartoscWlasna;
                wartoscWlasna = 100;
                document.getElementById('wartosc').style.display = 'block';
                document.getElementById('czyWartoscWlasna').addEventListener('change', function(){
                    if (document.getElementById('czyWartoscWlasna').checked) {
                        document.getElementById('wartoscWlasna').style.display = 'block';
                        document.getElementById('wartosc').style.display = 'none';
                        document.getElementById('akapit').style.fontSize = wartoscWlasna + '%';
                    } else {
                        document.getElementById('wartoscWlasna').style.display = 'none';
                        document.getElementById('wartosc').style.display = 'block';
                        document.getElementById('akapit').style.fontSize = wartosc + '%';
                    }
                })
                document.getElementById('wartoscWlasna').addEventListener('change', function(){
                    wartoscWlasna = document.getElementById('wartoscWlasna').value;
                    document.getElementById('akapit').style.fontSize = wartoscWlasna + '%';
                })
                document.getElementById('wartosc').addEventListener('change', function(){
                    wartosc = document.getElementById('wartosc').value;
                    document.getElementById('akapit').style.fontSize = wartosc + '%';
                })
            </script>
        </fieldset>
        <!--akapit testowy-->
        <p id="akapit">To jest akapit.</p>
    </body>
</html>