<?php

namespace App\Http\Controllers\Frontend\Analyzer;

use App\Http\Controllers\Controller;
use App\Models\Analyzer;
use App\Models\Analyzer\Request as AnalyzerRequest;
use App\Models\Analyzer\Result as AnalyzerResult;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

/**
 * Class AnalyzerController.
 */
class AnalyzerController extends Controller {
	//http://158.69.0.135:8001/analyzer
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index(Request $request) {
		$message = "";
		if (!empty($request->input('domain_name'))) {
			$all_data = $request->all();
			unset($all_data['_token']);
			$post_result = $this->sendToNodeApi($all_data);
			$post_body = json_decode($post_result);
			if (isset($post_body->msg)) {
				$message = $post_body->msg;
			}
		}
		$analyzer_results = AnalyzerRequest::paginate(10);
		return view('frontend.analyzer.index', compact('analyzer_results', 'message'));
	}

	public function result(Request $request, $job_id) {
		$domain_analysis = (string) AnalyzerResult::getDetails($job_id);
		$url_data = json_decode($domain_analysis, true)[0];
		echo "<pre>";
		var_dump($url_data);
		die();
		return view('frontend.analyzer.result')->with("records", $url_data);
	}

	public function sendToNodeApi($form_data) {
		$client = new Client();
		$res = $client->request('POST', 'http://localhost:3301/analyzer', [
			'form_params' => $form_data,
		]);
		return $res->getBody()->getContents();
	}
}
