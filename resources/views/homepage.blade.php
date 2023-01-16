<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container">

        <h1 class=" text-center mb-5">Film Disponibili</h1>
        
        <div class="row gy-4">
            @foreach ($movies as $movie)
            {{-- @dd($movie); --}}
                <div class="ms-card  col-4 ">
                    <div class="card-text p-2">
                        <h2>Titolo: {{ $movie->title }}</h2>
                        <h3>Titolo originale: {{ $movie->original_title}}</h3>
                        <h4>Nazionalita: {{ $movie->nationality }}</h4>
                        <h4>Data di uscita : {{ $movie->date }}</h4>
                        <h5>Voto : {{ $movie->vote }}</h5>
                    </div>
                </div>
                    
            @endforeach
        </div>
        

    </div>

    
    

</body>

</html>