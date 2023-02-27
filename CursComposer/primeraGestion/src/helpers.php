<?php

#use SRC\Format ;

if(!function_exists("upper")){
    function upper($value){
        Src/Format::upperText($value);
}
}

if(!function_exists("lower")){
    function lower($value){
        Src/Format::lowerText($value);
}
}