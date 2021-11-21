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
          <h1>Bine ați venit !</h1>
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

                    $gender = ($_POST["gender"]);
                    if ($gender == "m") {
                        $gender = "masculin";
                    }
                    else{
                        $gender = "feminin";
                    }
                    echo "Genul: ".$gender;
                    echo  "<br>";

                    $age = ($_POST["age"]);
                    echo "Varsta: ".$age;
                    echo  "<br>";

                    $pass1 = ($_POST["password"]);
                    $pass2 = ($_POST["password2"]);
                    if (strlen($pass1) < 8 || strlen($pass2) < 8) {
                        $pass1 = "Parola nu corespunde cerințelor";
                    }
                    else {
                        $pass1 = md5($pass1);
                        $pass2 = md5($pass2);
                        if ($pass1 == $pass2) {
                        }
                        else {
                            $pass1 = "Parolele nu coincid";
                        }
                    }
                    echo "Parola: ".$pass1;     
                ?>
            </p>
            <p align="right"><a href="../ion_creanga.html" class="pagPrinc">Pagina principala</a></p>
        </div>
    </div>
</body>
</html>