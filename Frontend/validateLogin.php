<?php

session_start();
$error = '';
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is incorrect";
    } else {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $dbc = mysqli_connect("localhost", "root", "", "royaldb");

        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($dbc, $username);
        $password = mysqli_real_escape_string($dbc, $password);

        $db = mysqli_select_db($dbc, "royaldb");

        $query = mysqli_query($dbc, "select * from tenant where password='$password' AND tenantId ='$username'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user'] = $username;

            header("location: home.php");
        } else {
            $error = "Username or Password is incorrect";
        }
        mysqli_close($dbc);
    }
}

?>