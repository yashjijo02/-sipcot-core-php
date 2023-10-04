<?php
// echo phpinfo();exit;

// Allow requests from any origin
// header("Access-Control-Allow-Origin: *");

// // Allow specific HTTP methods
// header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

// // Allow specific HTTP headers
// header("Access-Control-Allow-Headers: Content-Type, Authorization");

// // Allow cookies and HTTP authentication
// header("Access-Control-Allow-Credentials: true");

// // Set the maximum age for preflight requests (in seconds)
// header("Access-Control-Max-Age: 3600");

// // Content type for CORS preflight response
// header("Content-Type: application/json");




require dirname(__DIR__).'/'.basename(__DIR__). '/vendor/autoload.php';


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');
ini_set('display_errors', '1');


// defines
define('base_url', 'http://localhost/sipcot.enovasolutions.com/');
define('FCPATH', dirname(__FILE__).'/');
define('VIEW_PATH', dirname(__FILE__).'/App/Views/');


require dirname(__DIR__).'/'.basename(__DIR__).'/public/routes.php';

