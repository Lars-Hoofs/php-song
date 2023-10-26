<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black h-screen bg-gradient-to-b from-green-400 to-slate-900 text-white font-sans">
    

    <header class="bg-black p-4">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_RGB_White-768x230.png" alt="" class="w-20">
            </div>


            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:underline">Home</a></li>
                    <li><a href="#" class="hover:underline">Verkennen</a></li>
                    <li><a href="#" class="hover:underline">Zoeken</a></li>
                </ul>
            </nav>


            <div class="flex items-center space-x-4">
                <a href="#" class="hover:underline">Upgrade</a>
                <img src="https://via.placeholder.com/40" alt="User Profile" class="w-8 h-8 rounded-full">
            </div>
        </div>
    </header>
    <section class="container mx-auto mt-6 p-4">
        <div class="flex items-center space-x-4">

            <img src="https://i.scdn.co/image/ab676161000051741dbddd866357f9d39aadc716" alt="Image" class="w-40">

            <p class="text-lg font-semibold">Hardstyle playlist</p>
            <a href="http://localhost:8000/songs/create">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16">
  <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
</svg>  
</div>
    </section>
    <div class="flex justify-center items-center h-screen">
    <ul>
    @foreach ($songs as $song)
        <li class="flex flex-row">
            <a href="{{ route('songs.show', $song->id) }}">
                {{ $song->title }}
            </a>
            <a class="mx-2" href="{{ route('songs.destroy', $song->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $song->id }}').submit();">
                Delete
            </a>
            <form id="delete-form-{{ $song->id }}" action="{{ route('songs.destroy', $song->id) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
            <a class="mx-2" href="{{ route('songs.edit', $song->id) }}">
                Update
            </a>
        </li>
    @endforeach
</ul>
</div>


</body>
</html>