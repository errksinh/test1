<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <h2>Hello Index</h2>   
    <div>
        @if(session()->has('sucess'))
            <div>
                    {{session('sucess')}}
            </div>
        @endif

    </div>
    <div>
        <a href="{{route('products.create')}}">Create Product</a>
        </div>
    <div>
            <table>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Desc</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->qty}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->desc}}</td>
                            <td>
                                    <a href="{{route('products.edit',['product'=>$product])}}">Edit</a>
                            </td> 
                            <td>
                                    <form method="post" action="{{route('products.destroy',['product'=>$product])}}">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete"/>    
                                </form>
                            </td>        
                        </tr>
                    @endforeach                 
            </table>
    </div>
</body>
</html>