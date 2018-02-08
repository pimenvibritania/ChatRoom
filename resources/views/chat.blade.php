<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>pimenChat</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="container">
        <div class="row" id="app">
            <ul class="list-group offset-4 col-4">
                <li class="list-group-item active">Chat Room </li>
                <li class="list-group-item">pimenChat</li>
                <li class="list-group-item">pimenChat</li>
                <li class="list-group-item">pimenChat</li>
                <li class="list-group-item">pimenChat at eros</li>
                <input type="text" class="form-control" placeholder="Type your message here..." v-model='message' v-on:keyup='send'>
            </ul>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}">

    </script>
</body>
</html>