@extends('home')

@section('content')
<p>This is an example of a view that extends the home layout.</p>

@for($i = 0; $i < 10; $i++)
    <p>
    {{$i}}
    </p>

    @endfor
    @endsection