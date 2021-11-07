<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace( 'Website\Controllers' );

SimpleRouter::group( [ 'prefix' => site_url() ], function () {

	// START: Zet hier al eigen routes (alle URL's die je op je website hebt) en welke controller en functie deze pagina afhandelt
	// Lees de docs, daar zie je hoe je routes kunt maken: https://github.com/skipperbent/simple-php-router#routes

	SimpleRouter::get( '/', 'WebsiteController@home' )->name( 'home' );
	SimpleRouter::get( '/registreren', 'RegistrationController@registrationForm' )->name('register.form');
	SimpleRouter::post( '/registreren/verwerken', 'RegistrationController@handleRegistrationForm' )->name('register.handle' );
	SimpleRouter::get( '/registreren/bedankt', 'RegistrationController@registrationThankYou' )->name('register.ThankYou');
	SimpleRouter::get( '/over_ons', 'WebsiteController@over_ons' )->name('over_ons');
	SimpleRouter::get( '/contact', 'WebsiteController@contact' )->name('contact');	

	SimpleRouter::group(['prefix' => '/topics'], function(){
		SimpleRouter::get('','TopicController@index')->name('topics.index');
		SimpleRouter::get('/new','TopicController@new')->name('topics.new');
		SimpleRouter::post('/new','TopicController@save')->name('topics.save');
	});


	
	SimpleRouter::get('/blog','BlogController@index')->name('blog.index'); 
	SimpleRouter::get('/blog/{slug}','BlogController@showBlog')->name('blog.detail');
	
	// STOP: Tot hier al je eigen URL's zetten, dit stukje laat de 4040 pagina zien als een route/url niet kan worden gevonden.
	SimpleRouter::get( '/not-found', function () {
		http_response_code( 404 );

		return '404 Page not Found';
	} );

} );


// Dit zorgt er voor dat bij een niet bestaande route, de 404 pagina wordt getoond (die hierboven als route staat ingesteld)
SimpleRouter::error( function ( Request $request, \Exception $exception ) {
	if ( $exception instanceof NotFoundHttpException && $exception->getCode() === 404 ) {
		response()->redirect( site_url() . '/not-found' );
	}

} );

