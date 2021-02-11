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
    </style>
</head>
<body>
<div class="container">
    <div class="header pl-3 py-5">
        <a href="/" style="text-decoration: #0b2e13"><h2>Persons Records</h2></a>
    </div>

    <div class="form " style="width: 50rem">
        <form action="{{route('search')}}">
            <div class="form-group col-6">
                <input type="text" class="form-control" name="search" id="">
                <input type="submit" value="search" class="form-control btn btn-success mt-3">
            </div>
        </form>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Phone Number</th>
        </tr>
        </thead>
        <tbody>
        @foreach($persons as $person)
        <tr>
            <td>{{$person->first_name}}</td>
            <td>{{$person->last_name}}</td>
            <td>{{$person->email}}</td>
            <td>{{$person->phone_number}}</td>
        </tr>
        @endforeach


        </tbody>

    </table>
    <div>
        {{$persons->withQueryString()->links('pagination::bootstrap-4')}}
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
