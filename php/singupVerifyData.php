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