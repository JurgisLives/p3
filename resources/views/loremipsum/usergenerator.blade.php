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
    
        <h1>Welcome to Programmer's best friend; User Generator</h1>
		<h2>A user generator that allows you to generate up to 1000 users to test your applications</h2>
			
			@if(count($errors) > 0)
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
			@endif
			
		<form method='POST' action='/usergenerator'>
		
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		
		<input type="number" min='1' max='100' name="population" value="{{old ('population')}}"><br>
		
		
		<h4>All values will be randomly generated</h4>
		
			Add Phone Number? <input type="checkbox" name="ph_num"><br>
			Add email? <input type="checkbox" name="email" checked="yes"><br>
			

		

		<input type="submit" value="generate">
			
		</form>
		
		
		<a href="/">Go Back</a>

    
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop