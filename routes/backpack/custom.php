<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('category', 'CategoryCrudController');
    Route::crud('car', 'CarCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('commande', 'CommandeCrudController');
    //Route::crud('commentaire', 'CommentaireCrudController');
    Route::crud('piece', 'PieceCrudController');
    Route::crud('subcategory', 'SubcategoryCrudController');
    Route::crud('fournisseur', 'FournisseurCrudController');
    Route::crud('comment', 'CommentCrudController');
   // Route::crud('rate', 'RateCrudController');
    Route::crud('piece_user', 'Piece_userCrudController');
    Route::crud('image', 'ImageCrudController');
}); // this should be the absolute last line of this file