<?php

$txtNombre = "";
$rdgLenguaje = "";
$chkphp = "";
$chkhtml = "";
$chkcss = "";
$lsAnime = "";
$txtComentario="";

if ($_POST) {
    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
    $rdgLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";
    $chkphp = (isset($_POST['chkphp']) == "si") ? "checked" : "";
    $chkhtml = (isset($_POST['chkhtml']) == "si") ? "checked" : "";
    $chkcss = (isset($_POST['chkcss']) == "si") ? "checked" : "";
    $lsAnime = (isset($_POST['lsAnime'])) ? $_POST['lsAnime'] : ""; $txtComentario=(isset($_POST['txtComentario']))?$_POST['txtComentario']:"";

    //Instruccion de insertar 
    //Rutina de algun calculo
    //Aqui puedes alterar esos valores para mostrar diferentes valores modificados
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php if ($_POST) { ?>
        <strong>Hola </strong>:<?php echo $txtNombre; ?>
    <?php } ?>
    <br>
    <strong>Tu lenguaje es: </strong><?php echo $rdgLenguaje; ?>
    <form action="ejer31.php" method="post">
        <br>
        <strong>Estas aprendiendo: </strong><br>
        <?php echo ($chkphp == "checked") ? "-PHP" : "" ?> <br>
        <?php echo ($chkhtml == "checked") ? "-HTML" : "" ?> <br>
        <?php echo ($chkcss == "checked") ? "-CSS" : "" ?> <br>
        <br>
        <strong>Tu anime favorito es: </strong><?php echo $lsAnime; ?>
        <br>
        <br>

        <strong>Tu mensaje es...</strong>
        <br>
        <?php echo $txtComentario;?>
        <br>
        <br>

        Nombre:<br>
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
        <br>
        <br>
        ¿Te gusta?<br>
        <br>php: <input type="radio" <?php echo ($rdgLenguaje == "php") ? "checked" : "" ?> name="lenguaje" value="php" id=""><br>
        <br>html: <input type="radio" <?php echo ($rdgLenguaje == "html") ? "checked" : "" ?> name="lenguaje" value="html" id=""><br>
        <br>css: <input type="radio" <?php echo ($rdgLenguaje == "css") ? "checked" : "" ?> name="lenguaje" value="css" id=""><br>

        <br>
        Estas aprendiendo... <br>
        <br>php: <input type="checkbox" <?php echo $chkphp; ?> name="chkphp" value="si" id="">
        <br>html: <input type="checkbox" <?php echo $chkhtml ?> name="chkhtml" value="si" id="">
        <br>css: <input type="checkbox" <?php echo $chkcss; ?> name="chkcss" value="si" id="">

        <br>
        <br>

        ¿Que anime te gusta?... <br>
        <select name="lsAnime" id="">
            <option value="">[Ninguna serie]</option>
            <option value="DS" <?php echo ($lsAnime == "DS") ? "selected" : ""; ?>>Demon Slayer</option>
            <option value="Shingeki no kyojin" <?php echo ($lsAnime == "SNK") ? "selected" : ""; ?>>Shingeki No Kyojin</option>
            <option value="Berserk" <?php echo ($lsAnime == "Berserk") ? "selected" : ""; ?>>Berserk</option>
        </select>
        <br>
        <br>

        ¿Tenes alguna duda?
        <br>
        <br>
        <textarea name="txtComentario" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Enviar informacion">

    </form>
</body>

</html>