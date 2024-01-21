<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Song</title>
</head>
<body>
<h1>Store Song</h1>

<form action="{{ route('interpret.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="title">Song Title:</label>
    <input type="text" name="title" required>

    <label for="lyrics">Lyrics:</label>
    <input type="file" name="lyrics" accept=".txt" required>

    <button type="submit">Store Song</button>
</form>
</body>
</html>
