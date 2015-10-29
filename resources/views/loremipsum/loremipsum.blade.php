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
    
        <h1>Welcome to Programmer's best friend; LoremIpsum Genereator</h1>
		<h2>A Lorem Ipsum generator that allows you to generate up to 1000 paragraphs of Lorem Ipsum to test your applications</h2>
		
		<form method='POST' action='/loremipsum'>
		
		
		<input type="number" max=1000 name="paragraphs" value="{{old ('population')}}"><br>
		<h4>All text will be randomly generated</h4>
			
		
			@if(count($errors) > 0)
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
			@endif
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="submit" value="generate">
		</form>
		
		<form method='GET' action='/generator'>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="submit" value="go back">
		</form>
    
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop