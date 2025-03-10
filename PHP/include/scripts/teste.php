<?php
        echo "Olá mundo!";

        $repetir = true;
        $vezes = 10;
        $contador = 1;

        while ($repetir == true){
            echo "<br>Estou repetindo<br>";

            if($contador == $vezes){
                break;
            }

            $contador++;
        }

?>