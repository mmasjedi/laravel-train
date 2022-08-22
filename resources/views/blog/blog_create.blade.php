<html>
<head>
    <title>
        Create New Blog
    </title>
</head>
{{--<style>--}}
{{--    .alarm {--}}
{{--        background-color: #e71818b3;--}}
{{--        padding: 11px;--}}
{{--        color: white;--}}
{{--        position: absolute;--}}
{{--        top: 128px;--}}
{{--        font-style: oblique;--}}
{{--        font-family: monospace;--}}
{{--        font-size: 20px;--}}
{{--        left: 385px;--}}
{{--    }--}}

</style>
<body>
<br><br>
<form method="post" action="create">
    @csrf
    Blog Name: <input type="text" name="blog_name" >
    <br><br>
    Blog Title: <input type="text" name="title_head" >
    <br><br>
    Blog description: <input type="text" name="title_detail" >
    <br><br>
    Blog Content: <input type="text" name="content" >
    <br><br>
    Blog Date: <input type="text" name="date" >
    <br><br>
    Blog Image  <input type="text" name="image" >
    <br><br>
    <button type="submit">ایجاد بلاگ جدید </button>

</form>
<br><br>
{{--<p class="alarm" >--}}

{{--    @if($errors->any())--}}
{{--        <span>{{$errors->first()}}</span>--}}
{{--    @endif--}}
{{--</p>--}}
<br><br>







</body>
</html>
