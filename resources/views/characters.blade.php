@extends('layouts.app')
@section('page-title','charachters')

@section('content')
<section>
@foreach($characters as $name)
<h5>
    {{$name}}
</h5>
@endforeach
</section>
@endsection