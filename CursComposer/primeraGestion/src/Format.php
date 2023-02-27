<?php

namespace Src;

class Format{
    public static function upperText($value){
        return strtoupper($value);
    }

    public static function lowerText($value){
        return strtolower($value);
    }
}