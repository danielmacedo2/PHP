<?php
    $str = "Daniel";
    $num = 12;

    if(is_string($str)) {
        echo "$str é uma string 1<br>";
    } else {
        echo "$str não é uma string <br>";
    }

    if(is_string($num)) {
        echo "$num é uma string 2<br>";
    } else {
        echo "$num não é uma string 2<br>";
    }

    if(is_string("asd")) {
        echo "É uma string 3";
    }