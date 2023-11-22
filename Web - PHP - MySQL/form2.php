<?php

if(isset($_POST["submit"]))
{
    include_once("config.php");
    $titulo = $_POST["titulo"];
    $datatopico = $_POST["datatop"];


    $response = mysqli_query($conexao, "INSERT INTO topico(titulo,datatopico) VALUES('$titulo', '$datatopico')");
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
    <title>Tópico</title>
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
                <a class="nav-link" href="form1.php">Usuário</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="form2.php">Tópico</a>
              </li>
            </ul>
          </div>
          </div>
      </nav>
    <main>
    <div>
        <img src="oforum.png" alt="" srcset="">
        </div>
        <form action="form2.php" method="post">
        <div class="form2">
            <h1>TÓPICO</h1><br>
             <label for="titulo">Título do tópico</label>
             <input type="text" name="titulo" id="titulo" placeholder="Digite o título">
             <br><br>

             <label for="datatop">Data do tópico</label>
             <input type="date" name="datatop" id="datatop" placeholder="Digite a data">
             <br><br>

             <input type="submit" name="submit" id="submit">
          
        </div>
        </form>
     </main>   
</body>
</html>