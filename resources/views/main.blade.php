<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FILMS.com | All your favourites films</title>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}" type="text/css" />
    {{-- JS --}}
    <script defer src="{{ asset('js/app.js')}}"></script>
</head>
<body class="container">
    <h3 class="mt-3"> List of films choosen by our site community:</h3>
    <section class="films">
        <div class="d-flex flex-wrap">
            @forelse ($movies as $movie)
                <div class="card me-3 mt-3" style="width: 16rem;">
                    <div class="card-body p-3">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                        <div> Year: {{ $movie->year}}</div>
                        <div> Vote: {{ $movie->vote}}</div>
                    </div>
                </div>
            @empty
                
            @endforelse
        </div>
    </section>
</body>
</html>