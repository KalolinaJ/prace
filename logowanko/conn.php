<?php
    $mysqli = new mysqli('172.16.131.125','02_barczak','zaq1@WSX','02_barczak');
    if($mysqli -> connect_errno) {
        printf('Connect failed: %s\n', $mysqli -> connect_error);
        exit();
    }
?>