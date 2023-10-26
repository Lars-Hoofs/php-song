<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Song Details</h1>
    <p><strong>Titel:</strong> {{ $song->title }}</p>
    <p><strong>Artist:</strong> {{ $song->singer }}</p>
    <a href="http://localhost:8000/songs/">Back</a>
</body>
</html>