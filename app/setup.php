<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/db_config.php';

$templatesPath = __DIR__ . '/../templates';

$loader = new Twig_Loader_Filesystem($templatesPath);
$twig = new Twig_Environment($loader);