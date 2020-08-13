<?php

/*
frontEdn
*/
Route::get('/','welcomeController@index');
Route::get('/about','welcomeController@about');
Route::get('/book','welcomeController@book');
Route::get('/feedBack','welcomeController@feedBack');
Route::get('/contact','welcomeController@contact');
Route::get('/quranBookList/{id}','welcomeController@quranBookList');
Route::get('/readPdf/{id}','welcomeController@readPdf');



/*-----------------------------------------------------Read important Book------------------------------------------------------------------------*/
Route::get('/readImportantBook/{id}','welcomeController@readImportantBook');
/*-----------------------------------------------------Read important Book------------------------------------------------------------------------*/

/*-----------------------------------------------------feedBack------------------------------------------------------------------------*/
Route::post('/feedBack/save','frontEndReviewController@saveFeedback')->name('/saveFeedback');
Route::get('/feedBack/manage','frontEndReviewController@manageFeedback')->name('/manageFeedback');
Route::get('/feedBack/view/{id}','frontEndReviewController@viewFeedback')->name('/feedBack/view');
/*-----------------------------------------------------feedBack------------------------------------------------------------------------*/


/*-----------------------------------------------------newsLetter------------------------------------------------------------------------*/
Route::post('/newsLetter/save','newsLetterController@saveNewsLetter')->name('/saveNewsLetter');
Route::get('/newsLetter/manage','newsLetterController@manageNewsLetter')->name('/manageNewsLetter');
Route::get('/newsLetter/view/{id}','newsLetterController@viewNewsLetter')->name('/newsLetter/view');
/*-----------------------------------------------------newsLetter------------------------------------------------------------------------*/


/*-----------------------------------------------------feedBack------------------------------------------------------------------------*/
Route::get('/download/{id}','welcomeController@download');
/*-----------------------------------------------------feedBack------------------------------------------------------------------------*/





/*
endFrontEdn
*/
/*-----------------------------------------------------admin------------------------------------------------------------------------*/
Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
/*-----------------------------------------------------admin------------------------------------------------------------------------*/

Route::get('/user-login', 'frontEndLoginController@showLoginForm')->name('user-login');



/*-----------------------------------------------------user------------------------------------------------------------------------*/
Route::post('/reader-login', 'readerController@login')->name('reader-login');
Route::post('/reader-register', 'readerController@register')->name('reader-register');
Route::get('/logout', 'readerController@logout')->name('logout');
/*-----------------------------------------------------user------------------------------------------------------------------------*/



Route::group(['middleware'=>'categoryMiddleware'],function(){

	/*-------------------------categoryController ----------------------------------------------*/
	Route::get('/category/add','categoryController@createCategory')->name('/category/add');
	Route::post('/category/save','categoryController@saveCategory')->name('/category/save');
	Route::get('/category/manage','categoryController@manageCategory')->name('/category/manage');
	Route::get('/category/edit/{id}','categoryController@editCategory')->name('/category/edit');
	Route::post('/category/update/{id}','categoryController@updateCategory')->name('/category/update');
	Route::get('/category/delete/{id}','categoryController@deleteCategory')->name('/category/delete');
	/*-------------------------endCategoryController ----------------------------------------------*/

	/*-------------------------importantBooksController ----------------------------------------------*/
	Route::get('/importantBooks/add','importantBooksController@createImportantBooks')->name('/importantBooks/add');
	Route::post('/importantBooks/save','importantBooksController@saveImportantBooks')->name('/importantBooks/save');
	Route::get('/importantBooks/manage','importantBooksController@manageImportantBooks')->name('/importantBooks/manage');
	Route::get('/importantBooks/edit/{id}','importantBooksController@editImportantBooks')->name('/importantBooks/edit');
	Route::post('/importantBooks/update/{id}','importantBooksController@updateImportantBooks')->name('/importantBooks/update');
	Route::get('/importantBooks/delete/{id}','importantBooksController@deleteImportantBooks')->name('/importantBooks/delete');
	/*-------------------------endImportantBooksController ----------------------------------------------*/

	/*-------------------------bookListController ----------------------------------------------*/
	Route::get('/bookList/add','bookListController@createBookList')->name('/bookList/add');
	Route::post('/bookList/save','bookListController@saveBookList')->name('/bookList/save');
	Route::get('/bookList/manage','bookListController@manageBookList')->name('/bookList/manage');
	Route::get('/bookList/view/{id}','bookListController@viewBookList')->name('/bookList/view');
	Route::get('/bookList/edit/{id}','bookListController@editBookList')->name('/bookList/edit');
	Route::post('/bookList/update/{id}','bookListController@updateBookList')->name('/bookList/update');
	Route::get('/bookList/delete/{id}','bookListController@deleteBookList')->name('/bookList/delete');
	/*-------------------------endBookListController ----------------------------------------------*/

	/*-------------------------aboutController ----------------------------------------------*/
	Route::get('/about/add','aboutController@createAbout')->name('/about/add');
	Route::post('/about/save','aboutController@saveAbout')->name('/about/save');
	Route::get('/about/manage','aboutController@manageAbout')->name('/about/manage');
	Route::get('/about/view/{id}','aboutController@viewAbout')->name('/about/view');
	Route::get('/about/edit/{id}','aboutController@editAbout')->name('/about/edit');
	Route::post('/about/update/{id}','aboutController@updateAbout')->name('/about/update');
	Route::get('/about/delete/{id}','aboutController@deleteAbout')->name('/about/delete');
	/*-------------------------endAboutController ----------------------------------------------*/

});