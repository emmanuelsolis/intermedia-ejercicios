<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenamiento de Matriz de 10 fix</title>
</head>
<body>
    <?php
     //$fix es el array que nos gustaría reordenar
     $fix = array(3, 4, 1, 2, 10, 9, 8, 7, 5);
    //  sort($fix);
    //  print_r($fix);
     $minor = 0;
        function ordenar($fix){
            for($i=0; $i<count($fix); $i++){
                //comparamos con el bucle anidado dos valortes consecutivos
                for($j=0; $j<count($fix); $j++){
                    if($fix[$j] > $fix[$j+1]){
                        $minor=$fix[$j+1];
                        $fix[$j+1]=$fix[$j];
                        $fix[$j]=$minor;
                    }
                }
            }
            return $fix;
        };

        $fixed = ordenar($fix);

        for($i=0; $i<count($fixed); $i++){
            echo $fixed[$i];
        }
    ?>
</body>
</html>