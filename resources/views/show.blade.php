@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
<div>
    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
    <p>{{ $comic['series'] }}</p>
</div>
@endsection