<?php
function verifyCredentials($email, $password) {
    return $email === 'sok@gmail.com' && $password === '123456789';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        if (verifyCredentials($email, $password)) {
            echo 'Success Login';
        } else {
            header("Location: login.php?error=1");
            exit();
        }
    } else {
        header("Location: login.php");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>

