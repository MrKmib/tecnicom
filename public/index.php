<?php
/* Esta es la unica puerta de entrada */
// use Pecee\SimpleRouter\SimpleRouter;

// Load our helpers
// require_once 'helpers.php';


//importamos las configuraciones de la base de datos
require_once '../config/database.php';

require_once '../autoload.php';
// require_once '../vendor/autoload.php';

//rutas de routes/web.php
require_once '../routes/web.php';

//extender layout
// require_once  '../resources/views/layouts/layout.php';

// SimpleRouter::enableMultiRouteRendering(false);
// // Start the routing
// echo SimpleRouter::start();