<?php

use App\Classes\Michi;
use App\Classes\MichisAdoptados;

function createMichis() {

    $mr_michi = new Michi("Mr. Michi", "Blanquito", 16);
    $mr_michi_adopted = new MichisAdoptados("Mr. Michi", new DateTime("2022-04-16"), "Retaxito");

    $man = new Michi("jorguito", "marron", 5);
    $man_adopted = new MichisAdoptados("jorguito", new DateTime("2022-04-16"), "javo");

    echo $mr_michi->sayMeow() . " Me adoptó {$mr_michi_adopted->getAdopted_by()} </br>";
    echo $man->sayMeow() . " Me adoptó {$man_adopted->getAdopted_by()}";
    
}