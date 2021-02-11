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

        .banner-form{
            width: 30vw;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        Upload Banner
    </div>
    @if(Session::has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif
    @if(Session::has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif

    <div class="banner-form">
        <form method="post" action="{{route('upload_banner')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Banner Image</label>
                <input type="file" value="{{old("image")}}" name="image" id="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="display">No Of Display Time</label>
                <input type="number" value="{{old("display")}}" name="display" id="display" class="form-control">
            </div>
            <div class="form-group">
                <label for="impression">Impression Limit</label>
                <input type="number" value="{{old("impression")}}" name="impression" id="impression" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Upload" class="btn btn-success">
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
