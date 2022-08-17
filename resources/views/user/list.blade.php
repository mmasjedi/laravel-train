<html>
<head>
    <title>
        home

    </title>
</head>
<body>
{{-- @dd($data)--}}
<table>
    <tr>
        <th>name</th>
        <th>name</th>
        <th>age</th>
    </tr>
    <tr>
        <td>{{$data[0]['name']}}</td>
        <td>{{$data[0]['age']}}</td>
        <td>{{$data[0]['age']}}</td>
    </tr>
    <tr>
        <td>{{$data[1]['name']}}</td>
        <td>{{$data[1]['age']}}</td>
        <td>{{$data[1]['age']}}</td>
    </tr>
    <tr>
        <td>{{$data[2]['name']}}</td>
        <td>{{$data[2]['age']}}</td>
    </tr>
    <tr>
        <td>{{$data[3]['name']}}</td>
        <td>{{$data[3]['age']}}</td>
    </tr>


</table>


<table>
    <tr>
        <th>name</th>
        <th>age</th>
    </tr>

    @foreach($data as  $d)
        <tr>
            <td>{{$d['name']}}</td>
            <td>{{$d['age']}}</td>
        </tr>
    @endforeach

</table>

<table>
    <tr>
        <th>name f</th>
        <th>age</th>
    </tr>

    @for($i =0 ;$i<sizeof($data); $i++)
        <tr>
            <td>{{$data[$i]['name']}}</td>
            <td>{{$data[$i]['age']}}</td>
        </tr>
    @endfor

</table>
 {{--@dd($dat؟a)--}}

</body>
</html>
