<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th>Created date</th>
        <th>Updated date</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($name as $users)
    <tr>

   
      <th scope="row">{{$users->id}}</th>
      <td>{{$users->name}}</td>
      <td>{{$users->password}}</td>
      <td>{{$users->email}}</td>
      <td>{{ $users->created_at }}</td>
          <td>{{ $users->updated_at }}</td>
     
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>