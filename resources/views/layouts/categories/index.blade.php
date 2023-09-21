@extends('layouts.app')

@section('content')
    <h1>Categories</h1>
    
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>

    @if ($categories->count() > 0)
        <ul>
            @foreach ($categories as $category)
                <li>
                    <a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a>
                    <a href="{{ route('categories.edit', $category) }}">Edit</a>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>No categories found.</p>
    @endif
@endsection
