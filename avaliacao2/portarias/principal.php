<?php
    require_once('header.php');
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
        <h1>
            <?php echo $_SESSION["username"]; ?>
            <br>
        </h1>
    </div>
    <p>


        <a href="registros.php" class="btn btn-primary">Verificar Veículos</a>
        <br><br>
        <a href="cadastro.php" class="btn btn-primary">Cadastro Veículos</a>
        <br><br>

        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>