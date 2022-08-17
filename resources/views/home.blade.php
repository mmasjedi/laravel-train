<html>
<head>
    <title>
        home

    </title>
</head>
<body>
<p>
{{--    Age of me is {{$age}} and my name is  {{$name}}--}}

{{--    <p>--}}
{{--    Blog id is {{$blog_id}}--}}
{{--    </p>--}}
</p>
<form method="get" action="http://livenegah.com">
    <input name="mobile"/>
    <button type="submit">sub-get</button>
</form>



<form method="post" action="create">
    @csrf
    <input name="mobile"/>
    <input name="family "/>
    <input name="name"/>
    <button type="submit">sub-post</button>
</form>



</body>
</html>
