<!DOCTYPE html>
<html>
<head>
    <title>Exercicio2</title>
</head>
<body>

    <?php
        if (isset($_POST['submit'])) {
            $numero = $_POST['$numero'];
            $divisores=0;
            
        for ($i = 2; $i < $numero; $i++) {
        if($numero % $i == 0){
            $divisores++;
        }
        }
        if($divisores==0){
            echo "Esse numero é primo";
        }else{
            echo "Esse numero NAO é primo";
        }
    }
    ?>
     <form method="post">
        Digite o numero: <input type="number" name="$numero"><br>
        <input type="submit" name="submit" value="Verificar">
    </form>
</body>
</html>