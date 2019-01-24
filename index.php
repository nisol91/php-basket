<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.12/handlebars.js'></script>
    <?php include 'data.php'; ?>
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="sidebar">

      </div>
      <div class="dx-x">
        <div class="title">
          <h1>Choose a Player</h1>
        </div>
        <div class="contMail">

        </div>
      </div>
    </div>
    <!-- template di handlebars -->
    <script id="my-template" type="text/x-handlebars-template">
      <div class="entry">
        <h1>{{codice}}</h1>
      </div>
    </script>
    <script id="my-template-2" type="text/x-handlebars-template">
      <div class="entry">
        <h1>Punti: {{punti}}</h1>
        <h1>Rimbalzi: {{rimbalzi}}</h1>
        <h1>Falli: {{falli}}</h1>
        <h1>Percentuale Tiri da 2: {{perc_tiri2}}</h1>
        <h1>Percentuale Tiri da 3: {{perc_tiri3}}</h1>
      </div>
    </script>
    <!-- ****** -->
  </body>
</html>
