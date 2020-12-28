<?php
  session_start();
//tylko zalogowany user
  if(!isset($_SESSION['zalogowany'])){
    $_SESSION['zgry']=true;
    header('Location:login.php');
    exit();
  }
?>
<!doctype html>
<html lang="en">

<head>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Tertis - MO Games
  </title>
</head>

<body style=" background: linear-gradient(to right, lightgreen,khaki);">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a href="#" class="navbar-brand"><b>MO Games</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Strona Główna <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Gry
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item " href="snake.php">Snake</a>
            <a class="dropdown-item active" href="tetris.php">Tetris</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="navbar-text">Zalogowany jako <?php echo $_SESSION['user'];?> !</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="account.php">Twoje konto</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="logout.php">Wyloguj</a>
        </li>
      </ul>
    </div>
  </nav>
  <style>
    .grid-container {
      display: grid;
      grid-template-columns: 200px 400px 200px;
      background-color: linear-gradient(to right, lightgreen, khaki);
      padding: 10px;
      justify-content: center;
    }

    .grid-item {
      background-color: rgba(255, 255, 255, 0.8);
      border: 1px solid rgba(0, 0, 0, 0.8);
      padding: 20px;
      font-size: 30px;
      text-align: center;
    }
  </style>
  <div class="grid-container">
    <div class="grid-item">
      Ranking placeholder
    </div>
    <div class="grid-item">
      <div class="container">
        <canvas id="tetrisgame" width="300" height="600"
          style=" margin-left: 0%; position: relative; margin-top: 5vmin;">
        </canvas>
        <div class="container" style="display: inline-block; text-align: center;margin-left: 0%">
          Score : <div id="score" style="display: inline-block; text-align: center;">0</div>
        </div>
      </div>
    </div>

    <div class="grid-item">
      <div class="container">
        <p style="color:black"> Next Block: </p>
        <canvas id="tetrisnext" width="150" height="150"
          style="center; margin-left: 5%; position: relative; margin-top: 0vmin;">
        </canvas>

        <p style="color:black"> Instrukcja: </p>
        <p style="color:black"> <b>/\</b> - obrót figury </p>
        <p style="color:black"> <b>
            < </b> - ruch w lewo </p>
        <p style="color:black"> <b> > </b> - ruch w prawo </p>
        <p style="color:black"> <b>\/</b> - szybszy spadek </p>
      </div>
      <script type="text/javascript" src="tetrisfigures.js"></script>
      <script type="text/javascript" src="tetrisgame.js"></script>
    </div>

</body>

</html>