<?php
$userID = filter_input(INPUT_POST, "userID");
$firstName = filter_input(INPUT_POST, "firstName");
$lastName = filter_input(INPUT_POST, "lastName");
$email = filter_input(INPUT_POST, "email");
$password1 = filter_input(INPUT_POST, "password1");
$password2 = filter_input(INPUT_POST, "password2");

if ($password1 !== $password2) {
    echo 'fuck off';
}

