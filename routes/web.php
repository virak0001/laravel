<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/action', function () {
    return view('pages.action');
})->name('action');
Route::get('/join', function () {
    return view('pages.join');
})->name('join');
Route::get('/news', function () {
    return view('pages.news');
})->name('news');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/teacher/{index}', function($index) {
    $teachers = array('Channak','Ronan','Sieha','Rady','Rith');
    $countArray = 0;
    // $string = "";
    if($index < count($teachers)-1){
     echo"The teacher is:".$teachers[$index];
    }else {
        for ($i = 0; $i <= count($teachers)-1; $i++) {
            $countArray = count($teachers)-1;
            if($i < count($teachers)-1){
                echo "The array is: [$i].$teachers[$i],";
            }else if($i == count($teachers)-1){
                echo "[$i].$teachers[$i]";
            }
        }
        echo "<br>";
        echo "No teacher with this index: $index";
        echo "<br>";
        echo "The larget index is: ". $countArray;
    }
    return;
});
