<?php session_start(); ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    

    <form action="./question1.php" method="post">
        <div class="mb-3">
            <h1>Existem somente 10 tipos de pessoas que entendem binário. Qual é a resposta correta?</h1>
        </div>

        <div class="mb-3">
            <input type="radio" id="question1" name="question1" value="10">
            <label for="question1">Somente 10 pessoas</label>
        </div>

        <div class="mb-3">
            <input type="radio" id="question1" name="question1" value="100">
            <label for="question1">Somente 100</label>
        </div>

        <div class="mb-3">
            <input type="radio" id="question1" name="question1" value="0">
            <label for="question1">Ninguém</label>
        </div>

        <div class="mb-3">
            <input type="radio" id="question1" name="question1" value="2">
            <label for="question1">Somente 2 pessoas</label>
        </div>
        
        <button type="submit" class="btn btn-primary">Próxima</button>
    </form>

    <?php
        if(isset($_POST['question1']) && !empty($_POST['question1'])){
            $_SESSION['question1'] = $_POST['question1'];
            header('Location: question2.php');
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>