<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ){
    header("location: index.php");
    exit; 
}
if($_SESSION["username"] == "Técnico"){
    header("location: tecnicos.php");
    exit;
}
?>
    
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Solicitações</title>
</head>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Laboratório</label>
                <br>
                <select name="laboratorio" class="form-control">
                    <option value="Laboratório 1">Laboratório 1</option>
                    <option value="Laboratório 2">Laboratório 2</option>
                    <option value="Laboratório 3">Laboratório 3</option>
                </select>
            </div>
            <div class="form-group">
                <label>Prazo Limite</label>
                <br>
                <input type="date" name="prazo" class="form-control">
            </div>
            <div class="form-group">
                <label>Solicitação</label>
                <br>
                <input type="text" name="solicitacao" class="form-control">
            <div class="form-group">
                <label>Curso Atendido</label>
                <br>
                <select name="curso" class="form-control">
                    <option value="DSM">DSM</option>
                    <option value="GE">GE</option>
                </select>
                <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Registrar">
            </div>
        </form>

        <a href="coordenacao.php" class="btn btn-danger">Voltar</a>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['curso'])) {
        if ($_POST['curso'] == "DSM") {
            $filename = "dsm.txt";
            $handle = fopen($filename, "a");
            fwrite($handle, $_POST['laboratorio'] . " | ");
            fwrite($handle, $_POST['prazo'] . " | ");
            fwrite($handle, $_POST['solicitacao'] . "\n\n");
            fflush($handle);
            fclose($handle);
        } elseif ($_POST['curso'] == "GE") {
            $filename = "ge.txt";
            $handle = fopen($filename, "a");
            fwrite($handle, $_POST['laboratorio'] . " | ");
            fwrite($handle, $_POST['prazo'] . " | ");
            fwrite($handle, $_POST['solicitacao'] . "\n\n" );
            fflush($handle);
            fclose($handle);
        }
    }
}
?>
</body>
</html>