<?php
    declare(strict_types=1);

    $dominio = 'mysql:localhost;dbname=projetophp';
    $usuario = 'root';
    $senha = '';

    try{
        $pdo = New PDO($dominio, $usuario, $senha);   
    } catch(PDOException $e){
        die("ERROR ao conectar com banco!".$e->getMessage());
    }
?>