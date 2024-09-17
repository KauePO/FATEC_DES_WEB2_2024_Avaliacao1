<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    // Verifica o login como coordenaçao
    if($_POST['username'] == 'coordenacao' and $_POST['password'] == 'coordenacao'){
        $_SESSION['username'] = 'Coordenação';
        $_SESSION['loggedin'] = TRUE;
         header("location: coordenacao.php");
         exit;
    } 
    
    // Verifica o login como tecnico
    if($_POST['username'] == 'tecnicos' and $_POST ['password'] == 'tecnicos'){
        $_SESSION['username'] = 'Técnico';
        $_SESSION['loggedin'] = TRUE;
         header("location: tecnicos.php");
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Acessar</h2>
        <p>Favor inserir login e senha.</p>
                        <!-- usado para evitar ataques XSS-->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Login</label>
                <input type="text" name="username" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>    
</body>
</html>