<?php

    $x = 5;

    switch($x) {

        case 0:
            echo "X é igual a 0 <br>";
            break;
        case 1:
            echo "X é a igual a 1<br>";
            break;
        default:
            echo 'X não é igual a nenhum dos valores mencionados <br>';
    }

    $y = 'Daniel';

    switch($x) {

        case 'Daniel':
            echo "O nome é Daniel! <br>";
            break;
        case 'Felipe':
            echo "O nome é Felipe!<br>";
            break;
        default:
            echo 'O nome não foi encontrado!';
    }