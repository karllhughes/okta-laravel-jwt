<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Location;
use Illuminate\Support\Facades\Http;

Route::prefix('locations')->middleware('jwt')->group(function () {
    Route::get('/', fn() => Location::all());
    Route::post('/', fn(Request $request) => Location::create($request->all()));
    Route::delete('/{id}', fn(int $id) => Location::destroy($id));
});

Route::get('/token', fn () => Http::asForm()
    ->withBasicAuth(
        env('OKTA_CLIENT_ID'),
        env('OKTA_CLIENT_SECRET')
    )
    ->post(env('OKTA_ISSUER_URI') . '/v1/token', [
        'grant_type' => 'client_credentials',
        'scope' => env('OKTA_SCOPE'),
    ])
    ->throw()
    ->json());
