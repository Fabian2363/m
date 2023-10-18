<?php

use App\Http\Controllers\ThesisController;
use App\Thesis;
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

use Illuminate\Support\Facades\Route;






Route::get('/', function () {
    return view('welcome');
});


Route::get('/documento','documento@index');



/////7
Route::get('/{id_user}','ThesisController@index');
//Route::get('/thesis','ThesisController@index');
Route::post('/thesis/register', 'ThesisController@store')->name('thesis_register');
Route::get('/thesis/file/{id}', 'ThesisController@urlfile')->name('thesis_file');
Route::post('/thesis/update', [ThesisController::class, 'update'])->name('thesis_update');
Route::get('/thesis/delete/{id}', [ThesisController::class, 'destroy'])->name('thesis_delete');
Route::post('/','PersonasController@consultar_talentoHumano_persona')->name('espiral-educacion');







// Authentication Routes... admistrativos 
Route::get('login_admi-X7S9XXXX9S-DJSI3YSNZSG3UAJ-JSHHS', 'Auth\LoginController@showLoginFormadmin')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');




// Authentication Routes... talento humano

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

 // Registration Routes...
 
 Route::post('/register', 'Auth\RegisterController@register');
 Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

 //Route::get('register/{id_persona}', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/set_language/{lang}', 'Controller@set_language')->name('set_language');

Route::middleware(['auth'])->group(function () {
	

/* 
|--------------------------------------------------------------------------
|              MENU LATERIAL DE LAS VISTAS
|
*/

		
	 
	   Route:: get('/menu-lateral2',function(){
		return view('menu_lateral.menu_lateral_informacion');
   });
 
	   		 

/*
|--------------------------------------------------------------------------
|                            menu laterial 
|
*/

Route:: get("/menu-lateral/{porcentaje}", function ($porcentaje)
{
   return view('menu_lateral.MenuIzquierdoCensoSIPESM', [
	   'porcentaje' => $porcentaje
   ]);
});
/*
|--------------------------------------------------------------------------
|                          permiso uno , administrador 
|
*/




Route::middleware(['Autorizar:1'])->group(function () {

	//Route::resource('employees', 'PersonasController::class);

	Route::get('/employees/create', 'PersonasController@indexs')->name('vivienda.store');
    Route::post('/employees/create', 'PersonasController@create')->name('vivienda.store');

	Route::get('misak/{id_familia}/datos','PersonasController@datos')->name('vivienda');
	
	Route::get('get-municipio-list','PersonasController@getmunicipio');

	Route::get('/misak', function () {
		return view('misak');
		
	});

	Route::get('/misak/{id_usuario}', 'PersonasController@indexdato')->name('vivienda.familia.mimbros.censo');
	


});

/*
|--------------------------------------------------------------------------
|                          permiso uno definir  
|
*/
Route::middleware(['Autorizar:4'])->group(function () {
	
	
});

 
Route::middleware(['Autorizar:2'])->group(function () {

	
}); 
   


Route::middleware(['Autorizar:3'])->group(function () {
	
	
																																				
	
});

Route::middleware(['Autorizar:5'])->group(function () {
	



});



Route::middleware(['Autorizar:7'])->group(function () {
	


});



   	/*
|--------------------------------------------------------------------------
|                       VISTA  MENU   ADMINISTRADOR    
*/
Route::middleware(['Autorizar:6'])->group(function () {
	Route::get('/Menu-administrador','InterfacesController@Vista_interfas_menuAdminsitrador')->name('Menu-administrador');
	
	//Users
	Route::POST('users', 'UserController@store')->name('Ingresar_Usuarios.create');
	Route::get('Menu-Usuarios', 'UserController@index')->name('users.index');
	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');

});

});