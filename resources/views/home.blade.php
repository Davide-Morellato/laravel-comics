@extends('layouts.app')


@section('title', 'Piedini')


@section('content')

<div>
    <h1>WELCOME!</h1>
</div>

<div>
    <p>
        <strong>
            Segui le briciole....
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
            Prego, 
            <a class="text-decoration-none" href="{{route('comics')}}">
                accomodati
            </a>
        </strong>
    </p>
</div>

@endsection