<!DOCTYPE html>
<html>
<head>
    <title>Laravel Filament Scripts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>

<h1>Buttons</h1>
@foreach ($contents as $content)
    <button onclick="{{ $content->script->name }}()">{{ $content->name }}</button>
@endforeach

@foreach ($contents as $content)
    <script>
        window['{{ $content->script->name }}'] = function() {
            {!! $content->script->code !!}
        }
    </script>
@endforeach

<h2>asfklasf</h2>
<h2>asfklasf</h2>
<h2>asfklasf</h2>
<h2>asfklasf</h2>
<h2>asfklasf</h2>

</body>
</html>
