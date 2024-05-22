@extends('layouts.app')


@section('title', 'Comics')

@section('content')
<section class="p-4">
    <div class="py-4">
        <h1> COMICS </h1>
    </div>
    <div class="container">
        <div class="row gy-4">
        @foreach($comics as $comic)
            <div class="col-4">
                <div class="card h-100">
                  <img class="h-75" src="{{$comic['thumb']}}" class="card-img-top" alt="comics-image">
                  <div class="card-body">
                    <p class="card-text">{{$comic['title']}}</p>
                    <p class="card-text">{{$comic['series']}}</p>
                  </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>

<!-- <div>
    <h3>
        GOLOSONE!
    </h3>
    <img class="cover" src="/img/greek-feet.jpg" alt="">
    <p>
        <strong>
            Se vuoi lasciarmi......
        </strong>
    </p>
    <p>
        <strong> 
            <a href="{{route('home')}}"> Non esitare </a>
        </strong>
    </p>
</div> -->
@endsection