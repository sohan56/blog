<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'HomeController@index');

Route::get('/admin', 'AdminController@index');
Route::post('/admin-login-check', 'AdminController@adminLoginCheck');

Route::get('/deshboard', 'SuperadminController@index');
Route::get('/logout', 'SuperadminController@logout');

//Route For new admin
Route::get('/add-admin', 'SuperadminController@add_admin');
Route::post('/save-admin', 'SuperadminController@save_admin');
Route::get('/manage-admin', 'SuperadminController@manage_admin');
Route::get('/unpublish-admin/{id}', 'SuperadminController@unpublish_admin');
Route::get('/publish-admin/{id}', 'SuperadminController@publish_admin');
Route::get('/delete-admin/{id}', 'SuperadminController@delete_admin');
Route::get('/edit-admin/{id}', 'SuperadminController@edit_admin');
Route::post('/update-admin/', 'SuperadminController@update_admin');
Route::get('/admin-profile', 'SuperadminController@admin_profile');

//Route for about me
Route::get('/add-about', 'AboutController@add_about');
Route::post('/save-about', 'AboutController@save_about');
Route::get('/manage-about', 'AboutController@manage_about');
Route::get('/unpublish-about/{id}', 'AboutController@unpublish_about');
Route::get('/publish-about/{id}', 'AboutController@publish_about');
Route::get('/delete-about/{id}', 'AboutController@delete_about');
Route::get('/edit-about/{id}', 'AboutController@edit_about');
Route::post('/update-about/', 'AboutController@update_about');
Route::get('/download-cv', 'AboutController@download_cv');

//Route for My service
Route::get('/add-service', 'ServiceController@add_Service');
Route::post('/save-service', 'ServiceController@save_service');
Route::get('/manage-service', 'ServiceController@manage_service');
Route::get('/unpublish-service/{id}', 'ServiceController@unpublish_service');
Route::get('/publish-service/{id}', 'ServiceController@publish_service');
Route::get('/delete-service/{id}', 'ServiceController@delete_service');
Route::get('/edit-service/{id}', 'ServiceController@edit_service');
Route::post('/update-service/', 'ServiceController@update_service');

//Route for My skill
Route::get('/add-skill', 'SkillController@add_Skill');
Route::post('/save-skill', 'SkillController@save_skill');
Route::get('/manage-skill', 'SkillController@manage_skill');
Route::get('/unpublish-skill/{id}', 'SkillController@unpublish_skill');
Route::get('/publish-skill/{id}', 'SkillController@publish_skill');
Route::get('/delete-skill/{id}', 'SkillController@delete_skill');
Route::get('/edit-skill/{id}', 'SkillController@edit_skill');
Route::post('/update-skill/', 'SkillController@update_skill');

//Route for My story
Route::get('/add-story', 'StoryController@add_Story');
Route::post('/save-story', 'StoryController@save_story');
Route::get('/manage-story', 'StoryController@manage_story');
Route::get('/unpublish-story/{id}', 'StoryController@unpublish_story');
Route::get('/publish-story/{id}', 'StoryController@publish_story');
Route::get('/delete-story/{id}', 'StoryController@delete_story');
Route::get('/edit-story/{id}', 'StoryController@edit_story');
Route::post('/update-story/', 'StoryController@update_story');

 //route for  category
Route::get('/add-category', 'CategoryController@add_category');
Route::post('/save-category', 'CategoryController@save_category');
Route::get('/manage-category', 'CategoryController@manage_category');
Route::get('/unpublish-category/{id}', 'CategoryController@unpublish_category');
Route::get('/publish-category/{id}', 'CategoryController@publish_category');
Route::get('/delete-category/{id}', 'CategoryController@delete_category');
Route::get('/edit-category/{id}', 'CategoryController@edit_category');
Route::post('/update-category/', 'CategoryController@update_category');

 //route for  Contact Message
Route::post('/save-message', 'MessageController@save_message');
Route::post('/save-collectemail', 'MessageController@save_collectemail');


//Route for peoplesay
Route::get('/add-peoplesay', 'PeoplesayController@add_peoplesay');
Route::post('/save-peoplesay', 'PeoplesayController@save_peoplesay');
Route::get('/manage-peoplesay', 'PeoplesayController@manage_peoplesay');
Route::get('/unpublish-peoplesay/{id}', 'PeoplesayController@unpublish_peoplesay');
Route::get('/publish-peoplesay/{id}', 'PeoplesayController@publish_peoplesay');
Route::get('/delete-peoplesay/{id}', 'PeoplesayController@delete_peoplesay');
Route::get('/edit-peoplesay/{id}', 'PeoplesayController@edit_peoplesay');
Route::post('/update-peoplesay/', 'PeoplesayController@update_peoplesay');

//Route for portfolio
Route::get('/add-portfolio', 'PortfolioController@add_portfolio');
Route::post('/save-portfolio', 'PortfolioController@save_portfolio');
Route::get('/manage-portfolio', 'PortfolioController@manage_portfolio');
Route::get('/unpublish-portfolio/{id}', 'PortfolioController@unpublish_portfolio');
Route::get('/publish-portfolio/{id}', 'PortfolioController@publish_portfolio');
Route::get('/delete-portfolio/{id}', 'PortfolioController@delete_portfolio');
Route::get('/edit-portfolio/{id}', 'PortfolioController@edit_portfolio');
Route::post('/update-portfolio/', 'PortfolioController@update_portfolio');
Route::get('portfolio-details/{id}', 'PortfolioController@portfolio_details');
Route::get('/category/{id}', 'PortfolioController@show_category');