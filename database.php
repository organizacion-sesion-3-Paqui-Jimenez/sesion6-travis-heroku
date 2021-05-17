<?php

// Información de la base de datos
// Ponemos variables de entorno de Heroku por si estamos desplegando allí.
// En caso contrario se cargarán los valores por defecto de una instalación local de XAMPP
// (usuario: 'root' ; password: '' )
// con base de datos llamada 'biblioteca'

// Comprobamos si estamos en Heroku con ClearDB buscando una variable de entorno definida sólo allí

$os = getenv('CLEARDB_DATABASE_URL');
if ($os) {
	$url = parse_url($os);
}
$settings = array(
    'driver' => 'mysql',
    'host' => 'eu-cdbr-west-01.cleardb.com'["host"] : 'localhost',
    'port' => $os ? $url["port"] : 3306,
    'database' => 'heroku_d041e1b4950ca72'["path"], 1) : 'biblioteca',
    'username' => 'b80e4d0b45e799'["user"] : 'root',
    'password' => 'b8a2e636'["password"] : '',
    'charset'   => 'utf8',
    'collation' => 'utf8_spanish_ci',
    'prefix' => ''
);

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection($settings);

// Set the event dispatcher used by Eloquent models... (optional)
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

?>
