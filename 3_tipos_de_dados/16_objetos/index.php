<?php
    class Pessoa {


        function falar() {
            echo 'Olá!';
        }
    }

    $daniel = new Pessoa();

    $daniel->nome = "Daniel";

    echo $daniel->nome;

    echo '<br>';

    $daniel->falar();