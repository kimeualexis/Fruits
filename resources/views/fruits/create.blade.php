
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2 class="text-center">Create A Fruit:</h2><br  />

      <form method="post" action="{{ url('/fruits/create') }}">
        <input type = "hidden" name = "_token" value = " {{ csrf_token() }} " />

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="fruit_name">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Quantity:</label>
            <input type="text" class="form-control" name="quantity">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Price:</label>
            <input type="int" class="form-control" name="price">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="price">Discount:</label>
              <input type="int" class="form-control" name="discount">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Add Fruit</button>
            <button type="reset" class="btn btn-danger" style="margin-left:40px">Clear</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
