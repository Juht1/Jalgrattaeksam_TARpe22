<?php
require_once("Config.php");
if (!empty($_REQUEST[TeooriaTulemus])){
    $command=$Connectionstring->prepare(query:"SELECT id, eesnimi, perekonnanimi FROM jalgratttaeksam WHERE Teooriaeksam = -1");
    $command->bind-result($id, $eesnimi, $perekonnanimi)
    $command->excecute();
}
    ?>

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                    content="Width=Device-width, user-scalable=no, initial.scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Teooriaeksam</title>
            </head>
            <body>
                <table>
                    <?php
                    while($command->fetch()){
                        echo"
                        <tr>
                            <td>$eesnimi</td>
                            <td>$perekonnanimi</td>
                            <td>
                                <form action=''>
                                    <input type='hidden' name='id' value='$id' />
                                    <input type='Text' name='id' Teooriatulemus='$id' />
                                    <input type='submit' name='id' Sisesta tulemus='$id' />
                                </form>
                            </td>
                        </tr>

                        ";
                    }
                    ?>
                </table>
            </body>
            </html>
                }
            }