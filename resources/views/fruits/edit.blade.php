<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2 class="text-center">Edit A Fruit:</h2><br  />

      <form method="post" action="{{action('FruitController@update', $id)}}">
        <input type = "hidden" name = "_token" value = " {{ csrf_token() }} " />
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="fruit_name" value="{{$fruit->fruit_name}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Quantity:</label>
            <input type="text" class="form-control" name="quantity" value="{{$fruit->quantity}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="price">Price:</label>
              <input type="text" class="form-control" name="price" value="{{$fruit->price}}">

              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label for="name">Discount:</label>
                  <input type="text" class="form-control" name="discount" value="{{$fruit->discount}}">
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update Product</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
