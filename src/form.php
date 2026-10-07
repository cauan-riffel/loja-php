<form method="post">
    <input name="nome" type="text">
    <input value="Enviar" type="submit">
</from>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $nome = $_POST["nome"];
    echo "olá " . $nome;
}
?>