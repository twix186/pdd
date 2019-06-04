<?php
//Route::get('/', function () { return redirect('/admin/home'); });
Route::get('/', 'WelcomeController@index');
Route::get('/pdd', 'PddController@index');
Route::get('/exam', 'ExamController@index');
Route::resource('/tickets', 'TestController');
Route::resource('tests', 'TestController');
Route::resource('results', 'ResultsController');
// Authentication Routes...
Route::get('registration', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('registration', 'Auth\RegisterController@register');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('auth.login');
Route::post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('posts', 'Admin\PostsController');
    Route::post('posts_mass_destroy', ['uses' => 'Admin\PostsController@massDestroy', 'as' => 'posts.mass_destroy']);
    Route::post('posts_restore/{id}', ['uses' => 'Admin\PostsController@restore', 'as' => 'posts.restore']);
    Route::delete('posts_perma_del/{id}', ['uses' => 'Admin\PostsController@perma_del', 'as' => 'posts.perma_del']);
    Route::resource('questions', 'Admin\QuestionsController');
    Route::post('questions_mass_destroy', ['uses' => 'Admin\QuestionsController@massDestroy', 'as' => 'questions.mass_destroy']);
    Route::post('questions_restore/{id}', ['uses' => 'Admin\QuestionsController@restore', 'as' => 'questions.restore']);
    Route::delete('questions_perma_del/{id}', ['uses' => 'Admin\QuestionsController@perma_del', 'as' => 'questions.perma_del']);
    Route::resource('options', 'Admin\OptionsController');
    Route::post('options_mass_destroy', ['uses' => 'Admin\OptionsController@massDestroy', 'as' => 'options.mass_destroy']);
    Route::post('options_restore/{id}', ['uses' => 'Admin\OptionsController@restore', 'as' => 'options.restore']);
    Route::delete('options_perma_del/{id}', ['uses' => 'Admin\OptionsController@perma_del', 'as' => 'options.perma_del']);



 
});
