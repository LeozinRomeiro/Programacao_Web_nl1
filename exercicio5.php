<!DOCTYPE html>
<html>
<head>
    <title>Exercicio1</title>
</head>
<body>

    <?php
        // Verifica se o formulário foi submetido
        if (isset($_POST['submit'])) {
            $numero = $_POST['$numero'];
            $soma=0;

            // Valida o intervalo de números
            if ($numero > 10 && $numero < 1) {
                echo "Por favor, digite numero de 1 a 10.";
            } else {
                echo "Tabuada de ".$numero.":<br />";
                for ($i = 1; $i <= 10; $i++) {
                    echo $numero."x".$i." = ".($numero*$i)."<br />";
                }
            }
        }
    ?>

    <form method="post">
        Digite o numero da tabuada desejada: <input type="number" name="$numero"><br>
        <input type="submit" name="submit" value="Verificar">
    </form>

</body>
</html>