<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | C3</title>
    <link rel="shortcut icon" type="imagex/ico" href="assets/login.ico">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="form-header">
            <img src="assets/logo.png" alt="Foto">
        </div>
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="login">LOGIN</label>
                <input type="text" id="login" name="login">
            </div>
            <div class="form-group">
                <label for="senha">SENHA</label>
                <input type="password" id="senha" name="senha">
            </div>
            <div class="form-group">
                <button type="submit">Acessar</button>
            </div>
        </form>

    </div>
</body>
</html>
