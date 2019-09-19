<?php
session_start();
echo('sesyja nr2 here ');
var_dump($_SESSION);

if (isset($_POST['password']) && $_POST['password'] == "123"){
    $_SESSION['zalogowanie'] = 1;
    echo' zalogowano ';
} 

if (isset($_SESSION['zalogowanie']) && $_SESSION['zalogowanie'] == 1){
    echo'<br> zalogowano ';
    echo'<br><a href="nr1.php?akcja=wyloguj"> wyloguj </a>';
} else {
    echo'<br> nie zalogowano ';
}
echo "
<h3> menu: </h3>


<ul>
    <li><a href='nr1.php'>plik1 logowanie</a>
    <li><a href='nr3.php'>plik3</a>
</ul>
"
?>