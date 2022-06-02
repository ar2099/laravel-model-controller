<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Film</title>
</head>
<body>

    @forelse ($movies as $movie)
        
    <a href="{{route('scheda', [ 'id' => $movie->id  ] )}}" class="contenitore-film">
        
            <p class="titolo-film">{{$movie->title}}</p>
            <span>Clicca sulla scheda per saperne di più</span>
            
       
    </a>
       
    @empty
        <span>No elementi</span>
    @endforelse

    {{-- @foreach ($movies as $movie)
        @foreach ($movie as $item)
            <p>{{ $item }}</p>
        @endforeach
        <p>-------------</p>
    @endforeach; --}}

</body>
</html>