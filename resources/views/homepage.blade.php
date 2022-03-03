<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>LARAVEL PRIMI PASSI</title>
</head>
<body>
    <nav class="text-center">
        <h1 class="my-4">BENVENUTO A LARAVEL-PRIMI-PASSI</h1>
        
        @foreach ($data as $value)
        <a href="{{ $value["link"] }}" class="mx-3" id="link">
            {{ $value["linkName"] }}
        </a>
        @endforeach
    </nav>
</body>
</html>