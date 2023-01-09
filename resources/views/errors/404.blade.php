@extends('layouts.main')

@section('content')
    <div class="error">
        <h3 class="py-5 text-center text-uppercase fw-bold">
            Sorry, page not found :(
        </h3>
        <a href="{{ route('home') }}">BACK HOME</a>
    </div>
@endsection
