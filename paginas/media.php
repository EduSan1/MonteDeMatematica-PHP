<?php

$nota1 = (float)0;
$nota2 = (float)0;
$nota3 = (float)0;
$nota4 = (float)0;
$media = (float)0;

if (isset($_POST['btncalc'])) {

    if ($_POST['txtn1'] == "" || $_POST['txtn2'] == "" || $_POST['txtn3'] == "" || $_POST['txtn4'] == "") {
        echo ('<p class="msgErro">PREENCHE TUDO CARAI</p>');
    } else {

        $nota1 = $_POST['txtn1'];
        $nota2 = $_POST['txtn2'];
        $nota3 = $_POST['txtn3'];
        $nota4 = $_POST['txtn4'];

        if (!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4)) {

            echo ('<p class="msgErro">COLOCA SÓ NUMERO</p>');
        } else {

            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Média</title>
    <link rel="stylesheet" type="text/css" href="../css/media.css">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="utf-8">
</head>

<body>

    <header>
        <div class="menu">
            <a href="calculadora.php">
                <p>Calculadora Simples</p>
            </a>
            <a href="media.php">
                <p>Média Ari</p>
            </a>
            <a href="parImpar.php">
                <p>Par e Impar</p>
            </a>
            <a href="tabuada.php">
                <p>Tabuada</p>
            </a>
        </div>
        <h1>Super treco de Matemática</h1>
    </header>

    <div id="conteudo">


        <div id="titulo">
            Calculo de Médias
        </div>

        <div id="form">
            <form name="frmMedia" method="post" action="media.php">
                <div>
                    <label>Nota 1:</label>
                    <input type="text" name="txtn1" value="<?php echo ($nota1) ?>">
                </div>

                <div>
                    <label>Nota 2:</label>
                    <input type="text" name="txtn2" value="<?php echo ($nota2) ?>">
                </div>

                <div>
                    <label>Nota 3:</label>
                    <input type="text" name="txtn3" value="<?php echo ($nota3) ?>">
                </div>

                <div>
                    <label>Nota 4:</label>
                    <input type="text" name="txtn4" value="<?php echo ($nota4) ?>">
                </div>
                <div>
                    <input type="submit" name="btncalc" value="Calcular">
                    <div id="botaoReset">
                        <a href="media.php">
                            Novo Cálculo
                        </a>
                    </div>
                </div>
            </form>

        </div>
        <footer id="resultado">
            A média é: <?php echo ($media); ?>
        </footer>
    </div>


</body>

</html>