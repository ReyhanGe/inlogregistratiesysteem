<?php
$active = (isset($_GET["content"])) ? $_GET["content"] : "";
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">Schoenen</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link <?php echo (in_array($active, ["home", ""])) ? "active" : "" ?>" aria-current="page" href="./index.php?content=home">home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link <?php echo ($active == "dames") ? "active" : "" ?>" href="./index.php?content=dames">dames</a>

        </li>
        <li class="nav-item ">
          <a class="nav-link <?php echo ($active == "heren") ? "active" : "" ?>" href="./index.php?content=heren">heren</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php echo (in_array($active, ["puma", "nike", "adidas"])) ? "active" : "" ?>" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            merk
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item <?php echo ($active == "puma") ? "active" : "" ?>" href="./index.php?content=puma">puma</a></li>
            <li><a class="dropdown-item <?php echo ($active == "nike") ? "active" : "" ?>" href="./index.php?content=nike">nike</a></li>
            <li><a class="dropdown-item <?php echo ($active == "adidas") ? "active" : "" ?>" href="./index.php?content=adidas">adidas</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav mx-auto">
        <li class="nav-item ">
          <a class="nav-link <?php echo ($active == "registreer") ? "active" : "" ?>" aria-current="page" href="./index.php?content=registreer">registreer</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link <?php echo ($active == "login") ? "active" : "" ?>" href="./index.php?content=login">inloggen</a>
        </li>
      </ul>
    </div>
  </div>
</nav>