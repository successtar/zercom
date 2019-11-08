<?php

/* Prevent Direct Access */

defined('BASE') OR exit('No direct script access allowed');


class Library{

	private $myquery;

	public function __construct() {

		/* Connect to database */

    	$this->myquery = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB) 

    					or die('{"status": "error", "message": "Connection to database fail"}');
  	}

	public function all(){

		/** Fetch all students with their center name **/

		$result = [];

		$sql = "SELECT candidates.candidate_id, candidates.candidate_name, centres.centre_name ";

		$sql .= "FROM candidates INNER JOIN centres ON candidates.centre_id = centres.centre_id";

		$query = mysqli_query($this->myquery, $sql) or die('{"status": "error", "message": "Sql Error"}');

        /* Extract result */

        foreach ($query as $row) {

        	$result[] = $row;
        }

    	return  [ 
					'status' => 'success',

					'description' => (empty($result) ? 'Empty Record' : 'Record fetched Successfully'),

					'data' => $result
				];
	}

	public function list_by_cat($param){

		/** Fetch students by category **/

		$result = [];

		$sql = "SELECT candidates.candidate_id, candidates.candidate_name, centres.centre_name FROM candidates ";

		$sql .= "INNER JOIN categories ON candidates.category_id = categories.categories_id ";

		$sql .= "INNER JOIN centres ON candidates.centre_id = centres.centre_id ";

		$sql .= "WHERE categories.category_name = '$param'";

		$query = mysqli_query($this->myquery, $sql) or die('{"status": "error", "message": "Sql Error"}');

        /* Extract result */

        foreach ($query as $row) {

        	$result[] = $row;
        }

    	return  [ 
					'status' => 'success',

					'description' => (empty($result) ? 'Empty Record' : 'Record fetched Successfully'),

					'data' => $result
				];

	}

	public function cat_count(){

		/** Fetch students number in each category **/

		$result = [];

		$sql = "SELECT COUNT(categories.category_name) AS counter, categories.category_name FROM ";

		$sql .= "candidates INNER JOIN categories ";

		$sql .= "ON candidates.category_id = categories.categories_id GROUP BY category_id";

		$query = mysqli_query($this->myquery, $sql) or die('{"status": "error", "message": "Sql Error"}');

        /* Extract result */

        foreach ($query as $row) {

        	$result[] = [
        					$row['category_name'] => $row['counter']
        				];
        }

    	return  [ 
					'status' => 'success',

					'description' => (empty($result) ? 'Empty Record' : 'Students number in each category fetched'),

					'data' => $result
				];

	}
}



?>