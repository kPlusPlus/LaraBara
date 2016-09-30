<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('mypage',function(){
	$data = array('var1' => 'mirko' ,
				'var2' => 'slavko',
				'var3' => 'pero',
				'orders' => App\Order::all() , );
	return view('mypage',$data);
});

Route::get('customer/{id}', 'CustomerController@show');

/*
Route::get('customer/{id}',function($id){
    $customer = App\Customer::Find($id);
    	echo $customer->first_name . " " . $customer->last_name . "<br>";
    	echo "Orders: " . "<br>";
    $orders = App\Order::Where('customer_id', $customer->customer_id)
    		//->take(10)
    		->get();
    
    foreach ($orders as $order) {
    	echo "<ul>";
    	echo $order->name . "<br>";
    	echo "</ul>";
   	}
});
*/

/*
Route::get('get_customer',function(){
    $customer = App\Customer::where('first_name','=','LINDA')
        ->first();
    echo $customer->customer_id;
});
*/

Route::get('get_customer','CustomerController@get_customer');

Route::get('allorders',function(){
	$or = App\Order::Where('customer_id', 1)
	 		->take(10)
            ->get();
	//echo "mikula mali";
	echo "order " . $or;//-> name;
});

Route::get('role',[
    'middleware' => 'Role:editor',
    'uses' => 'TestController@index',
    ]);

Route::get('terminate',[
    'middleware' => 'terminate',
    'uses' => 'ABCController@index',
    ]);

Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'UserController@showProfile',
    ]);

Route::get('/usercontroller/path',[
    'middleware' => 'First',
    'uses' => 'UserController@showPath'
    ]);

Route::resource('my','MyController');

//Route::controller('base URI','ImplicitController');

Route::get('/myclass','ImplicitController@index');
class MyClass {
    public $foo = 'bar';
}

Route::get('/foo/bar','UriController@index');

Route::get('/register',function(){
    return view('register');
});
Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));

Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');
Route::get('/basic_response', function (){
   return "Hello world";
});

Route::get('/header',function(){
    return response("Hello", 200)->header('Content-Type', 'text/html');
});

Route::get('json',function(){
    return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
});

Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');

Route::get('view-records','StudViewController@index');

Route::get('edit-records','StudUpdateController@index');
Route::get('edit/{id}','StudUpdateController@show');
Route::post('edit/{id}','StudUpdateController@edit');

Route::get('delete-records','StudDeleteController@index');
Route::get('delete/{id}','StudDeleteController@destroy');

Route::get('/form',function(){
    return view('form');
});

Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');

Route::get('/validation','ValidationController@showform');
Route::post('/validation','ValidationController@validateform');

Route::get('/ORM',function (){
   return view('ORM');
});

Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');

Route::get('upload', function() {
  return View::make('pages.upload');
});
Route::post('apply/upload', 'ApplyController@upload');
