<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>

    <link rel="stylesheet" type="text/css" href="../css/mainphp.css">
    <style>
        .bg {
            background-image: url("../img/tree.jpg");

            height: 100%; 

            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>



<body>

    <div class="bg">
        <div class="loginphp">
          <h1>Va mulțumim !</h1>
            <p class="data">
                <?php 
                    $name = ($_POST["name"]);
                    if (strlen($name) == 0) {
                        $name = "Introdceți numele";
                    }
                    echo "Nume: ".$name;
                    echo "<br>";
                    $surname = ($_POST["surname"]);
                    if (strlen($name) == 0) {
                        $name = "Introdceți prenumele";
                    }
                    echo "Prenume: ".$name;
                    echo "<br>";
                    $email = ($_POST["email"]);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $email = "Email-ul este incorect";
                    }
                    echo "Email: ".$email;
                    echo "<br>";
                    $comment = ($_POST["comment"]);
                    if (strlen($comment) == 0) {
                        $comment = "-";
                     }
                    echo "Comentariul: ".$comment;
                    echo "<br>";        
                ?>
            </p>
            <p align="right"><a href="../ion_creanga.html" class="pagPrinc">Pagina principala</a></p>
        </div>
    </div>
</body>
</html>