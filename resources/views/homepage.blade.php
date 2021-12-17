@extends('layouts.app')
@section('page-title','homepage')

@section('content')
<!-- qui si inserisce il main dell'homepage -->
<section class="homepage">
    <div class="hero_image"></div>
</section>
<section class="container-fluid">
    <div class="container card_container">
        <div class="row g-4">
        @foreach($cards as $card)
            <div class="col-md-2">
                <div class="card">
                    <img src="{{$card['thumb']}}" alt="">
                    <h5>
                    {{$card['series']}}
                    </h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection