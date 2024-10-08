<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Laravel Primi Passi</title>
</head>
<body>

    <div class="container my-5">

        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        @foreach ($links as $link)
                        <a class="nav-link" href={{ $link['adress'] }}>{{ $link['name'] }}</a>
                        @endforeach
                    </div>
                </div>
            </nav>
        </header>
        
        <h1 class="text-center">{{ $title }}</h1>

        @if ($print)
            <ul class="list-group text-center my-5">
                @foreach ($tennis_players as $player)
                    <li class="list-group-item">Nome: {{ $player['nome'] }} || Cognome: {{ $player['cognome'] }} || Nazionalità: {{ $player['nazionalità'] }} || Età: {{ $player['età'] }}</li>
                @endforeach
            </ul>
        @else <h2 class="text-center">Nessun giocatore in lista.</h2>
        @endif

    </div>
    
</body>
</html>