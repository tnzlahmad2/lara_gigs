<?php

use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'heading' => 'hammad',
        'listings' => [
            [
                'id' => 1,
                'title' => 'heading 1',
                'body' => 'lorem ipsum dolor sit amet, consectetuer 
            adipiscing elit. Aenean commodo ligula eget dolor. 
            Aenean massa. Cum sociis natoque penatibus et 
            magnis dis parturient montes, nascetur ridiculus mus. 
            Donec quam felis, ultricies nec, pellentesque eu, pretium
             quis, sem. Nulla consequat massa quis enim. Donec pede justo,
              fringilla vel, aliquet nec, vulputate eget, arcu. 
              In enim justo, rhoncus ut, imperdiet a, venenatis
               vitae, justo. Nullam dictum felis eu pede mollis pretium'
            ],
            [
                'id' => 2,
                'title' => 'heading 2',
                'body' => 'lorem ipsum dolor sit amet, consectetuer 
            adipiscing elit. Aenean commodo ligula eget dolor. 
            Aenean massa. Cum sociis natoque penatibus et 
            magnis dis parturient montes, nascetur ridiculus mus. 
            Donec quam felis, ultricies nec, pellentesque eu, pretium
             quis, sem. Nulla consequat massa quis enim. Donec pede justo,
              fringilla vel, aliquet nec, vulputate eget, arcu. 
              In enim justo, rhoncus ut, imperdiet a, venenatis
               vitae, justo. Nullam dictum felis eu pede mollis pretium'
            ]

        ]

    ]);
});

// testing routes
// Route::get('user/{id}', function ($id) {
//     dd($id);
//     ddd($id);
//     return ('welcome' . " " . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function (Request $request) {
//     // dd($request);
//     return ($request->name . ' ' . $request->city);
// });
