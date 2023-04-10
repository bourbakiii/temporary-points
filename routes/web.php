<?php

use App\Models\People;
use Illuminate\Http\Request;
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
    return view('index', [
        'peoples' => People::get(),
    ]);
})->name('index');

Route::get('/create', function (Request $request) {

    $new_people = new People();
    $new_people->name = $request->name;
    $new_people->description = $request->description;
    $new_people->save();

    return redirect('/');

})->name('create');


Route::get('/create', function (Request $request) {

    $new_people = new People();
    $new_people->name = $request->name;
    $new_people->description = $request->description;
    $new_people->save();

    return redirect('/');

})->name('create');

Route::get('/delete/{id}', function (Request $request) {
    $people = People::where('id', $request->id)->first();
    if ($people) {
        $people->delete();
    }

    return redirect()->route('index');
})->name('delete');

Route::get('/edit/{id}', function (Request $request) {
    if ($people = People::where('id', $request->id)->first()) {
        return view('edit', [
            'people' => $people,
        ]);
    }

    return view('/');
})->name('edit');

Route::get('/edit/{id}/now', function (Request $request) {
    if ($people = People::where('id', $request->id)->first()) {
       $people->name = $request->name;
       $people->description = $request->description;
       $people->save();
    }

    return redirect()->route('index');
})->name('editNow');