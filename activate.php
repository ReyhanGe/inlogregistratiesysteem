<?php
if (!(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"]))) {
  header("Location: ./index.php?content=message&alert=hacker-alert");
}
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-12 col-sm-6">
      <form action="./index.php?content=activate_script" method="post">
        <div class="mb-3">
          <label for="inputPassword" class="form-label">Kies een nieuwe wachtwoord:</label>
          <input name="password" type="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp" autofocus>
          <div id="passwordHelp" class="form-text">Kies een veilig wachtwoord...</div>
        </div>

        <div class="mb-3">
          <label for="inputPasswordCheck">Type het wachtwoord opnieuw:</label>
          <input name="passwordCheck" type="password" class="form-control" id="inputPassword" aria-describedby="passwordHelpCheck">
          <div id="passwordHelpCheck" class="form-text">Ter controle voert u nogmaals uw wachtwoord in...</div>
        </div>

        <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
        <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>">

        <div class="d-grid gap-2"><button type="submit" class="btn btn-info btn-lg btn-block btn-outline-warning">Activeer</button></div>

      </form>
    </div>
    <div class="col-12 col-sm-6">
      <img src="img\animeshoees.jpg" alt="shoe" class="w-75 mx-auto d-block ">
    </div>
  </div>
</div>
