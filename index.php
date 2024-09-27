<?php
require_once 'vendor/autoload.php';
require_once 'config.php';

use Basedatos\PDO\Connection;
use App\Controller\ContactoController;

$muestra = new ContactoController;
$connec = new Connection();
echo "Muestra la conecion a Base de datos: " . "</br>";
echo "<pre>";
var_dump($muestra->index());
//print_r();
// Basedatos\PDO\Connection