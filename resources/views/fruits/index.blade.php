<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
       <th>ID</td>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Discount</th>
        <th class="text-center">Action</th>

      </tr>
    </thead>
    <tbody>
      @foreach($fruits as $fruit)
      <tr>
        <td>{{$fruit['id']}}</td>
        <td>{{$fruit['fruit_name']}}</td>
        <td>{{$fruit['quantity']}}</td>
        <td>{{$fruit['price']}}</td>
        <td>{{$fruit['discount']}}</td>
          <td> <a href="{{action('FruitController@show', $fruit['id'])}}" class="btn btn-success">View</a></td>

          <td> <a href="{{action('FruitController@edit', $fruit['id'])}}" class="btn btn-warning">Edit</a></td>
<td>
        <form method="post" action="{{action('FruitController@destroy', $fruit['id'])}}">
          <input type = "hidden" name = "_token" value = " {{ csrf_token() }} " />

          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
