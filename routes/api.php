<?php

use Illuminate\Http\Request;
use App\Post;
use App\Http\Resources\Post as PostResource;
use App\Http\Resources\PostV2 as PostV2Resource;
use App\Http\Resources\PostCollection;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Start point: definiamo una route per il prelievo della lista post...
Route::get('v0/posts', function (Request $request) {
    return Post::with('author')->get();
});
// ... e una per il prelievo del singolo post
Route::get('v0/posts/{id}', function (Request $request, $id) {
    return Post::with('author')->findOrFail($id); 
    /*ho sostituito il metodo find con il metodo findOrFail 
     che solleva un'eccezione ( ModelNotFoundException ) quando il 
     model non viene trovato. Se non viene gestita, Laravel si 
     occupa di ritornare una response 404*/
});

// Route analoghe alle due precedenti, ma che utilizzano la PostResource
Route::get('v1/posts', function (Request $request) {
    return PostResource::collection(Post::with('author')->get());
});

Route::get('v1/posts/{id}', function (Request $request, $id) {
    return new PostResource(Post::with('author')->findOrFail($id));
});

// Route analoghe alle due precedenti, ma che utilizzano la PostV2Resource
Route::get('v2/posts', function (Request $request) {
    return PostV2Resource::collection(Post::with('author')->get());
});

Route::get('v2/posts/{id}', function (Request $request, $id) {
    return new PostV2Resource(Post::with('author')->findOrFail($id));
});

// Utilizzo di una post collection custom per la lista post
Route::get('v3/posts', function (Request $request) {
    return new PostCollection(
        /*Il metodo paginate restituisce i Post paginati, con tutte le 
         info aggiuntive di paginazione, in modo del tutto automatico.
         NB: se avessimo utilizzato il metodo Post::collection, queste 
         info sarebbero comunque state aggiunte all'oggetto JSON di 
         response. Abbiamo creato la PostCollection solo per gestire 
         l'informazione version  */
        Post::with('author')->paginate(env('PAGINATION', 4))
    );
});

// Sorpresina per i più curiosi: rompiamo la naming convention
Route::get('v4/posts', function (Request $request) {
    return new \App\Http\Resources\Pippo(
        Post::with('author')->paginate(env('PAGINATION', 4))
    );
});