<?php
  session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>
    MO Games
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
    <a href="#" class="navbar-brand">MO Games</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Strona Główna <span class="sr-only">(current)</span></a>
        </li>
        <?php
          if(isset($_SESSION['log'])&&($_SESSION['log']==true))
          {
            echo<<<END
            <li class="nav-item">
              <a class="nav-link" href="account.php">Twoje konto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Wylogowanie</a>
            </li>
            END;
          }
          else
          {
            echo<<<END
            <li class="nav-item">
              <a class="nav-link" href="login.php">Logowanie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Rejestracja</a>
            </li>
            END;
          }
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Gry
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="snake.php">Snake</a>
            <a class="dropdown-item" href="tetris.php">Tetris</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container" style="text-align: center; margin-top: 10vmin;">
    <h1 style="font-family: 'Times New Roman', Times, serif">
      Dostępne gry:
    </h1>
    <div id="karuzela" class="carousel slide container" data-ride="carousel"
      style="width: 50vmin; height: auto; position: relative;">
      <ol class="carousel-indicators">
        <li data-target="#karuzela" data-slide-to="0" class="active"></li>
        <li data-target="#karuzela" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="snake.php"><img src="snakelogo.png" class="thumbnail d-block w-100"></a>
        </div>
        <div class="carousel-item">
          <a href="tetris.php"><img src="tetrislogo.png" class="thumbnail d-block w-100"></a>
        </div>>
      </div>
      <a class="carousel-control-prev" href="#karuzela" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Poprzedni</span>
      </a>
      <a class="carousel-control-next" href="#karuzela" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Następny</span>
      </a>
    </div>
  </div>
</body>
</html>