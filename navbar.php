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
        <?php
          if (isset($_SESSION["id"])) {
            switch ($_SESSION["userrole"]) {
              case 'admin':
                echo '<li class="nav-item ">
                        <a class="nav-link '; echo (in_array($active, ["a-home", ""])) ? "active" : "" ;echo '" aria-current="page" href="./index.php?content=a-home">home</a>
                      </li>';
              break;
              case 'root':
                echo '<li class="nav-item ">
                        <a class="nav-link '; echo (in_array($active, ["r-home", ""])) ? "active" : "" ;echo '" aria-current="page" href="./index.php?content=r-home">home</a>
                      </li>';
              break;
              case 'moderator':
                echo '<li class="nav-item ">
                        <a class="nav-link '; echo (in_array($active, ["m-home", ""])) ? "active" : "" ;echo '" aria-current="page" href="./index.php?content=m-home">home</a>
                      </li>';
              break;
              case 'customer':
                echo '<li class="nav-item ">
                        <a class="nav-link '; echo (in_array($active, ["c-home", ""])) ? "active" : "" ;echo '" aria-current="page" href="./index.php?content=c-home">home</a>
                      </li>';
              break;

              default:
                echo '<li class="nav-item ">
                        <a class="nav-link '; echo (in_array($active, ["home", ""])) ? "active" : "" ;echo '" aria-current="page" href="./index.php?content=home">home</a>
                      </li>';
              break;

            }
          } else {
            echo '<li class="nav-item ">
                    <a class="nav-link '; echo (in_array($active, ["home", ""])) ? "active" : "" ;echo '" aria-current="page" href="./index.php?content=home">home</a>
                  </li>';
          }
        
        ?>
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
      <ul class="navbar-nav ms-auto ">

        <?php
        if (isset($_SESSION["id"])) {
          switch ($_SESSION["userrole"]) {
            case 'admin':
              // Maak hier de hyperlinks voor de gebruikersrol admin
              echo '<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ';
              echo (in_array($active, ["a-users", "a-reset_password"])) ? "active" : ""; echo '" href="#" id="navbarDropdownMenuLinkRight" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          admin workbench
                       </a>
                       <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkRight">
                         <li><a class="dropdown-item '; echo ($active == "a-users") ? "active" : "";  echo '" href="./index.php?content=a-users">users</a></li>
                         <li><a class="dropdown-item '; echo ($active == "a-reset_password") ? "active" : "";  echo '" href="./index.php?content=a-reset_password">reset password</a></li>
                       </ul>
                      </li>';
              break;
            case 'root':
              echo '<li class="nav-item ">
                        <a class="nav-link '; echo ($active == "r-rootpage") ? "active" : ""; echo '" href="./index.php?content=r-rootpage">rootpage</a>
                    </li>';

              break;
            case 'moderator':
              // Maak hier de hyperlinks voor de gebruikersrol moderator


              break;
            case 'customer':
              // Maak hier de hyperlinks voor de gebruikersrol customer

              break;
            default:
              break;
          }

          echo '<li class="nav-item ';
          echo ($active == "logout") ? "active" : "";
          echo '">
                    <a class="nav-link" href="./index.php?content=logout">uitloggen</a>
                  </li>';
        } else {
          echo '<li class="nav-item ';
          echo ($active == "registreer") ? "active" : "";
          echo '">
                    <a class="nav-link" href="./index.php?content=registreer">registreer</a>
                  </li>
                  <li class="nav-item ';
          echo ($active == "login") ? "active" : "";
          echo '">
                    <a class="nav-link" href="./index.php?content=login">inloggen</a>
                  </li>';
        }
        ?>
      </ul>
    </div>
  </div>
</nav>