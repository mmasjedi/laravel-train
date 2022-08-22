<html>
<head>
    <title>
        Send your Details
    </title>
</head>
<body>
<style>
    .alarm{
        background-color: #e71818b3;
        padding: 10px;
        color: white;
        position: absolute;
        top: 307px;
        font-family: monospace;
        font-size: 21px;
    }

</style>
<form method="POST" action="/train/public/register/update/{{$user->id}}">
    @csrf
    {{ method_field('PATCH') }}
    Name: <input type="text" name="name" value="{{$user->name}}" >
    <br><br>
    Family: <input type="text" name="family" value="{{$user->family}}">
    <br><br>
    E-mail: <input type="text" name="email" value="{{$user->email}}">
    <br><br>
    Web-site: <input type="text" name="website" value="{{$user->website}}">
    <br><br>
    Mobile Number: <input type="text" name="mobile" value="{{$user->mobile}}">
    <br><br>
    Home Number: <input type="text" name="home_number" value="{{$user->home_number}}">
    <br><br>

    <p class="alarm" >

    @if($errors->any())
        <span>{{$errors->first()}}</span>
    @endif
    </p>
    <br><br>
    <button type="submit">ثبت تغییرات </button>



</form>
</body>
</html>
