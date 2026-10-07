<?php

try{
    $pdo = new PDO(
        "mysql:host=db;dbname=loja;charset=utf8mb4",
        "root", "root"
    );
    echo "conectade!";
}catch(PDOException $e){
    echo "erro! " . $e->getMessage();
}

?>