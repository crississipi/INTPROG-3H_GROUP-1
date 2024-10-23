<?php
session_start();
$user = "user";
$mode = "mode";

if (isset($_POST['login'])) {
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];
    if (($uname == $_SESSION["email"]) && ($upass == $_SESSION["password"])) {
        setcookie($user, $_SESSION["email"], time() + 3600, "/");
        echo 0;
    } else {
        echo 1;
    }
}

if (isset($_POST['signup'])) {
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $em = $_POST['em'];
    $pass = $_POST['pass'];
    $_SESSION["fname"] = filter_var($fn, FILTER_DEFAULT);
    $_SESSION["lname"] = filter_var($ln, FILTER_DEFAULT);
    $_SESSION["email"] = filter_var($em, FILTER_SANITIZE_EMAIL);
    $_SESSION["password"] = filter_var($pass, FILTER_DEFAULT);
    echo 0;
}

if (isset($_POST['changepass'])) {
    $em = $_POST['em'];
    $pass = $_POST['pass'];
    if ($_SESSION["email"] == $em) {
        $_SESSION["password"] = $pass;
        echo 0;
    } else {
        echo 1;
    }
}

if (isset($_POST['checkMode'])) {
    if (isset($_COOKIE[$user]) && isset($_COOKIE[$mode])) {
        if ($_COOKIE[$mode] == 1) {
            echo 1;
        } else {
            echo 0;
        }
    }
}

if (isset($_POST['profile'])) {
    $fname = $_SESSION["fname"];
    $lname = $_SESSION["lname"];
    $email = $_SESSION["email"];
    echo "
        <div class=\"small-card\"><i class=\"fa-solid fa-id-card\"></i><input type=\"text\" placeholder=\"First Name\" value=\"$fname\"></div>
        <div class=\"small-card\"><i class=\"fa-solid fa-id-card\"></i><input type=\"text\" placeholder=\"Last Name\" value=\"$lname\"></div>
        <div class=\"small-card\"><i class=\"fa-regular fa-calendar\"></i><input type=\"date\"></div>
        <div class=\"small-card\"><i class=\"fa-solid fa-calendar-check\"></i><input type=\"number\" min=\"1\" max=\"99\" value=\"1\"></div>
        <div class=\"small-card\"><i class=\"fa-solid fa-hashtag\"></i><input type=\"text\" placeholder=\"Contact Number\"></div>
        <div class=\"small-card\"><i class=\"fa-solid fa-at\"></i><input type=\"email\" placeholder=\"Email Address\" value=\"$email\"></div>
    ";
}

if (isset($_POST['switch'])) {
    $mode_val = $_POST['mode'];
    setcookie($user, $_SESSION["email"], time() + 3600, "/");
    setcookie($mode, $mode_val, time() + 3600, "/");
}
?>