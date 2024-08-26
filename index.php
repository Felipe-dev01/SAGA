<?php

session_start();
$rmArmazenado = '24077';
$senhaArmazenada = crypt(md5('1234'), 'etec');
if (isset($_POST['entrar'])) {
    $senha = crypt(md5($_POST['senha']), 'etec');
    if ($senha == $senhaArmazenada && $_POST['rm'] = $rmArmazenado) {
        $_SESSION['user'] = $_POST['rm'];
        header('Location: src/pages/home.php ');
    } else {
        echo "<script> alert('RM e/ou senha incorretos!'); </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saga - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #F2F2F2;
        }

        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-container img {
            max-width: 100px;
            margin-bottom: 20px;
        }

        .login-container .form-control {
            margin-bottom: 15px;
        }

        .login-container .btn-primary {
            background-color: #0A3D91;
            border-color: #0A3D91;
        }

        .login-container .btn-primary:hover {
            background-color: #083B82;
            border-color: #083B82;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <img src="src/imagens/SagaLogo.png" alt="Logo">
        <h3>Login</h3>
        <form method="post" action="">
            <div class="mb-3">
                <select class="form-select" aria-label="Entrar como:">
                    <option value="1">Aluno</option>
                    <option value="2">Responsável</option>
                    <option value="3">Professor</option>
                    <option value="4">Pro</option>
                </select>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Cod. ETEC:">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="rm" placeholder="RM:">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="senha" placeholder="Senha">
            </div>
            <button type="submit" name="entrar" class="btn btn-primary w-100">Entrar</button>
            <a href="#" class="d-block mt-3">Solicitar nova senha</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>