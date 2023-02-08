
<form action="<?php $_PHP_SELF ?>" method="post">
      <?php for ($i = 0; $i < 10; $i++) { ?>
        <label for="number_<?php echo $i; ?>">Ingrese el número <?php echo ($i + 1); ?>:</label>
        <input type="text" name="numbers[]" size="2" id="number_<?php echo $i; ?>">
        <br>
      <?php } ?>
      <input type="submit" value="Enviar">
    </form>

<?php
  if (isset($_POST['numbers'])) {
    $numbers = $_POST['numbers'];
    sort($numbers);
    echo "Los números ingresados y ordenados son: \n";
    for ($i = 0; $i < count($numbers); $i++) {
      echo $numbers[$i] . "\n";
    }
  } else {
    echo "No se han ingresado números.";
  }
?>


<!-- <?php
//   $fix = array(3, 4, 1, 2, 10, 9, 8, 7, 5);
//   sort($fix);
//   for($i = 0; $i < count($fix); $i++) {
//     echo $fix[$i] . "\n";
//   }
?> -->