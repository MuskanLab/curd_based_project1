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
        <div class="table">
        <br>
        <a class="btn btn-primary" href="{{route('users.create')}}">Add new Student</a>
        <br>
        <br>
        <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td colspan="1">Action</td>
            <td colspan="1">Action</td>
        </tr>
        @foreach($users as $user)
        <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td><a href="{{route('users.edit',$user->id)}}">Edit</a></td>
        <td>
        <form method="post" action="{{route('users.destroy', $user->id)}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
        </form>
        </td>
        </tr>
        @endforeach
        </div>
        </table>
        </div>
    </body>
</html>