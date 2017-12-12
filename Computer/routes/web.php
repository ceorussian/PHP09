<?php
			

					//login
Route::get('login','LoginController@GetLogin')->name('login');
Route::post('login','LoginController@PostLogin');
Route::get('logout','LoginController@getLogout')->name('logout');

				
Route::group(['middleware'=>'admin'],function(){
			//Admin//	
	Route::get('home-admin','AdminController@HomeAdmin')->name('home_admin');
			//product
	Route::get('list-product','MyController@ListProduct')->name('list-product');
	Route::get('add-product','MyController@GetAddProduct')->name('add_product');
	Route::post('add-product','MyController@PostAddProduct')->name('insert_product');
	Route::get('edit-product/{id}','MyController@GetEditProduct');
	Route::post('edit-product/{id}','MyController@PostEditProduct')->name('edit_product');
	Route::get('delete-product/{id}','MyController@GetDeleteProduct')->name('delete_product');
	Route::get('categories-product/{category_id}','MyController@GetCategoriesProduct')->name('category.detail');

					//categories product

Route::get('list-categries','MyController@ListCategoriesProduct')->name('list_categories');
Route::get('add-category','MyController@GetAddCategory');
Route::post('add-category','MyController@PostAddCategory')->name('insert_category');
Route::get('edit-category/{id}','MyController@GetEditCategory');
Route::post('edit-category','MyController@PostEditCategory')->name('edit_category');
Route::get('delete-category/{id}','MyController@DeleteCategory')->name('delete_category');

					//user

Route::get('list-user','UserController@ListUser')->name('list_user');
Route::get('add-user','UserController@GetAddUser')->name('add_user');
Route::post('insert-user','UserController@PostAddUser')->name('insert_user');
Route::get('edit-user/{id}','UserController@GetEditUser');
Route::post('edit-user/{id}','UserController@PostEditUser')->name('edit_user');
Route::get('role-user/{roleuser}','UserController@RoleUser')->name('role_user');
Route::get('delete-user/{id}','UserController@DeleteUser')->name('delete_user');

					// accessories(linh kien)

Route::get('list-accessories','AccessoriesController@ListAccessories')->name('list_accessories');
Route::get('add-accessories','AccessoriesController@GetAddAccessories');
Route::post('add-accessories','AccessoriesController@PostAddAccessories')->name('add_accessories');
Route::get('edit-accessories/{id}','AccessoriesController@GetEditAccessories');
Route::post('edit-accessories/{id}','AccessoriesController@PostEditAccessories')->name('edit_accessories');
Route::get('delete-accessories/{id}','AccessoriesController@DeleteAccessories')->name('delete_accessories');

					// categories Accessories
Route::get('list-category-accessories','AccessoriesController@ListCategoriesAccessories')->name('list_categories_accessories');
Route::get('add-category-accessories','AccessoriesController@GetAddCategoryAccessories');
Route::post('acc-category-accessories','AccessoriesController@PostAddCategoryAccessories')->name('insert_category');
Route::get('edit-category-accessories/{id}','AccessoriesController@GetEditCategoryAccessories');
Route::post('edit-category-accessories/{id}','AccessoriesController@PostEditCategoryAccessories')->name('edit_category_accessories');
Route::get('delete-category-accessories/{id}','AccessoriesController@DeleteCategoryAccessories');
Route::get('category_accessories/{category_id}','AccessoriesController@ListAccessoriesOfCategory');
							//seach
Route::post('seach','MyController@Seach')->name('seach');
							//cart 
Route::get('list-cart','CartController@ListCart');
Route::get('detail-order/{id}','CartController@DetailCart');
});
							//index
Route::get('index','HomeController@index')->name('index');
Route::get('login_customer','HomeController@GetLogin')->name('login_customer');
Route::post('login_customer','HomeController@PostLogin');
Route::get('register-member','HomeController@GetRegister')->name('register_member');
Route::post('register_member','HomeController@PostRegister')->name('register');
Route::get('detail_product/{id}','HomeController@DetailProduct');
Route::post('seach-product','HomeController@SeachProduct');
							//cart

Route::get('buy/{id}','CartController@Buy');
Route::get('cart','CartController@Cart')->name('cart');
Route::get('delete-cart/{rowId}','CartController@DeleteCart');

							//Order
Route::get('order','CartController@Order')->name('order');
Route::get('category_product/{category_id}','HomeController@CategoryProduct');
							//login facebook
Route::get('/auth/facebook', 'LoginFacebook@redirectToProvider');
Route::get('/auth/facebook/callback', 'LoginFacebook@handleProviderCallback');