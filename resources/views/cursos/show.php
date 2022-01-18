<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- favicon -->
    <!-- estilos -->
</head>
<body>
    <?php
    if($categoria){
        echo "Bienvenido al curso: $nomCurso, de la categoria $categoria";
    }else{
        echo "Bienvenido al curso: $nomCurso";
    }
    ?>
    <!-- <h1>Bienvenido al curso: <?php echo $nomCurso; ?>, de la categoria <?php echo $categoria; ?></h1> -->
</body>
</html>