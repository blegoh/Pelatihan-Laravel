<html>
<body>
<table border="1">

    @foreach($shippers as $shipper)
        <tr>
        <td>{{$shipper->ShipperID}}</td>
        <td>{{$shipper->CompanyName}}</td>
        <td>
            <a href="/shippers/{{$shipper->ShipperID}}">Detail</a>
            <a href="/shippers/{{$shipper->ShipperID}}/edit">edit</a>
            <form action="shippers/{{$shipper->ShipperID}}/delete" method="post">
                {{csrf_field()}}
                {{method_field('delete')}}
                <input type="submit" value="delete">
            </form>
        </td>
        </tr>
    @endforeach

</table>
</body>
</html>