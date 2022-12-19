@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Treni</h2>
        <ul>
            @foreach ($trains as $train)
                <li>{{ $train->company }}</li>
            @endforeach
        </ul>
    </div>
@endsection
