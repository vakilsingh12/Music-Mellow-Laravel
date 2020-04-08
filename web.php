<?php
Route::get('/', function() {
    return view('welcome');
});
Route::view('index','index');
Route::view('audio','audio');
Route::view('ourteam','ourteam');
Route::view('contact','contact');
Route::view('signin','signin');
Route::view('signup','signup');

 Route::get('insert','Signin@insertform');  //for sign in page
Route::post('create','Signin@insert');

Route::post('insert','signup@index');    //for signup page
Route::post('create','signup@user');

// Route::get('/youtube',function()
// {
// 	return view('youtube');
// });
// Route::get('he','hello1@index'); 
// Route::get('mobile1','mobile@index');
  
// Route::view('csenotes12','csenote');
// Route::post('submit','csenotes@submit');

// Route::view('view','users');
// //Route::put('usercontroller','Users@submit');
// Route::post('usercontroller','Users@submit');

// Route::view('view1','users1');
// Route::post('user11','user1@submit1');
// Route::get('database','users2@index');
// Route::get('/test', function(){
//     Artisan::call('migrate');
//     Artisan::call('db:seed');
// });

// Route::get('hello',function()
// {
// 	return view('Hello');
// });
// Route::get('abcd','abcontroller@ab');
// Route::get('cse2','csecontroller@cse1');
// Route::get('hello',function()
// {
// 	return view('Hello');
// })->middleware('test');
// Route::get('/page',function(){
//           return 'this is page';
// 	});
// Route::get('/page1',function(){
// 	return view('Hello');
// });
// Route::get('nav',function()
// {
// 	return view('navigation');
// });

// Route::get('/abc',function()
// {
// 	return ['class'=>"btech"];
// });

// Route::get('user1','usercontroller1@index3');
// Route::get('userinfo1','usercontroller@userinfo');
// Route::get("form",function()
// {
// 	return view('form');
// });
// Route::view('form1','form');
// Route::post('userform6','formcontroller@submit');

// Route::get('/file',function()
// {
// 	return 'hiii';
// });
// Route::get('vsk',function()
// {
//      return 'vakil singh';
// });

// Route::get('hello',function()
// {
// 	return view('Hello');
// });



// Route::get('admin/{number}/{second?}','AdminController@index');
// Route::get('use/{id}/{course}','usercontroller@userinfo');        //doubt
// Route::redirect('first','/hello');
// Route::view('vakil1','verma');//or
// Route::get('vakil',function()
// {
// 	return view('verma');
// });
// Route::get('vsa','uservsk@index1');
// Route::view('user4','welcome');
// //or you can use this one also
// Route::get('sayhello',function(){
// 	return view('welcome');
// });
// Route::get('sunil/{fname}','hello@index2');
// Route::get('model','control@index3');
// Route::get('admin2/{number}/{name}',function($number,$name)
// {
// 	echo "number passed to closer :$number";
// 	echo "<br>";
// 	echo "your name is : $name";
// })->where(['number' => '[0-9]+', 'name' => '[a-z]+']);
// Route::get('abc/user',function(){
// 	echo url('abc/user');
// });
// Route::get('get/asd',function(){
// 	echo "btech";
// })->name('user-number');
// Route::get('user2',function()
// {
// 	echo route('user-number');
// });
   


// Route::get('db1','contech@check');




?>
