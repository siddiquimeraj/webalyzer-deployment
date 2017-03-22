<?php

namespace App\Models\Analyzer;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Result extends Moloquent {

	protected static $connection1 = "mongodb";

	protected static $collection1 = "analyzerresults";

	public static function getDetails($domain_name) {
		$request_list = \DB::connection(self::$connection1)
			->collection(self::$collection1)
			->where("domain_name", $domain_name)
			->get();
		return $request_list;
	}
}