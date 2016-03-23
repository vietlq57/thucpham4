@extends('layouts.app')

@section('content')
    <h1>{{ $food->vi_name }}</h1>

    @foreach($nutrients as $nutrient)
        <label style="font-size: medium;width: 100px">{{ $nutrient->vi_name }}</label> : <label style="font-size: medium">{{ $nutrient->pivot->value }}</label>
        <br/>
    @endforeach
	<div style="font-size: large">
		<a href="{{ url('/thucpham/edit/' . $food->id) }}">Edit</a>
	</div>

@endsection