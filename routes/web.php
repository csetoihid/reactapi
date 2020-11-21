<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/test', function () use ($router) {
    return 'Hello test';
});


$router->get('/ChartData', ['middleware' => 'auth','uses'=>'ChartDataController@onAllSelect' ] );
$router->get('/ClientReview',['middleware' => 'auth','uses'=>'ClientReviewController@onAllSelect' ] );
$router->post('/ContactSend', ['middleware' => 'auth','uses'=>'ContactController@onContactSend'] );
$router->get('/CourseHome', ['middleware' => 'auth','uses'=>'CourseController@onSelectLimit'] );
$router->post('/CourseDetails', ['middleware' => 'auth','uses'=>'CourseController@onSelectDetails'] );
$router->get('/CourseAll', ['middleware' => 'auth','uses'=>'CourseController@onSelectAll'] );
$router->get('/Footer', ['middleware' => 'auth','uses'=>'FooterController@onSelectAll'] );
$router->get('/Information', ['middleware' => 'auth','uses'=>'InformationController@onSelectAll'] );
$router->get('/Services', ['middleware' => 'auth','uses'=>'ServiceController@onSelectAll'] );
$router->get('/Projects', ['middleware' => 'auth','uses'=>'ProjectController@onSelectAll'] );
$router->get('/ProjectsLimit', ['middleware' => 'auth','uses'=>'ProjectController@onSelectLimit'] );
$router->get('/ProjectDetails/{projectId}', ['middleware' => 'auth','uses'=>'ProjectController@onSelectDetails'] );
$router->get('/HomeVideo', ['middleware' => 'auth','uses'=>'HomeController@onSelectVideoVideo'] );
$router->get('/HomeProjectClient', ['middleware' => 'auth','uses'=>'HomeController@onSelectProjectClients'] );
$router->get('/HomeTech', ['middleware' => 'auth','uses'=>'HomeController@onSelectTechDes'] );
$router->get('/HomeTopTitle', ['middleware' => 'auth','uses'=>'HomeController@onSelectHomeTopTitle'] );



 