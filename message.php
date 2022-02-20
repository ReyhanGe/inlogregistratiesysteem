<?php
   $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
  
    switch($alert) {
        case "no-email" :
            echo'<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
                        A simple danger alert—check it out!
                </div>';
            header("Refresh: 3; ./index.php?content=register");
        break;
        case "":

        break;
        case "":

        break;
        default:
            header("Location: ./index.php?content=home");
        break;
    }
        
?>






