<html>
<body>
<form action="/shippers/{{$shipper->ShipperID}}" method="post">
    {{csrf_field()}}
    {{method_field('put')}}
    Nama : <input type="text" name="CompanyName" value="{{$shipper->CompanyName}}"><br />
    Phone : <input type="text" name="Phone" value="{{$shipper->Phone}}"><br />
    <input type="submit">
</form>
</body>
</html>