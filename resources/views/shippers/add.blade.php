<html>
<body>
<form action="/shippers" method="post">
    {{csrf_field()}}
    Nama : <input type="text" name="CompanyName"><br />
    Phone : <input type="text" name="Phone"><br />
    <input type="submit">
</form>
</body>
</html>