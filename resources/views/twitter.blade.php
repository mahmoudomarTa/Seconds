<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twitter</title>

</head>
<body>

<br>
<br>
<br>

        @if(app()->getLocale() == 'en')
            <li><a href="{{url('twitter/ar')}}">AR</a></li>
        @elseif(app()->getLocale() == 'ar')
            <li><a href="{{url('twitter/en')}}">EN</a></li>
        @endif
<br>
<br>
<br>
        <img width="200" height="200" src="{{$twitter->image}}">
<h1>{{$twitter->title}} </h1>
<h3>{{$twitter->content}} </h3>

<br>
<br>
            <li><a href="{{url('index/'.app()->getLocale())}}">{{Lang::get('nav.home')}}</a></li>
</body>
</html>
