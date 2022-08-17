<html>
<head>
    <title>
        Send your Details
    </title>
</head>
<body>
<form method="get"  action="input_id">
    ID: <input type="text" name="id" >
    <button type="submit"> Enter id to delete   </button>
</form>
<br><br>
<form method="post" action="create">
    @csrf
    Date: <input type="text" name="date" >
    <br><br>
    Name: <input type="text" name="name" >
    <br><br>
    Family: <input type="text" name="family" >
    <br><br>
    E-mail: <input type="text" name="email" >
    <br><br>
    Website: <input type="text" name="website" >
    <br><br>
    Mobile Number: <input type="text" name="mobile" >
    <br><br>
    Home Number: <input type="text" name="home_number" >
    <br><br>
     <button type="submit">new</button>
</form>
<br><br>








</body>
</html>
