@extends('layouts.main')

@section('content')
    <div class="detail">
        <div class="card py-5 m-auto" style="width: 35rem;">
            <img src="{{ Vite::asset('resources/images/movielogo.webp') }}" class="card-img-top" alt="logo">
            <div class="card-body">
                <h5 class="card-title text-center text-uppercase py-2 fw-bold">{{ $movie->original_title }}
                </h5>
                <p class="card-text text-center fw-light">&#127470;&#127481; {{ $movie->title }}</p>

                <p class="card-text text-center fw-light text-uppercase"> <strong>Nationality</strong> <br>
                    {{ $movie->nationality }}</p>

                <p class="card-text text-center fw-light text-uppercase"> <strong>Release date</strong> <br>
                    {{ $movie->date }}
                </p>

                <p class="card-text text-center fw-light text-uppercase"> <strong>Average vote</strong> <br>
                    {{ $movie->vote }}
                </p>
            </div>
        </div>
    </div>
@endsection

@section('title')
    {{ $movie->original_title }}
@endsection
