
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
    if (isset($_POST['email'], $_POST['password'])) {
        
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

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        
        
        if (verifyEmail($email)) {

            $selectEmail = "SELECT email FROM users WHERE email='$email' LIMIT 1";
            $resultSelectEmail = $conn->query($selectEmail);
            
            if ($resultSelectEmail !== false && $resultSelectEmail->num_rows > 0) {
                
                $selectPassword = "SELECT parola FROM users WHERE email='$email' LIMIT 1";
                $resultSelectPassword = $conn->query($selectPassword);
                
                if ($resultSelectPassword !== false && $resultSelectPassword->num_rows > 0) {
                    
                    $password = md5($password);
                    
                    $row = $resultSelectPassword->fetch_assoc();
                    
                    if (verifyEqualityOfPasswords($password, $row["parola"])) {
                        echo json_encode(array("statusCode" => 200));
                    }
                    else {
                        echo json_encode(array("statusCode" => 201));
                    }
                }
                else {
                    echo json_encode(array("statusCode" => 201));
                }
            }
            else {
                echo json_encode(array("statusCode" => 201));
            }
        }
        else {
            echo json_encode(array("statusCode" => 201));
        }
    }
    else {
        echo json_encode(array("statusCode" => 201));
    }
?>























