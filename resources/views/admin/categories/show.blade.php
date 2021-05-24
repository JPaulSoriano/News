@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center">
                <h2> Show Category</h2>
            </div>
            <div class="my-3">
                <a class="btn btn-sm btn-primary" href="{{ route('categories.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $category->name }}
            </div>
        </div>

    </div>
@endsection
