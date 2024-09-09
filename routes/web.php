<?php

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

    $title = 'Lista Tennisti';

    $tennis_players = [
        [
            'nome' => 'Novak',
            'cognome' => 'Djokovic',
            'nazionalità' => 'Serba',
            'età' => 36
        ],
        [
            'nome' => 'Rafael',
            'cognome' => 'Nadal',
            'nazionalità' => 'Spagnola',
            'età' => 38
        ],
        [
            'nome' => 'Roger',
            'cognome' => 'Federer',
            'nazionalità' => 'Svizzera',
            'età' => 42
        ],
        [
            'nome' => 'Jannik',
            'cognome' => 'Sinner',
            'nazionalità' => 'Italiana',
            'età' => 22
        ],
        [
            'nome' => 'Daniil',
            'cognome' => 'Medvedev',
            'nazionalità' => 'Russa',
            'età' => 28
        ]
    ];

    $print = true;

    return view('home', compact('title', 'tennis_players', 'print'));
});
