<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Schoenen!</title>
  </head>
  <body>
    <main>
      <section class="container-fluid px-0">
        <div class="row">
          <div class="col-12">
            <?php include("./banner.php"); ?>
          </div>
        </div>
      </section>
      <section class="container-fluid px-0">
        <div class="row">
          <div class="col-12">
            <?php include("./navbar.php"); ?>
          </div>
        </div>
      </section>
      <section class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?php include("./home.php"); ?>
          </div>
        </div>
      </section>
      <section class="container-fluid px-0 fixed-bottom">
        <div class="row">
          <div class="col-12">
            <?php include("./footer.php"); ?>
          </div>
        </div>
      </section>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Mijn eigen javascript bestand -->
    <script src= "./js/app.js"></script>

  </body>
</html>