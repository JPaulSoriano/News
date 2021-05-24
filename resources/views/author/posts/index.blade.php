@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center">
                <h2>Posts</h2>
            </div>
            <div class="my-3">
                @can('post-create')
                <a class="btn btn-sm btn-primary" href="{{ route('posts.create') }}"> Create New Post</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>

            <th width="280px">Action</th>
        </tr>
	    @foreach ($posts as $post)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $post->name }}</td>
	        <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                    <a class="btn btn-sm btn-primary" href="{{ route('posts.show',$post->id) }}">Show</a>
                    @can('post-edit')
                    <a class="btn btn-sm btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('post-delete')
                    <button type="submit" class="btn btn-sm btn-primary">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $posts->links() !!}


@endsection