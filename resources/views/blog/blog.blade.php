<html>
<head>
    <title>
        WebLog
    </title>
    <link rel="stylesheet" href="{{ asset('blog.css') }}">


</head>


<body>

@foreach($data as $b)
    <div class="header">

        <h2>{{$b->blog_name}}</h2>

    </div>

    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>{{$b->title_head}}</h2>
                <h5>{{$b->title_detail}}, {{$b->date}}</h5>
                <div class="fakeimg" style="height:200px;">
                    <img src={{$b->image}} width="100%" height="100%">
                </div>
                <p>{{$b->content}}</p>
            </div>
            <div class="card">
                <h2>{{$b->title_head}}</h2>
                <h5>{{$b->title_detail}}, {{$b->date}}</h5>
                <div class="fakeimg" style="height:200px;">
                    <img src={{$b->image}} width="100%" height="100%">
                </div>
                <p>Some text..</p>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card">
                <h2>About Me</h2>
                <div class="fakeimg" style="height:100px;">
                    <img src={{$b->image}} width="100%" height="100%">
                </div>
                <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
            </div>
            <div class="card">
                <h3>Popular Post</h3>
                <div class="fakeimg">
                    <img src={{$b->image}} width="100%" height="10%">
                </div>
                <br>
                <div class="fakeimg">
                    <img src={{$b->image}} width="100%" height="10%">
                </div>
                <br>
                <div class="fakeimg">
                    <img src={{$b->image}} width="100%" height="10%">
                </div>
            </div>
            <div class="card">
                <h3>Follow Me</h3>
                <p>Some text..</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <h2>Footer</h2>
    </div>
@endforeach
</body>
