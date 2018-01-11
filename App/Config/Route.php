<?php
	return [
		"directs" => [
			"/" => "App\Controllers\HomeController@index",
			"login.html" => "App\Controllers\IOController@login",
			"logout.html" => "App\Controllers\IOController@logout",
			"user.html" => "App\Controllers\UserController@index",
			"signUp.html" => "App\Controllers\UserController@signUp",
			"profile.html" => "App\Controllers\UserController@profile",
			"profileUpdate.html" => "App\Controllers\UserController@update",
			"editprofile.html" => "App\Controllers\UserController@editprofile",
			"cart.html" => "App\Controllers\CartController@index",
			"addcart.html" => "App\Controllers\CartController@addCart",
			"newproduct.html" => "App\Controllers\ProductController@newproduct",
			"addNewProduct.html" => "App\Controllers\AdminController@addNewProduct",
			"tnewProductAjax" => "App\Controllers\AdminController@newProductAjax",
			"addNewProductType" => "App\Controllers\AdminController@addNewProductType",
			"hakkimizda.html" => "App\Controllers\HomeController@about",
			"iletisim.html" => "App\Controllers\HomeController@iletisim",
			"admin" => "App\Controllers\AdminController@index",
			"admin/" => "App\Controllers\AdminController@index"
		],
		"preg_matches" =>[
			"product/(.*?).html" => "App\Controllers\ProductController@product -> {productSef => [1]}",
			"deletecart/(.*?).html" => "App\Controllers\CartController@deletecart -> { productId => [1] }",
			"categories.html" => "App\Controllers\CategoryController@index",
			"category/(.*?).html" => "App\Controllers\CategoryController@category -> { categorySef => [1] }",
			
			"ajaxSearch" => "App\Controllers\AjaxController@search",
			"ajax" => "App\Controllers\AjaxController@index",
			"admin/login.html" => "App\Controllers\AdminController@login",
			"admin/logout.html" => "App\Controllers\AdminController@logout",
			"admin/category.html" => "App\Controllers\AdminController@category",
			"admin/product.html" => "App\Controllers\AdminController@product",
			"admin/user.html" => "App\Controllers\AdminController@user",
			"admin/createProductType.html" => "App\Controllers\AdminController@createProductType",
			"admin/order.html" => "App\Controllers\AdminController@order",
			"admin/about.html" => "App\Controllers\AdminController@about",
			"admin/contact.html" => "App\Controllers\AdminController@contact",
			"admin/createCategory.html" => "App\Controllers\AdminController@createCategory",
			"admin/createProduct.html" => "App\Controllers\AdminController@createProduct",
			"admin/createUser.html" => "App\Controllers\AdminController@createUser",
			"admin/createOrder.html" => "App\Controllers\AdminController@createOrder",
			"admin/updateCategory/(.*?).html" => "App\Controllers\AdminController@updateCategory -> { id => [1]}",
			"admin/updateUser/(.*?).html" => "App\Controllers\AdminController@updateUser -> { id => [1]}",
			"admin/updateOrder/(.*?).html" => "App\Controllers\AdminController@updateOrder -> { id => [1]}",
			"admin/updateProduct/(.*?).html" => "App\Controllers\AdminController@updateProduct -> { id => [1]}",
			"admin/deleteCategory/(.*?).html" => "App\Controllers\AdminController@deleteCategory -> { id => [1]}",
			"admin/deleteProduct/(.*?).html" => "App\Controllers\AdminController@deleteProduct -> { id => [1]}",
			"admin/deleteUser/(.*?).html" => "App\Controllers\AdminController@deleteUser -> { id => [1]}",
			"admin/deleteOrder/(.*?).html" => "App\Controllers\AdminController@deleteOrder -> { id => [1]}",
			"admin/uploadImageProduct/(.*?).html" => "App\Controllers\AdminController@uploadImageProduct -> { id => [1]}",
			"admin/addFeatureToProductType/(.*?).html" => "App\Controllers\AdminController@addFeatureToProductType -> { id => [1]}",
			
			
		],
		"P404" => "App\Controllers\P404@index"
	];
?>