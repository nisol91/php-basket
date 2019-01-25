<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.12/handlebars.js'></script>
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <div class="templates">
      <div class="codice">
        <h1></h1>
        <h2></h2>
        <h3></h3>
      </div>
      <?php include 'data.php'; ?>
      <!-- lo metto qui cosi non mi mostra l echo stringa dei dati del database -->
    </div>


    <?php /* questo e' per stampare a schermo con php ma di solito usiamo js!!!
    <?php foreach ($database as $key => $player) {
      ?> <h1>  <?php echo $player['codice']; ?>  </h1> <?php
    }; ?> */?>

    <div class="container">

    </div>


    <script src="script.js"></script>
  </body>
</html>
