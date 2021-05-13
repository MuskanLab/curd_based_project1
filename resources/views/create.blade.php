<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
        </head>
    <body>
        <div class="container-fluid">
        <form method="post" action="{{route('users.store')}}">
        @csrf
        <input type="text" placeholder="Enter user name" name="name" required>
        <input type="email" placeholder="Enter email address" name="email" required>
        <input type="password" placeholder="Enter your Password" name="password" required>
        <input type="submit" value="Add User">
        </form>
        </div>
    </body>
</html>