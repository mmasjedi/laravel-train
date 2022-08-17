<html>
<head>
    <title>
list
    </title>
</head>
<body>
<table>
    <tr>
        <th>DATE</th>
        <th>NAME</th>
        <th>FAMILY</th>
        <th>E-MAIL ADDRESS</th>
        <th>WEB-SITE</th>
        <th>MOBILE NUMBER</th>
        <th>HOME NUMBER</th>

    </tr>
        @foreach($data as $b)
        <tr>
            <td>{{$b->date}}</td>
            <td>{{$b->name}}</td>
            <td>{{$b->family}}</td>
            <td>{{$b->email}}</td>
            <td>{{$b->website}}</td>
            <td>{{$b->mobile}}</td>
            <td>{{$b->home_number}}</td>
            <td>  <form method="POST" action="{{"delete/".$b->id}}">
                        {{csrf_field()}}
                        @method('DELETE')
                        <button type="submit">Delete</button>
                </form>
            </td>
            <td><a href="edit/{{$b->id}}">edit</a></td>

        </tr>
        @endforeach


</table>





</body>
</html>
