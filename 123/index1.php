<?php
echo('index');
    if (isset ($_SESSION['zalogowany']) == 1){
        echo ('zalogowano');
    } else

    echo ('<br>nie zalogowano');
?>