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
  <form method="post" action="{{route('product.update',['product'=> $product])}}">
    @csrf
    @method('put')

    <div>
      <label >name</label>
      <input type="text" name="name" placeholder="Name" value="{{$product->name}}">
    </div>
     <div>
      <label >QTY</label>
    <input type="text" name="qty" placeholder="Quantity" value="{{$product->qty}}">
  </div>
    <div>
      <label >price</label>
    <input type="text" name="price" placeholder="Price" value="{{$product->price}}">
  </div>
    <div>
        <label >description</label>
    <input type="text" name="description" placeholder="Description" value="{{$product->description}}">

    </div>
    <input type="submit" value="save me">
  </form>
</body>
</html>