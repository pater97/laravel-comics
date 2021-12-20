
@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
<section id="show_page">
    <div class="hero_image">
        <div class="container position-relative">
            <div class="card_section position-absolute">
                <div class="card postion-relative">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
                    <div class="comic_book position-absolute">
                        COOMIC BOOK
                    </div>
                    <div class="gallery position-absolute">
                        VIEW GALLERY
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blue_band brand_bk">
    </div>
    <div class="container description d-flex">
        <div class="col-md-9">
            <h1>
                {{$comic['title']}}
            </h1>
            <div class="green_bar">
                <div class="col-9">
                    <div>
                        <h5 class="px-3">
                            <span>U.S Price:</span>  {{$comic['price']}}
                        </h5>
                    </div>
                    <div>
                        <h5 class="px-5">
                            <span>AVAILABLE</span>
                        </h5>
                    </div>
                </div>
                <div class="col-3">
                    <h5>
                        check avaliability <i class="fas fa-sort-down"></i>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <div>
    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
    <p>{{ $comic['series'] }}</p>
</div> -->
@endsection