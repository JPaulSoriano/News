@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center">
                <h2>Categories</h2>
            </div>
            <div class="my-3">
                @can('category-create')
                <a class="btn btn-sm btn-primary" href="{{ route('categories.create') }}"> Create New Category</a>
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
	    @foreach ($categories as $category)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $category->name }}</td>
	        <td>
                <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                    <a class="btn btn-sm btn-primary" href="{{ route('categories.show',$category->id) }}">Show</a>
                    @can('category-edit')
                    <a class="btn btn-sm btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('category-delete')
                    <button type="submit" class="btn btn-sm btn-primary">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $categories->links() !!}


@endsection