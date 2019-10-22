<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rate the Talk - Codetalks</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/01714cccb6.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
        <div class="logo">
            <img src="{{ asset('img/codetalks.jpg') }}" alt="Codetalks">
        </div>
        <rate-component></rate-component>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
