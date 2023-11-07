<head>
<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connect.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

echo "You attempted to login with " . $email . " and " . $pass. "<br>";

$stmt = $mysqli->prepare("SELECT user_id, email, pass FROM medical_staff where email = ?");
$stmt->bind_param("s", $email);

$stmt->execute();
$stmt->store_result();

$stmt->bind_result($userid, $unane, $pw);

if ($stmt->num_rows == 1) {
    echo "I found one person with that email.<br>";
    $stmt->fetch();
    if (password_verify($pass, $pw)){
        echo "The Password Matches";
        echo "Login Sucess<br>";;
        $_SESSION['uname'] = $email;
         $_SESSION['userid'] = $userid;
         header('location: admin/home.php');
    }
    else {
        $_SESSION = [];
         session_destroy();
    }
}

else {
    $_SESSION = [];
    session_destroy();
}
echo "login failed!<br>";

echo "SESSION Variable = <br>";
echo "<pre>";
print_r($_SESSION);
echo "<pre>";

echo "<br><a href = 'index.php'> Return to Main Menu</a>";

?>