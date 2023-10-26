<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yow</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Voeg een nieuw nummer toe</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('songs.store') }}">
                        @csrf
                        

                        <div class="form-group">
                            <label for="title">Titel</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                            <label for="Artist">Artist</label>
                            <input type="text" name="singer" id="singer" class="form-control"  requird>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Opslaan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>