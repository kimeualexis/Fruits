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

        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Discount</th>
      </tr>
    </thead>
    <tbody>
      @foreach($fruits as $fruit)
      <tr>
        <td>{{$fruit['fruit_name']}}</td>
        <td>{{$fruit['quantity']}}</td>
        <td>{{$fruit['price']}}</td>
        <td>{{$fruit['discount']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
