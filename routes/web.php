<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\testcontreoller;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/accueil', function () {
    return view('welcome');
});
Route::get('/datacenter',function(){
return view('pages.datacenter');
});
/*Route::post('/datacenter', function(){
    Contact::create(['name' =>request('name'),
        'mail' =>request('mail'),
        'num' =>request('num'),
        'msg' =>request('msg')]
        
    );
    return redirect('/datacenter');
});*/
Route::get('/container',function(){
    return view('pages.poduct');
});
Route::resource('/index',Contact::class);
Route::post('/container', function(){
    Contact::create(['name' =>request('name'),
        'mail' =>request('mail'),
        'num' =>request('num'),
        'msg' =>request('msg')]
        
    );
    return redirect('/container');
    });
    Route::get('/electricite',function(){
        return view('pages.electricite');
        });
        Route::post('/container1',[testcontreoller::class,'test']);
        /*Route::post('/electricite', function(){
            Contact::create(['name' =>request('name'),
                'mail' =>request('mail'),
                'num' =>request('num'),
                'msg' =>request('msg')]
                
            ); return redirect('/electricite');
        });*/
   /*Route::get('/datacenter',[MailController::class,'contact']); 
   Route::post('/datacenter',[MailController::class,'sendEmail'])->name('contact.send');
   Route::get('/container',[MailController::class,'contact']); 
   Route::post('/container',[MailController::class,'sendEmail'])->name('contact.send');

   Route::get('/datacenter',[MailController::class,'contact']); 
   Route::post('/datacenter',[MailController::class,'sendEmail'])->name('contact.send');*/

