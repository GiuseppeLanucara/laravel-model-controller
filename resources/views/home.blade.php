@extends('layouts.app')

@section('content')
    <div>

    </div>


    <section>
        <div class="cards-container">

            <ul class="row">

                @foreach ($movies as $movie)
                    <li class="card"><img src="{{ $movie['image'] }}" :alt="{{ $movie['image'] }}">
                        <p>{{ $movie['title'] }}</p>
                @endforeach

            </ul>



        </div>
    </section>
@endsection
