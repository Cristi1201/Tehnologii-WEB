
<?php
    function verifyName($name) {
        if (strlen($name) == 0) {
            return false;
        }
        return true;
    }

    function verifySurname($surname) {
        if (strlen($surname) == 0) {
            return false;
        }
        return true;
    }

    function verifyEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    function verifyPassword($pass) {
        $uppercase = preg_match('@[A-Z]@', $pass);
        $lowercase = preg_match('@[a-z]@', $pass);
        $number    = preg_match('@[0-9]@', $pass);
        if (!$uppercase || !$lowercase || !$number || strlen($pass) < 8) {
            return false;
        }
        return true;
    }

    function verifyEqualityOfPasswords($pass1, $pass2) {
        if ($pass1 != $pass2) {
            return false;
        }
        return true;
    }
?>

<?php
    if (isset($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['gender'], $_POST['age'], $_POST['password'], $_POST['password2'])) {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tw_bd";

        // crearea conexiunii
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // verificare conexiune
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $surname = mysqli_real_escape_string($conn, $_POST['surname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $age = mysqli_real_escape_string($conn, $_POST['age']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password2 = mysqli_real_escape_string($conn, $_POST['password2']);

        $allDataValidate = true;

        if (!verifyName($name)) {
            $allDataValidate = false;
        }
        
        if (!verifySurname($surname)) {
            $allDataValidate = false;
        }
        
        if (!verifyEmail($email)) {
            $allDataValidate = false;
        }
        
        if ($gender == "m") {
            $gender = "masculin";
        }
        else{
            $gender = "feminin";
        }

        if (!verifyPassword($password) || !verifyPassword($password2)) {
            $allDataValidate = false;
        }
        elseif (!verifyEqualityOfPasswords($password, $password2)) {
            $allDataValidate = false;
        }

        if ($allDataValidate) {
            $verifyEmailExist = "SELECT email FROM users WHERE email='$email'";

            $resultVerifyEmailExist = $conn->query($verifyEmailExist);

            if ($resultVerifyEmailExist->num_rows == 0) {
                $password = md5($password);
                $sql = "INSERT INTO users (prenume, nume, email, gen, varsta, parola) VALUES ('$name', '$surname', '$email', '$gender', '$age', '$password'";

                if (mysqli_query($conn, $sql)) {
                    echo json_encode(array("statusCode" => 200));
                }
                else {
                    echo json_encode(array("statusCode" => 201));
                    // die();
                }
            }
            else {
                echo json_encode(array("statusCode" => 202));
                // die();
            }
        }
    }
?>























