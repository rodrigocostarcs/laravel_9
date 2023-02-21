<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
</head>
<body>
    <div class="app">
       @yield('content') <!--para renderizar um conteúdo dinâmico com o blade do laravel -->
    </div>
</body>
</html>