<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Create Products</h1>
  <div>
    @if ($errors->any())
   
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      
      
    @endif
  </div>
  <form method="post" action="{{route('product.store')}}">
    @csrf
    @method('post')

    <div>
      <label >name</label>
      <input type="text" name="name" placeholder="Name">
    </div>
     <div>
      <label >QTY</label>
    <input type="text" name="qty" placeholder="Quantity">
  </div>
    <div>
      <label >price</label>
    <input type="text" name="price" placeholder="Price">
  </div>
    <div>
        <label >description</label>
    <input type="text" name="description" placeholder="Description">

    </div>
    <input type="submit" value="save me">
  </form>
</body>
</html>