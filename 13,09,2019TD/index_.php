
    

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>sklep</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
    
    <div class="header">header</div>
    <div class="sidebar">sidebar</div>
    <?php

        for($i = 1; $i < 14; $i++){

            echo('
            
                <div class="card">

                    <img src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fs3.egospodarka.pl%2Fgrafika2%2Fsamochod-firmowy%2FSamochod-firmowy-uzywany-prywatnie-a-koszty-uzyskania-przychodu-149653-900x900.jpg&f=1&nofb=1" alt="" class="photo">
                    <div class="info">

                        <p class="price card-header">cena: <span class="price-value">123 zł</span></p>
                        <div class="size card-header">Kolor:

                            <ul class="list">

                                <li class="size-item red">czerwony</li>
                                <li class="size-item green">zielony</li>
                                <li class="size-item black">czarny</li>

                            </ul>

                        </div>

                    </div>

                    <h2 class="title card-header">ferrari</h2>
                    <p class="description">jest czerwone i szybkie jest czerwone i szybkie jest czerwone i szybkie jest czerwone i szybkie jest czerwone i szybkie</p>
                    <div class="card-footer">

                        <a href="#" class="btn">wiecej</a>
                        <a href="#" class="btn">kup</a>

                    </div>

        </div> 

            ');

        }

    ?>

    <div class="item card">1</div>
    <div class="item card">2</div>
    <div class="item card">3</div>
    <div class="item card">4</div>
    <div class="item card">5</div>
    <div class="item card">6</div>
    <div class="item card">7</div>
    <div class="item card">8</div>
    <div class="item card">9</div>
    <div class="item card">10</div>
    <div class="item card">11</div>
    <div class="item card">12</div>


    </div>
</body>
</html>