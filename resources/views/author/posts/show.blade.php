@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center">
                <h2> Show Post</h2>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $post->name }}
            </div>
            <div class="form-group">
                <strong>Content:</strong>
                {{ $post->content }}
            </div>
        </div>

    </div>
@endsection
