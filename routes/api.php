<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use MarcReichel\IGDBLaravel\Models\Game;
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
$deploy = function() {
    $process = new Process(['/var/www/deploy.sh']);
    $process->run(function ($type, $buffer) {
        echo $buffer;
    });

    if (!$process->isSuccessful()) {
        throw new ProcessFailedException($process);
    }
    echo $process->getOutput();
};

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/game', function(Request $request) {
    $body = json_decode($request->getContent());
    $games = Game::search($body->name)->with(['cover'])->get()->first();
    return json_encode($games);
});
Route::get('/deploy', $deploy);
Route::post('/deploy', $deploy);


