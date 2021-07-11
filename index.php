<?php

require __DIR__ . "/vendor/autoload.php";

use \App\Common\Environment;

Environment::load(__DIR__);

$env = getenv();
// print_r($env);

// echo getenv("WDEV3");
// var_dump(getenv("WDEV3"));

echo getenv("DB_HOST") . "\n";
echo getenv("DB_USER") . "\n";
echo getenv("DB_PASS") . "\n";
echo getenv("DB_NAME") . "\n";
