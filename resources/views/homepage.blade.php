<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Films | Homepage</title>
    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <h1>Lista film:</h1>
    <div class="container">
        @foreach ($films as $film)
            <div class="card">
                <ul>
                    <li>
                        <small>
                            Titolo: {{ $film->title }}
                        </small>
                        <small>
                            Titolo originale: {{ $film->original_title }}
                        </small>
                        <small>
                            Nazionalità: {{ $film->nationality }}
                        </small>
                        <small>
                            Data uscita: {{ $film->date }}
                        </small>
                        <small>
                            Voto: {{ $film->vote }}
                        </small>
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
</body>

</html>
