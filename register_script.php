<?php // var_dump($_POST["email"]);    
    if (empty($_POST["email"])) {
        header("Location: ./index.php?content=message&alert=no-email");
    } else {
        include("./connect_db.php");
        include("./functions.php");

        $email = sanitize($_POST["email"]);
            
        $sql = "SELECT * FROM `register` WHERE `email` = '$email'";
        
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
            header("Location: ./index.php?content=message&alert=emailexists");
        } else {
            $password = "geheim";
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            $sql = "INSERT INTO `register`  (`id`,
                                             `email`,
                                             `password`,
                                             `userrole`)
                    VALUES                  (NULL,
                                             '$email',                    
                                             '$password_hash',
                                             'customer')";

            if (mysqli_query($conn, $sql)) {

                $id = mysqli_insert_id($conn);

                $to = $email;
                $subject = "Activatielink voor uw account van inlogregistratiesysteem.org";
                $message = '<!doctype html>
                                <html lang="en">
                                <head>
                                    <!-- Required meta tags -->
                                    <meta charset="utf-8">
                                    <meta name="viewport" content="width=device-width, initial-scale=1">
                                
                                    <!-- Bootstrap CSS -->
                                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

                                    <style>
                                      body {
                                        background-color: #dddddd;
                                        font-size: 1.3em;
                                      }
                                    </style>

                                    <title>Hello, world!</title>
                                </head>
                                <body>
                                    <h2>Beste Gebruiker,</h2>
                                    <p>U heeft zich onlangs geregistreerd voor de site http://www.inlogregistratiesysteem.org</p>
                                    <p>Klik <a href="http://www.inlogregistratiesysteem.org/index.php?content=activate&id='. $id.'&pwh='.$password_hash.'"> hier </a> voor het activeren en wijzigen van het wachtwoord van uw account</p>
                                    <p>Bedankt voor het registreren</p>
                                    <p>Met vriendelijke groet,</p>
                                    <p>Reyhan G.</p>
                                    <p>CEO Shoenen INC.</p>


                                    <!-- Optional JavaScript; choose one of the two! -->
                                
                                    <!-- Option 1: Bootstrap Bundle with Popper -->
                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                                
                  </body>
                </html>';

                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=UTF-8\r\n";
                $headers .= "From: admin@inlogregistratiesysteem.org\r\n";
                $headers .= "Cc: moderator@inlogregistratiesysteem.org\r\n";
                $headers .= "Bcc: root@inlogregistratiesysteem.org";


                mail($to, $subject, $message, $headers);


               header("Location: ./index.php?content=message&alert-register-success");
            }  else {
               header("Location: ./index.php?content=message&alert=register-error");
            }
        }
    }
?>