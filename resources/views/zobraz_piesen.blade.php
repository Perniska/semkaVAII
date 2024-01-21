<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zobrazenie Piesne</title>
</head>
<body>
<h1>{{ $song->title }}</h1>
<p>Interpret: {{ $interpret->name }}</p>
<pre>{{ $lyrics }}</pre>
<a href="{{ route('interpret.export', ['interpret' => $interpret, 'song' => $song]) }}" download>Exportovať súbor</a>
</body>
</html>
