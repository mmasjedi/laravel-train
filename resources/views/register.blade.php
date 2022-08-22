<html>
<head>
    <title>
        Send your Details
    </title>
</head>
<style>
    .alarm {
        background-color: #e71818b3;
        padding: 11px;
        color: white;
        position: absolute;
        top: 128px;
        font-style: oblique;
        font-family: monospace;
        font-size: 20px;
        left: 385px;
    }

</style>
<body>
{{--<form method="get" action="input_id">--}}
{{--    ID: <input type="text" name="id">--}}
{{--    <button type="submit"> Enter id to delete</button>--}}
{{--</form>--}}
<br><br>
<form method="post" action="create">
    @csrf
    Date: <input type="text" name="date">
    <br><br>
    Name: <input type="text" name="name">
    <br><br>
    Family: <input type="text" name="family">
    <br><br>
    E-mail: <input type="text" name="email">
    <br><br>
    Website: <input type="text" name="website">
    <br><br>
    Mobile Number: <input type="text" name="mobile">
    <br><br>
    Home number: <input type="text" name="home_number">
    <br><br>
    <button type="submit">ایجاد مشخصات جدید</button>
    <td><a href="register/register-list">List</a></td>

</form>
<br><br>
<p class="alarm">

    @if($errors->any())
        <span>{{$errors->first()}}</span>
    @endif
</p>
<br><br>


</body>
</html>
