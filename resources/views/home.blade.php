@extends('layouts.app')


@section('title', 'Piedini')


@section('content')

<div>
    <h1>HOME</h1>
</div>
<div>
    <p>
        <strong>
            Leggi giù.....
        </strong>
    </p>
</div>
<div>
    <img class="home" src="/img/file.jpg" alt="home">
    <p>
        <strong>
            ....Sei curioso di entrare?
        </strong>
    </p>
    <p>
        <strong>
            clicca
            <a href="{{route('comics')}}">
                qui
            </a>
        </strong>
    </p>
</div>

@endsection