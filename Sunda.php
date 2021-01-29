<?php
namespace Fajri\Dictionary;

class Sunda
{
    public static function translate($word)
    {
        switch ($word){
            case "satu" :
                return "satu";
            case 'dua' :
                return  'dua';
            default:
                return 'Tidak ditemukan';
        }
    }

}
