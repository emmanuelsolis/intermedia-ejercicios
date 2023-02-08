
<?php
    if(isset($_POST['enviar'])){
        $nombre=$_POST['nombre'];
        echo "Hola $nombre bienvenido a mi proyecto";

    }else {
?>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        <label for="nombre">Introduce tu nombre:
            <input type="text" name="nombre">
        </label>
        <input type="submit" name="enviar" id="enviar" value="Enviar">
    </form>
<?php
    }
    ?>

    <br><br>
<a href="index.html">Volver al Home</a>
