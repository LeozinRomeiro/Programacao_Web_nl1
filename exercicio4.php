<!DOCTYPE html>
<html>
<head>
    <title>Exercicio1</title>
</head>
<body>

    <?php
        // Verifica se o formulário foi submetido
        if (isset($_POST['submit'])) {
            $numero_inicial = $_POST['numero_inicial'];
            $numero_final = $_POST['numero_final'];
            $soma=0;

            // Valida o intervalo de números
            if ($numero_final - $numero_inicial > 100) {
                echo "Por favor, digite um intervalo de no máximo 100 números.";
            } else {
                // Mostra o intervalo de números
                for ($i = $numero_inicial+1; $i < $numero_final; $i++) {
                    $soma+=$i;
                }
                echo "Soma:".$soma;
            }
        }
    ?>

    <form method="post">
        Número inicial: <input type="number" name="numero_inicial"><br>
        Número final: <input type="number" name="numero_final"><br>
        <input type="submit" name="submit" value="Mostrar intervalo">
    </form>

</body>
</html>