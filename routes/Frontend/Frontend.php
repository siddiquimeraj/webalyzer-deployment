<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'FrontendController@index')->name('index');
Route::get('macros', 'FrontendController@macros')->name('macros');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
	Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
		/*
			         * User Dashboard Specific
		*/
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');

		/*
			         * User Account Specific
		*/
		Route::get('account', 'AccountController@index')->name('account');

		/*
			         * User Profile Specific
		*/
		Route::patch('profile/update', 'ProfileController@update')->name('profile.update');
	});

	Route::group(['namespace' => 'Analyzer', 'as' => 'analyzer.'], function () {
		/**
		 *Analyzer Request
		 */
		Route::get('analyzer', 'AnalyzerController@index')->name('analyzer');

		/**
		 *Analyzer Request
		 */
		Route::get('analysis/{domain_name}', 'AnalyzerController@result')->name('result');

	});

});
