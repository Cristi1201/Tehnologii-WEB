<?php
    function verifyEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
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
    include 'connection.php';

    if (isset($_POST['email'], $_POST['password'])) {
        
        $conn = conexiune("localhost", "root", "", "tw_bd");

        if (!$conn) {
          die("Conexiunea nu a reusit: " . mysqli_connect_error());
        }

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        
        if (verifyEmail($email)) {

            $selectCredentials = "SELECT email, parola FROM users WHERE email='$email' LIMIT 1";
            $resultSelectCredentials = $conn->query($selectCredentials);
            
            if ($resultSelectCredentials !== false && $resultSelectCredentials->num_rows > 0) {

                $result = $resultSelectCredentials->fetch_assoc();
                $password = md5($password);

                if (verifyEqualityOfPasswords($password, $result["parola"])) {
                    echo json_encode(array("statusCode" => 200));
                    die();
                }
            }
        }
    }
    echo json_encode(array("statusCode" => 201));
    die();
?>























