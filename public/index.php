<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once '../autoloader.php';
require_once '../functions.php';

use App\Http\Router\Routes;

new Routes();

die();
?>
