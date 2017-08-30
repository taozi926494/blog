<?php
namespace app\holeadmin\controller;

class Category {
	public function index() {
		header("Access-Control-Allow-Origin: *");
		$categoryData = array(
		  array(
		    "id" => 1,
		    "name" => "前端",
		    "subcate" => array(
		      array(
		        "id" => 1,
		        "name" => "HTML5"
		      ),
		      array(
		        "id" => 2,
		        "name" => "Vue"
		      )
		    )
		  ),
		  array(
		    "id" => 2,
		    "name" => "后端",
		    "subcate" => array(
		      array(
		        "id" => 1,
		        "name" => "PHP"
		      ),
		      array(
		        "id" => 2,
		        "name" => "ThinkPHP"
		      ),
		      array(
		        "id" => 3,
		        "name" => "Django"
		      ),
		      array(
		        "id" => 4,
		        "name" => "NodeJS"
		      )
		    )
		  )
		);

		return json($categoryData);
	}

	public function addDad() {
		header("Access-Control-Allow-Origin: *");
		
	}
}