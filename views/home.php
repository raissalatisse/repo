<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Login - Salão de Cabeleireiro</title>
<style>
  /* Fundo suave em degradê rosa */
  body {
    background: linear-gradient(135deg, #ffc1cc, #ff69b4);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  form {
    background: #ffe6f0; /* rosa clarinho */
    padding: 30px 40px;
    border-radius: 15px;
    box-shadow: 0 8px 15px rgba(255, 105, 180, 0.3);
    width: 320px;
  }

  label {
    font-weight: 600;
    color: #d6336c; /* rosa escuro */
    font-size: 1.1em;
  }

  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 10px 12px;
    margin-top: 6px;
    border-radius: 8px;
    border: 2px solid #ff69b4;
    outline: none;
    font-size: 1em;
    transition: border-color 0.3s ease;
  }

  input[type="text"]:focus,
  input[type="password"]:focus {
    border-color: #d6336c;
    box-shadow: 0 0 8px #d6336c;
  }

  input[type="submit"] {
    background-color: #d6336c;
    color: white;
    border: none;
    padding: 12px;
    width: 100%;
    border-radius: 10px;
    font-size: 1.1em;
    cursor: pointer;
    margin-top: 15px;
    transition: background-color 0.3s ease;
    font-weight: 700;
  }

  input[type="submit"]:hover {
    background-color: #ff69b4;
  }

  .alert {
    background-color: #f8d7da;
    color: #842029;
    padding: 10px 15px;
    border-radius: 8px;
    margin-top: 10px;
    font-weight: 600;
    border: 1px solid #f5c2c7;
  }
</style>
</head>
<body>

<form method="post" action="login.php">
  <label>Digite o nome do usuário</label><br>
  <input type="text" name="usuario" placeholder="Nome do usuário">
  <br><br>
  <label>Digite a senha</label><br>
  <input type="password" name="senha" placeholder="Senha">
  <br><br>
  <input type="submit" value="Entrar">
</form>
<br>
<?php if (isset($_GET['erro'])){ ?>
  <div class="alert" role="alert">
    Usuário e/ou senha inválido(s).
  </div>
<?php } ?>

</body>
</html>
