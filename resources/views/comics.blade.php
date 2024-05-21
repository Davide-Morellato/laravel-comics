@extends('layouts.app')


@section('title', 'Comics')

@section('content')

<div>
    <h1> COMICS </h1>
</div>
<div>
    <h3>
        GOLOSONE!
    </h3>
    <img class="cover" src="/img/greek-feet.jpg" alt="">
    <p>
        <strong>
            Per tornare alla Homepage, clicca
            <a href="{{route('home')}}"> qui </a>
        </strong>
    </p>
</div>
@endsection