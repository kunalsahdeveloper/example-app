<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    // return view('welcome');
    // <!-- return ['name' => 'kunal', 'age' => 29]; -->

    // $name = "kunal";
    echo "<h1>Hello name</h1>";

}); 
// Route::get('/abc', function () {

//     // return view('welcome'); 
//     // return ['name' => 'kunal', 'age' => 29]; 

//     return view('abc');

// }); 
// // Route::view('/ac', 'abc');
// Route::view('/ac', 'abc', ['name' => 'kunal', 'age' => 29]);


// // Route::get('/{name}', function ($name){
// //     return view('abc', ['name' => $name]);  
// // });
// // Route::get('/{name}/{class}', function ($name, $class){
// //     return view('abc', ['name' => $name, 'class' => $class]);  
// // });

// // Route::view('/new/{name}/{class}', 'abc')->name('abc')->defaults(['name' => null, 'class' => null]);


// // Route::get('/new/{name}/{class}', function($name, $class){
// //     return view('abc', ['name' => $name, 'class' => $class]);
// // })->name('abc')->defaults(['name' => null, 'class' => null]);

// Route::get('/new/{name}', function($name){
//     return view('newView')->with('name', $name);
// });

// //with is define because: 
// // is used to pass data to the view from the route.
// // with() method is used to pass data to the view from the route.



// // Route::get('/new/{mobile}', function($moblie){
// //     return view('newView');
// // })->with('mobile' => '[0-9]+');


// // Route::get('/new/{mobile}', function($moblie){
// //     return view('newView', compact('mobile'));
// // })->where('mobile' => '[0-9]+');

// // Route::get('/new/{newmobile}', function($newmoblie){
// //     return view('newView', compact('newmobile'));
// // });
// // Route::get('/new/{mobile}', function($mobile){
// //     return view('newView', compact('mobile'));
// // })->where('mobile', '[0-9]+');

// Route::get('/new/{mobile}', function($mobile){
//     return view('newView', compact('mobile'));
// });




// // Route::view('/urlname', 'secondView');
// Route::view('/urlname', 'secondview', ['name' => 'kunal']);
// // Route::get('/urlname/{mobile}', function ($mobile){
// //     return view('secondview', ['mobile' => $mobile]);
// // });
// // Route::get('/urlname/{mobile}', function($mobile){
// //     return view('secondview', compact('mobile'));
// // });



// // create a View
// // inside the view show the student details 
// // name , clss . rollno
// //get the details by tul and shoe it in the view



// Route::get('/act1/{name}/{class}/{roll}', function($name, $class, $roll){
//     return view('act1', ['name' => $name, 'class' => $class, 'roll' => $roll]);
// });

// //name routing
// Route::get('welcome/a/b/c/d/e', function() {
//     return view('newView');
// })->name('long');



// // Route::view('urlone', 'urlone')->name('urlone');
// // Route::view('urltwo', 'urltwo')->name('urltwo');


// Route::prefix('student')->group(function(){
//     // Route::get('urlone', function(){
//     //     return view('urlone');
//     // })->name('urlone');
//     // Route::get('urltwo', function(){
//     //     return view('urltwo');
//     // })->name('urltwo');
//     Route::get('home',[pref::class, 'studenthome']);
// });

// // Route::get('controllertwo/{name}')



// // Route::view('/revision', )







Route::get('/home', function(){
    return view('home');
})















// $students = [
//     1 => ['name' => 'Aman', 'age' => '28', 'subject' => 'science'],
//     2 => ['name' => 'Pooja', 'age' => '34', 'subject' => 'math'],
//     3 => ['name' => 'Rakesh', 'age' => '34', 'subject' => 'social'],
// ];

// Route::get('/students', function() use($students) {
//     return view('students.index', compact('students'));
// })->name('students.index');

// Route::get('/students/{id}', function($id) use($students) {
//     $student = $students[$id];
//     return view('studen`ts.show', compact('student'));
// })->name('students.show');

