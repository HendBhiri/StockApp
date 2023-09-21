@extends('layouts.app')

@section('content')
    <h1>Edit Category</h1>
    
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Category Name:</label>
        <input type="text" name="name" id="name" value="{{ $category->name }}">
        <button type="submit">Update Category</button>
    </form>
    
    <a href="{{ route('categories.index') }}">Back to Categories</a>
@endsection
