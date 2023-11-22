<?php

if(isset($_POST["submit"]))
{
    include_once("config.php");
    $nome = $_POST["nome"];
    $senha = $_POST["senhausu"];
    $email = $_POST["email"];
    $dataregistro = $_POST["dataregistro"];
    $biografia = $_POST["biografia"];

    $response = mysqli_query($conexao, "INSERT INTO usuario(nome,senha,email,dataregistro,biografia) VALUES('$nome', '$senha', '$email', '$dataregistro', '$biografia')");
}


?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Usuário</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">OForum</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="form1.php">Usuário</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="form2.php">Tópico</a>
              </li>
            </ul>
          </div>
          </div>
      </nav>
    <main>
        <img src="oforum.png" alt="">
        <form action="form1.php" method="post">
        <div class="form1">
            <h1>USUÁRIO</h1><br>
             <label for="nome">Nome</label>
             <input type="text" name="nome" id="nome" placeholder="Digite o nome">
             <br><br>

             <label for="senhausu">Senha</label>
             <input type="password" name="senhausu" id="senhausu" placeholder="Digite a senha">
             <br><br>

             <label for="email">Email</label>
             <input type="email" name="email" id="email" placeholder="Digite o email">
             <br><br>

             <label for="dataregistro">Data de registro</label>
             <input type="date" name="dataregistro" id="dataregistro" placeholder="Digite a data de registro">
             <br><br>

             <label for="biografia" class="biografia">Biografia</label>
             <br>
             <textarea name="biografia" id="biografia" placeholder="Digite a biografia" rows="5" cols="33"></textarea>
             <br><br>

             <input type="submit" name="submit" id="submit2">

             <a href="login.html">
                <button id="submit">Voltar</button>
               </a>
        </div>
    </form>
     </main>   
</body>
</html>