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
            Se vuoi lasciarmi......
        </strong>
    </p>
    <p>
        <strong> 
            <a href="{{route('home')}}"> Non esitare </a>
        </strong>
    </p>
</div>
@endsection