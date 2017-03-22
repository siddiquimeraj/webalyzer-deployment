<?php

namespace App\Http\Controllers\Frontend\Analyzer;

use App\Http\Controllers\Controller;
use App\Models\Analyzer;
use App\Models\Analyzer\Request as AnalyzerRequest;
use Illuminate\Http\Request;

/**
 * Class AnalyzerController.
 */
class AnalyzerController extends Controller {
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index() {
		$analyzer_results = AnalyzerRequest::paginate(10);
		return view('frontend.analyzer.index', compact('analyzer_results'));
	}

	public function result(Request $request, $domain_name) {
		$domain_analysis = (string) Analyzer\Result::getDetails($domain_name);
		$url_data = json_decode($domain_analysis, true)[0];

		return view('frontend.analyzer.result')->with("records", $url_data);
	}
}
