<?php
if ( ! function_exists('transalteToSunda')) {
    function transalteToSunda($word)
    {
        return \Fajri\Dictionary\Sunda::translate($word);
    }
}
