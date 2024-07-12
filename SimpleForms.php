<!DOCTYPE html>
<html lang="pt-br">
<head><title>Aprendendo manipular formulário com PHP</title></head
<body>
<h1>Formulário PHP</h1>
<?php
$texto = isset($_POST['texto']) ? $_POST['texto'] : '';
if($texto !== " ") {
    echo "<p>Texto digitado foi: $texto</p>";
}
else{
    echo "<p>Texto vazio!</p>";

}

?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <label>
        <input type="text" name="texto" value="" size= 10 required>
    </label><br><br>

    <input type="submit" value="Enviar">
</form>

</body>


</html>



