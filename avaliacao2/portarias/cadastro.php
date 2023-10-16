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
    <form action="cadastro_placa.php" method="POST">
        <div class="form-group">
            <label>Aluno</label>
            <input type="text" name="aluno" class="form-control" value="" maxlength="50">
            <span class="help-block"></span>
        </div>    
        <div class="form-group">
            <label>Placa</label>
            <input type="text" name="placa" class="form-control" value="" maxlength="20">
            <span class="help-block"></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </div>
    </form>

    <a href="principal.php" class="btn btn-primary">Voltar</a>
    <br><br>
    </p>
</body>
</html>