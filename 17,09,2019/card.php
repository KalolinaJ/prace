<?php

    $servername = "172.16.131.125";
    $username = "02_janecka";
    $password = "arolinak";
    $dbname = "02_janecka";

    $conn = new mysqli($servername, $username, $password, $dbname);



    $sql = "SELECT * FROM Cars";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {

        echo('
            <div class="item card">
                <div class="card1">
                    <div class="info">
                        <img class="photo" src="'.$row['photo'].'" alt="auto">
                            <span class="promo">Promocja: '.$row['promocja'].'</span>
                            <p class="price">Cena: <span class="price-value">'.$row['cena'].'</span></p>
                            <div class="size">Kolor:
                                <ul class="list">
                                    <li class="size-item">Czerwony</li>
                                    <li class="size-item">Czarny</li>
                                    <li class="size-item">Niebieski</li>
                                </ul>
                            </div>
                            
                    </div>
                </div>

                <div class="description">'.$row['opis'].'</div>
                <div class="btns">
                
                    <a href="#" class="btn1">wiecej</a>
                    <a href="#" class="btn1">kup</a>

                </div>

            </div>
        ');

    }

        

?>
