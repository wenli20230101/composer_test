<?php

namespace Src;

class MyGreeter{

    public function greeting()
    {
        $hour = date("H");
        if($hour>6 && $hour<=12){
            return "Good morning";
        }elseif($hour>12 && $hour<=18){
            return "Good afternoon";
        }elseif($hour>18 || $hour<=6){
            return "Good evening";
        }
    }
}