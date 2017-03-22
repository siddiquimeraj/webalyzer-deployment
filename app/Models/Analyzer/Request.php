<?php

namespace App\Models\Analyzer;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Request extends Moloquent {

	protected $connection = 'mongodb';
	protected $collection = 'analyzerrequests';
	protected static $connection1 = "mongodb";

	protected static $collection1 = "analyzerrequests";

	public static function getList() {
		$request_list = \DB::connection(self::$connection1)
			->collection(self::$collection1)
			->get();
		return $request_list;
	}
}