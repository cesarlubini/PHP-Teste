<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Get, Post and Request</title>

  <style>
  body {
    font-family: sans-serif;
  }
  </style>
  
</head>
<body>
  <h2>GET</h2>
  <form action="validar.php" method="get">
    <label>Nome</label>
    <input type="text" name="nome">
    <label>Senha</label>
    <input type="password" name="senha">
    <button type="submit">Enviar</button>
  </form>

  <h2>POST</h2>
  <form action="validar.php" method="post">
    <label>Nome</label>
    <input type="text" name="nome">
    <label>Senha</label>
    <input type="password" name="senha">
    <button type="submit">Enviar</button>
  </form>

  
</body>
</html>