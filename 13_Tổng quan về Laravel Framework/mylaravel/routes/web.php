
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



Route::get('/login', function () {
    return view('login');
});


Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }

    return view('login_error');
});

Route::post('/loginn', function (Illuminate\Http\Request $request) {
    
     $ProductDescription = $request->ProductDescription ;
     $ListPrice = $request->ListPrice ;
     $DiscountPercent= $request->DiscountPercent ;
     $DiscountAmount = $ListPrice * $DiscountPercent * 0.1;
     $DiscountPrice = $ListPrice - $DiscountAmount;
     return view('show_discount_amount', compact(['DiscountPrice', 'DiscountAmount', 'ProductDescription', 'ListPrice', 'DiscountPercent']));
});

Route::post('/tudien', function (Illuminate\Http\Request $request) {
    
    $eng = $request->eng;
    $nghia = "";
    $tudien = array("hello"=>"xin chao", "music"=>"nhac","guide"=>"huong dan");
    foreach($tudien as $key => $value){
        if ($eng == $key) {
            $nghia = $value;
        }
    }
    return view('tudien', compact(['nghia','eng']));
});
?>
