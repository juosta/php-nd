<!-- Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite,
 o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu
  (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos. -->
  <?php
  $color = "000000";
  if(isset($_GET['color'])){
        $color = $_GET['color'];
  }
    ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>WEB Mechanika</title>
      <style>
      body{
          background-color: #<?=$color?>;
      }
      a{
          display: block;
          color: white;
      }
      </style>
  </head>
  <body>
      <a href="./"><h2>WEB mechanika</h2></a>
  </body>
  </html>
  
  