@extends('layouts.master')


@section('title')
    Programmer's Best Friend
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    <link href="lorem.css" type='text/css' rel='stylesheet'>
@stop


@section('content')
    
        <h1>Welcome to Programmer's best friend</h1>
		<h2>A limited suite of applications for testing your applications</h2>
		
		
		<a href="/usergenerator"> Generate Users</a><br>
		<a href="/loremipsum"> Lorem Ipsum Generator</a>
		

   
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop