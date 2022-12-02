<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('images/crown gold.svg')}}" type="">
    <title>Irish Gowns</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h2>Good Day!</h2> 
<br>
<div class="bg-info">
    <strong><h1><--User details--></h1></strong><br><br><br>
        <strong>First Name: </strong>{{ $data->fname }} <br>
        <strong>Last Name: </strong>{{ $data->lname }} <br>
        <strong>Email: </strong>{{ $data->email }} <br>
        <strong>Phone: </strong>{{ $data->phone }} <br>
        <strong>Message: </strong>{{ $data->message }} <br><br>
</div>
Thank you
</body>
</html>