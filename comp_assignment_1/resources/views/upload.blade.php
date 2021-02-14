<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <style>
        body {
            font-family: 'Nunito';
        }

        .header {
            font-size: 2rem;
            font-weight: 600;
            margin: 2rem auto;
        }

        .upload-form {
            width: 30vw;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">Import Content</div>
    @if(Session::has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif
    @if(Session::has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <div class="upload-form">
        <form method="post" action="{{route('upload')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="file">Upload File</label>
                <input type="file" name="file" id="file" class="form form-control-file">
            </div>
            <div class="form-group">
                <input type="submit" value="Import" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
