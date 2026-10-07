<form method="post">
    <input name="numero" type="number">
    <input value="Enviar" type="submit">
</from>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    for($i=0; $i < 10; $i++){
        echo ($i + 1) * $_POST["numero"] . " ";
    }
}
?>