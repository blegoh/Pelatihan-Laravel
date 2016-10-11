<html>
<body>
<table border="1">
    @foreach($products as $product)
        <tr>
            <td>{{$product->ProductName}}</td>
            <td>{{$product->category->CategoryName}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>