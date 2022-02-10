<?php
$num1 = (int)0;
$num2 = (int)0;
$resultadoCalculo = null;
$resultado = null;
$i = (int)1;

if (isset($_POST['btnCalcular'])) {

  if($_POST['num1'])
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];

  while ($i <= $num2) {

    $resultadoCalculo = $num1 * $i;
    $resultado .= '<p>' . $num1 . ' * ' . $i . ' = ' . $resultadoCalculo . '</p>';
    $i++;
  }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/tabuada.css" />
  <title>Document</title>
</head>

<body>
  <header></header>

  <body>
    <a href="../index.php">
      <p>Voltar</p>
    </a>
    <div id="form">
      <form name="frmTabuada" method="post" action="tabuada.php">
        <div>
          <label>Número 1:</label>
          <input type="text" name="num1" value="<?php echo ($num1) ?>" />
        </div>
        <div>
          <label>Número 2:</label>
          <input type="text" name="num2" value="<?php echo ($num2) ?>" />
        </div>
        <button name="btnCalcular">Calcular</button>
      </form>
      <div class="resultado">
        <?php echo ($resultado) ?>
      </div>
    </div>
  </body>
  <footer></footer>
</body>

</html>