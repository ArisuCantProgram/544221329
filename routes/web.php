<?php

use App\Models\storage;
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
    return view('welcome');
});

Route::get('storage/all', function ()
{
    $storage = storage::all();
    foreach ($storage as $data){
        echo $data->bookid.".".$data->category.".".$data->title.".".$data->stock."<br>";
    }
});

Route::get('storage/add1', function ()
{
    $storage = new storage;
    $storage -> category = 'doujinshi';
    $storage -> title = 'metamorphosis';
    $storage -> stock = 12;
    $storage -> save();
});

Route::get('storage/upd1', function ()
{
    $storage = storage::find(5);
    $storage -> stock = 2;
    $storage -> update();
});

Route::get('storage/del1', function ()
{
    $storage = storage::find(5);
    $storage -> delete();
});
