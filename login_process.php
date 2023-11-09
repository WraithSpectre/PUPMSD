<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connect.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

echo "You attempted to login with " . $email . " and " . $pass. "<br>";

$stmt = $mysqli->prepare("SELECT user_id, email, pass, specialization FROM medical_staff where email = ?");
$stmt->bind_param("s", $email);
echo "Email: " . $email . "<br>";

$stmt->execute();
$stmt->store_result();

$stmt->bind_result($userid, $email, $stored_password, $specialization);

if ($stmt->num_rows == 1) {
    echo "I found one person with that email.<br>";

    if ($stmt->fetch() && password_verify($pass, $stored_password)) {
        echo "The Password Matches";
        echo "Login Success<br>";

        $_SESSION['email'] = $email;
        $_SESSION['userid'] = $userid;

        ob_end_clean();

        if ($specialization === "admin") {
            header("Location: admin/home.php");
        } elseif ($specialization === "md staff") {
            header("Location: md_staff/main.php");
        } else {
            header("Location: index.php");
        }

        exit;
    } else {
        $_SESSION = [];
        session_destroy();
        header("Location: index.php");
        exit;
    }
} else {
    $_SESSION = [];
    session_destroy();
    header("Location: index.php");
    exit;
}

?>