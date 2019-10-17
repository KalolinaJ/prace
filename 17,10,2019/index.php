<?php

    class wojownik {
        private $hp;

        private $bron="miecz dwureczny";
        private $sila;
        private $tab = array();
    }

    function sprawdzenie(){
        echo("jestem gotów");
    }

    function wyrusz(){
        $this->sila = 10;
        echo ('<br> wyruszam w podróż'.$this->bron);
    }

    function getSila(){
        return $this->sila;
    }

    function setSila(){
        $this->sila+=5;
    }


?>