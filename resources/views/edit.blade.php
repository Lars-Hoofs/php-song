<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ route('songs.update', ['id' => $song->id]) }}">
    @csrf
    @method('PATCH')
    
    <label for="title">Title</label>
    <input type="text" name="title" value="{{ $song->title }}" required>
    
    <label for="singer">Singer</label>
    <input type="text" name="singer" value="{{ $song->singer }}" required>
    
    <button type="submit">Update Song</button>
</form>
</body>
</html>