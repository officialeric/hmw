<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Laravel</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Hakuna Matata Website</h1>
        <hr>
        <a href="{{ route('login') }}">    
            <button class="btn btn-primary">Login</button>
        </a>
    </div>


    @vite('resources/js/app.js')
</body>
</html>
