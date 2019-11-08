<?php

define('BASE', '/');


header('Content-Type: application/json'); 

/* Receive url components */

$request = $_SERVER['REQUEST_URI'];

/* Include Mysql Credentials */

require_once(__DIR__ . '/config.php');

/* Include Custom Library for all transactions */

require_once(__DIR__ . '/library.php');

/* New Instance of the library class */

$handler = new Library();

/** Router **/

switch ($request) {

    case '/api/students/all' :

    	/* Fetch all the students */

    	$response = $handler->all();
        
        break;

    case  (substr($request, 0, 23) == '/api/students/category/') :

    	/* Fetch student by Category */

    	$param = strtolower(substr($request, 23));

    	if (in_array($param, ['science', 'art', 'commercial'])){

    		$response = $handler->list_by_cat($param);

    	}
    	else{

    		$response = [
    						'status' => 'fail',

    						'description' => 'Invalid Category'
    					];

    	}

        break;

    case  '/api/students/statistics' :

    	/* Retrieve number of students offering each subjects */

    	$response = $handler->cat_count();

        break;

    default:

        http_response_code(404);

		$response = [
						'status' => 'fail',

						'description' => 'Invalid Category'
					];
        break;
}


/* Output Response */

echo json_encode($response);


?>