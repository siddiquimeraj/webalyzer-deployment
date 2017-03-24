<?php

namespace App\Models\Analyzer;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Result extends Moloquent {

	protected $connection = 'mongodb';
	protected $collection = 'analyzerresults';

	protected static $connection1 = "mongodb";

	protected static $collection1 = "analyzerresults";

	public static function getDetails($job_id) {
		$request_list = \DB::connection(self::$connection1)
			->collection(self::$collection1)
			->where("job_id", $job_id)
			->get();
		return $request_list;
	}
}