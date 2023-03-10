@extends('layouts.app')

@section('content')


<section class="jumbotron">
</section>
<!-- /. jumbotron -->

<section class="comics">
    <div class="container pt-5">
        <div class="current_series bg-primary text-white text-uppercase d-flex py-2">
            current series
        </div>
        @forelse($comics as $comic)
        <div class="card col-2">
            <div class="card-img">
                <img src="{{$comic['thumb']}}" alt="">
            </div>
            <div class="card-title">
                {{$comic['series']}}
            </div>
        </div>
        @empty
        <div class="col">
            <p>No comics in this shop yet.</p>
        </div>
        @endforelse
        <div class="w-100 d-flex justify-content-center my-2">
            <button class="btn btn-primary text-uppercase px-5">Load More</button>
        </div>

    </div>
</section>
<!-- /. comics -->

<section class="features">
    <div class="container">
        @foreach($banner_icons as $icon)
        <div class="card_item">
            <div class='img_container'>
                <img src="{{ Vite::asset($icon['img'])}}" alt="">
            </div>
            <span>{{$icon['title']}}</span>
        </div>
        @endforeach
    </div>
</section>
<!-- /. features -->
@endsection