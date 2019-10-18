<?php

    class wojownik {
        private $hp;

        private $bron="miecz dwureczny";
        private $sila;
        private $tab = array();
    

    function __construct($hp_podane){
        $this->sila = 0;
        $this->hp = $hp_podane;
        echo("<br> konstruktor hp: ".$this->hp);
        echo("<br> konstruktor bron: ".$this->bron);
        echo("<br> konstruktor sila: ".$this->sila);
    }

    function sprawdzenie(){
        echo("jestem gotów");
    }

    function wyrusz(){
        $this->sila = 10;
        echo ('<br> wyruszam w podróż '.$this->hp);
    }

    function getSila(){
        return $this->sila;
    }

    function setSila(){
        $this->sila+=5;
    }

    function __toString(){
        return '<li>Gotowość do działania';
    }

    function __invoke(){
        echo'<li> Wuruszam INNĄ drogą';
    }

    function __set($nowa_zm, $wartosc_zm) {
        $this->tab[$nowa_zm] = $wartosc_zm;
        echo '<li> ustawilas '.$this->tab[$nowa_zm];
    }

    function __get($nowa_zm){
        return $this->tab[$nowa_zm];
    }

    }

    $wojo = new wojownik('100');

    $wojo();

    $wojo->przedmiot = 'nie wiem sadfasdfasdfsafasdf tu ma byc w sumie';
    $wojo->sila = '200';

    echo $wojo->przedmiot;
    echo $wojo->sila;
    echo "<br>".$wojo->getSila

    // $wojo->setSila();
    // echo $wojo->getSila();
    // $wojo->sprawdzenie();
    // $wojo->wyrusz();


?>