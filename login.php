<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="login-container">
    <h2 class="login">Login</h2>
    <form action= "testLogin.php" method="POST" id="login-form">
      
      <div class="input-group">
        <label for="email">Email:</label>
        <input type="email" id="email" placeholder="Email" name="email" required>
      </div>
      <div class="input-group">
        <label for="password">Senha:</label>
        <input type="password" id="password" placeholder="Senha" name="senha" required>
      </div>
      <button type="submit" name="submit" >Entrar</button>
    </form>
  </div>

</body>
</html>
