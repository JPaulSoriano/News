@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="text-left">
                <h2>{{ $public->name }}</h2>
            </div>
            <p> {{ $public->content }}</p>
        </div>
    </div>


 
@endsection
