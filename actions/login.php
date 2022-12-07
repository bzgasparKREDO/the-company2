<?php

include "../classes/User.php";

// instantiate / creating object
$user_obj = new User;
// calling the method login
$user_obj->login($_POST);