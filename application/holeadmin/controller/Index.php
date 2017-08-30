<?php
namespace app\holeadmin\controller;
use think\Db;

class Index {
	public $static_url;
	function __construct() {
		$config_url = config('url');
		$this->static_url = $config_url['domain'].$config_url['static'];
	}
	public function index() {
		return view("index");
	}
}