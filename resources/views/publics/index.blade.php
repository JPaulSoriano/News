@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3>Latest News</h3>
        </div>
    </div>
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-sm-4">
                <div class="card border-0">
                    <img class="card-img-top" src="{{asset('storage/'.$post->cover_path)}}" alt="Card image cap">
                        <div class="card-body p-0">
                            <div class="fs-6 text-muted my-2">{{ $post->updated_at->format('d F Y') }}</div>
                            <h5 class="card-title"> <a href="{{ route('publics.show', $post->id) }}">{{ $post->name }}</a></h5>
                        </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
