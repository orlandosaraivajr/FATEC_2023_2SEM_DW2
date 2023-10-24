<?php

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        header("location: registros.php");
    }

    require_once('header.php');
    require_once('dados_banco.php');

    $placa = $_POST['placa_id'];
    $db = new DBConnect();
    $stmt = $db->select_registros($placa); 

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Portaria Fatec</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h2>
            <?php echo $_SESSION["username"]; ?>
            <br>
        </h2>
    </div>
    <p>

        <div class="form-group">
            <label>Data e Hora em que existe registro de entrada/saída</label>
            <br>
            <?php
                while ($row = $stmt->fetch()) {
                    echo $row['data_hora'];
                    echo "<br>";
                }
            ?>
        </div>


    <a href="principal.php" class="btn btn-primary">Voltar</a>
    <br><br>

    </p>
</body>
</html>