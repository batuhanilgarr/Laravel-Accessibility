<!DOCTYPE html>
<html>
<head>
    <title>Laravel Filament Scripts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>

<h1>Buttons</h1>

@foreach ($contents as $content)
    <button class="button-with-image" onclick="{{ $content->script->name }}()">
        @if ($content->image)
            <img src="{{ asset('storage/' . $content->image) }}" alt="{{ $content->name }}">
        @endif
        {{ $content->name }}
    </button>
@endforeach

@foreach ($contents as $content)
    <script>
        window['{{ $content->script->name }}'] = function () {
            {!! $content->script->code !!}
        }
    </script>
@endforeach

<h1>asfklasf</h1>
<h2>asfklasf</h2>
<h3>asfklasf</h3>
<h4>asfklasf</h4>
<h5>asfklasf</h5>

</body>
</html>
