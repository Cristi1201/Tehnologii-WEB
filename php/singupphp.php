<?php
    include 'connection.php';
    include 'singupVerifyData.php';

    if (isset($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['gender'], $_POST['age'], $_POST['password'], $_POST['password2'])) {

        $conn = conexiune("localhost", "root", "", "tw_bd");

        if (!$conn) {
          die("Conexiunea nu a reusit: " . mysqli_connect_error());
        }

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $surname = mysqli_real_escape_string($conn, $_POST['surname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $age = mysqli_real_escape_string($conn, $_POST['age']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password2 = mysqli_real_escape_string($conn, $_POST['password2']);

        if  (verifyName($name) 
            && verifySurname($surname) 
            && verifyEmail($email) 
            && ($gender == 'm' || $gender == 'f') 
            && verifyPassword($password) 
            && verifyPassword($password2) 
            && verifyEqualityOfPasswords($password, $password2)) {

            $verifyEmailExist = "SELECT email FROM users WHERE email='$email'";
            $resultVerifyEmailExist = $conn->query($verifyEmailExist);

            if ($resultVerifyEmailExist->num_rows == 0) {
                $password = md5($password);
                $sql = "INSERT INTO users (prenume, nume, email, gen, varsta, log_date, parola) VALUES ('$name', '$surname', '$email', '$gender', '$age', CURDATE(), '$password')";

                if (mysqli_query($conn, $sql)) {
                    echo json_encode(array("statusCode" => 200));
                }
                else {
                    echo json_encode(array("statusCode" => 201));
                }
            }
            else {
                echo json_encode(array("statusCode" => 202));
            }
        }
        else {
            echo json_encode(array("statusCode" => 202));
        }
    }
?>























