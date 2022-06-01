<?php
include __DIR__ . '/dati.php';
?>

<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <style>
      <?php include "css/style.css" ?>
    </style>
    <title>DB University</title>
  </head>
  <body>
    <div class="container mt-3">
      <div class="row">
        <?php foreach ($data as $item){ ?>
        <div class="col-2">
          <div class="card text-center my-2">
            <img
              src="https://loremflickr.com/320/240"
              class="card-img-top img-fluid my-4"
              alt="Placeholder studente"
            />
            <div class="main-text-container">
              <h4><?php echo $item['name'] ?></h4>
              <h4><?php echo $item['surname'] ?></h4>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </body>
</html>
