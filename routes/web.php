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

use Furbook\Cat;
use Furbook\Breed;
// Route 1 Trang chu
Route::get('/', function () {
    return view('welcome');
});

//Route 4 Xem lai con meo sau khi sua
Route::get('/cats/{id}', function($id) {
	$cat = Furbook\Cat::find($id);
	return view('cats.show') 
		->with('cat', $cat);
})->where('id', '[0-9]+');



//Route 2 xem danh sach cac con meo
Route::get('/cats', function () {
	 
	$cats=Furbook\cat::all();
	return view('cats/index')->with('meo', $cats);
	   
});

// Route xem danh sach cac con meo thuoc 1 giong
Route::get('cats/breeds/{name}', function ($name) {
	$breed=Furbook\Breed::with('cats')
	->where('name',$name)
	->first();

	return view('cats.index') // gọi view index với 2 tham số truyền vào
	->with('giong',$breed) // tham số 1 có key là breed, value truyền vào là đối tượng $breeds
	->with('meo',$breed->cats);//tham số 2 có key là meo, value truyền vào là $breed->cats
	                           // là phương thức cats của lớp breed
   
});

// Create new cat
Route::get('/cats/create',function(){
	return view('cats.create'); 
});

//Insert new cat
// Route::post('/cats',function(){
// 	dd(Request::all());
// });

Route::post('/cats',function(){
	$data=Request::all();
	//dd($data);
	$cat=Furbook\Cat::create($data);
	return redirect('/cats/'.$cat->id)
	->withSuccess('Create cat success');
	
});

// Route 3 Sửa con meo
Route::get('/cats/{cat}/edit',function(Furbook\Cat $cat){
	return view('cats.edit')->with('cat', $cat);
});


Route::put('/cats/{id}',function($id){
	$data=Request::all();
	$cat=Cat::find($id);
	$cat->update($data);
	//dd($data);
	//$cat=Furbook\Cat::update($data);
	return redirect('/cats/'.$cat->id)
	->withSuccess('Update cat success');
	
});

// Route nhan con meo muon xoa
// Route::('/cats/{cat}/edit',function(Furbook\Cat $cat){
// 	return view('cats.edit')->with('cat', $cat);
// });
//Route xoa con meo
Route::get('/cats/{cat}/delete',function(Furbook\Cat $cat){
	$cat->delete();
	return redirect('cats')
	->withSuccess('Đã xóa xong 1 em cat success');
});

// Route goi controller MyFirstCon
//Route::resource('cat','CatController');
