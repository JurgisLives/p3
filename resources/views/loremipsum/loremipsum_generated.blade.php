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
    <link href="/css/lorem.css" type='text/css' rel='stylesheet'>
@stop


@section('content')
    
        <h1>Welcome to Programmer's best friend; Lorem Ipsum</h1>
		<h2>A user generator that allows you to generate up to 1000 users to test your applications</h2>
		
			
			<ul>
				@foreach ($paragraphs as $paragraph)
					<p>{{ $paragraph}}</p>
					
				@endforeach
			</ul>
		
		<a href="/">Go Back</a>

    
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop