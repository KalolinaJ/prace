<?php
 function dzialanie ($liczba1, $liczba2, $dzialanie){
     if ($dzialanie == '+'){
         $wynik = $liczba1+$liczba2;
     };

     if($dzialanie == '-') {
         $wynik = $liczba1-$liczba2;
     };
     echo('<li>wynik działania:'.$wynik);
 }

 function dzialanie_inaczej($liczba1,$liczba2,$dzialanie){
     switch($dzialanie){
         case '+':
            $wynik = $liczba1+$liczba2;
            break;
        case '-':
            $wynik = $liczba1-$liczba2;
            break;
        case '*':
            $wynik = $liczba1*$liczba2;
            break;
        case '/':
            $wynik = $liczba1/$liczba2;
            break;
     };
     echo('<li>wynik działania:'.$wynik);
 };

 dzialanie(18,3,'+');
 dzialanie_inaczej(10,3,'*');


?>