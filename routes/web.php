
<?php 
// This is where the user can see a login button for logging into Google
Route::get('/', 'HomeController@index');

// This is where the user gets redirected upon clicking the login button on the home page
Route::get('/login', 'HomeController@login');

// Shows a list of things that the user can do in the app
Route::get('/dashboard', 'AdminController@index');

// Shows a list of files in the users' Google drive
Route::get('/files', 'AdminController@files');

// Allows the user to search for a file in the Google drive
Route::get('/search', 'AdminController@search');

// Allows the user to upload new files
Route::get('/upload', 'AdminController@upload');
Route::post('/upload', 'AdminController@doUpload');

// Allows the user to delete a file
Route::get('/delete/{id}', 'AdminController@delete');

Route::get('/logout', 'AdminController@logout');



