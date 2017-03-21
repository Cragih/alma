<?php

/**
 * Created by PhpStorm.
 * User: Norbi
 * Date: 2017. 02. 26.
 * Time: 22:41
 */
class SumController
{
    public function sum(){
        if(!empty($_POST)) {
            $szam1 = $_POST["szam1"];
            $szam2 = $_POST["szam2"];
            $eredmeny = $szam1 + $szam2;
            echo $eredmeny;
        }
    }

    public function test(){
       echo "müködik";
        }


}