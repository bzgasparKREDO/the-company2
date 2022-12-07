<?php

include "../classes/User.php";

// instantiate
$user_obj = new User;

// calling the method update
$user_obj->update($_POST,$_FILES);