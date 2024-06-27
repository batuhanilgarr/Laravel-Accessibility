<?php

use App\Models\Content;
use App\Http\Controllers\ContentController;


Route::get('/', function () {
    $contents = Content::with('script')->get();
    return view('welcome', compact('contents'));
});

Route::post('/content/store', [ContentController::class, 'store'])->name('content.store');


