<!-- Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje. -->
<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>WEB Mechanika</title>
      <style>
      body{
          background-color: black;
      }
      a{
          display: block;
          color: white;
      }
      label{
        color: white;
      }
      .form-item{
          margin: 10px 30px;
      }
      </style>
  </head>
  <body>
      <a href="./"><h2>WEB mechanika</h2></a>
      <form action="http://localhost/php-nd/web-mechanika/03" method="get">
      <label for="spalva" class="form-item">Fono spalva</label><br>
      <input type="text" name='color' class="form-item"> <br>
      <button type="submit" class="form-item">pakeisti fono spalva</button>
      </form>
  </body>
  </html>
  
  <?php
  if(isset($_GET['color'])){
  $color = $_GET['color'];
      echo "<style>
      body{
          background-color: #$color;
      }
      a{
          display: block;
          color: black;
      }
      </style>";
    }