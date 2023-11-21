<?php
    require_once("Config.php");
    if(isSet($_REQUEST["sisetusnupp"])){
    $Command=$connectionstring->prepare(query:"INSERT INTO jalgrattaeksam(eesnimi, perekonnanimi) VALUES ( ?, ? )");
    $command->bind_param("ss", $_REQUEST["eesnimi"], $_REQUEST["perekonnanimi"]);
    $command->excecute();
    $connesctionstring->close();
    header(header("Location: $_Server[PHP_SELF]?lisatudeesnimi=$_REQUEST[eesnimi]")); exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="Width=Device-width, user-scalable=no, initial.scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kasutaha registreerumine</title>
</head>
<body>
    <h1>Registreerumine</h1>
    <?php
    if(isSet($_REQUEST["Lisatudeesnimi"])){
        echo "lisati $_REQUEST[Lisatudeesnimi]";
    }
        ?>
            <form action="?">
                <dl>
                <dt>Eesnimi.</dt>
                <dd><input type text="text" names="eesnimi" /></dd>
                <dt>Perekonnanimi:</dt>
                <dd><input type="text" names="perekonnanimi" /></dd>
                <dt><input type="submit" name="sisetusnupp" value="submit" /></dd>
                </dl>
            </form>
        </body>
        </html>
