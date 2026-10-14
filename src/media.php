<form method="post">
    <input name="nota1" type="number">
    <input name="nota2" type="number">
    <input value="Enviar" type="submit">
</from>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $media = ($nota1 + $nota2) / 2;
    echo "Média: " . $media;
    if($media > 7) echo " Aprovado";
    else if($media > 3) echo " Recuperação";
    else echo " Reprovado";
}
?>
