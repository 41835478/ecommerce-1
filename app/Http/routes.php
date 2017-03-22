<?php


require_once __DIR__ . "/Routes/common/files.php";

require_once __DIR__ . "/Routes/common/authentication.php";

require_once __DIR__ . "/Routes/common/Dashboard.php";
require_once __DIR__ . "/Routes/common/email.php";
require_once __DIR__ . "/Routes/common/authorization.php";
require_once __DIR__ . "/Routes/common/language.php";

require_once __DIR__ . "/Routes/common/users.php";



//Event::listen('illuminate.query', function($query)
//{
//    var_dump($query);
//});