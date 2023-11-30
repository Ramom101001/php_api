<?php

function conectar() {
    return new PDO(
        'mysql:dbname=acme;host=http://mysql.acme.com;charset=utf-8',
        'gerente',
        'g3ReNT&',
        [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]
    );
}
