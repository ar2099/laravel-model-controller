<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Scheda</title>
</head>
<body>
    
        
    <div class="contenitore-film">
        <ul>
            <li class="titolo-film">{{$movie->title}}</li>
            <li>Titolo originale: {{$movie->original_title}}</li>
            <li>Nazionalità: {{$movie->nationality}}</li>
            <li>Data di uscita: {{$movie->date}}</li>
            <li>Voto: {{$movie->vote}}</li>
        </ul>
        
        
            
       
    </div>
       
</body>
</html>