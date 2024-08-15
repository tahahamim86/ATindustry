<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">numero</th>
      <th scope="col">email</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>@foreach($contacts as $item)
    <tr>
      <th scope="row"></th>
      <td>{{$item->name}}</td>
      <td>{{$item->num}}</td>
      <td>{{$item->mail}}</td>
      <td>{{$item->msg}}</td>
<td>
   <a href="{{route(pages.edit,$item->id}}">edit</a>
   <a href="{{route(pages.show),$item->id}}">show</a>
  <form action="{{route('pages.destroy',$item->id">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">delete</button>
  </form>
</td>
    
    </tr>
@endforeach
  </tbody>
</table>  
</body>
</html>