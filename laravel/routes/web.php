<?php

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
            //Frontend
Route::get('/', function () {
    return view('frontend.home');
})->name('/');
Route::get('/aboutus', function () {
    return view('frontend.aboutus');
})->name('aboutus');

Route::get('/contactus', function () {
    return view('frontend.contactus');
})->name('contactus');

//Bussiness Card
Route::get('/business', function(){
    return view('frontend.business.index');

})->name('/business');

Route::get('business/work_space_detector', function(){
     return view(('frontend.business.workspace-detector'));
})->name('workspace_detector');

Route::get('staff_tracker', function(){
    return view('frontend.business.staff-tracker');
})->name('staff_tracker');

Route::get('heat_map', function(){
    return view('frontend.business.heat-map');
})->name('heat_map');

Route::get('queue_counter', function(){
    return view('frontend.business.queue-counter');
})->name('queue_counter');

Route::get('active_post', function(){
    return view('frontend.business.active-post');
})->name('active_post');

Route::get('shelf_detector', function(){
    return view('frontend.business.shelf-detector');
})->name('shelf_detector');
Route::get('neuro_counter', function(){
    return view('frontend.business.neuro-detector');
})->name('neuro_counter');







//Health Care Card
Route::get('/health_care', function(){
    return view('frontend.health_care.index');

})->name('/health_care');

//Security Card
Route::get('/security', function(){
    return view('frontend.security.index');

})->name('/security');

//Work Safety Card
Route::get('/work_safety', function(){
    return view('frontend.work_safety.index');

})->name('/work_safety');

//Solution Card
Route::get('/solutions', function(){
    return view('frontend.solutions.index');

})->name('/solutions');

//Cases Card
Route::get('/cases', function(){
    return view('frontend.cases.index');

})->name('/cases');

//Demo Card
Route::get('/demo', function(){
    return view('frontend.solutions.demo');

})->name('/demo');

//Integrations Card
Route::get('/integrations', function(){
    return view('frontend.integrations.index');

})->name('/integrations');

//Camera Campare Card
Route::get('/camera/compare', function(){
    return view('frontend.camera.compare.index');

})->name('/camera/compare');


