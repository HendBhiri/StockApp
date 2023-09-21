@extends('layouts.app')

@section('content')
    <h1>Category: {{ $category->name }}</h1>
    
    <h2>Products in this Category</h2>
    <ul>
        @foreach ($products as $product)
            <li>
                {{ $product->name }}
            </li>
        @endforeach
    </ul>
    
    <a href="{{ route('categories.index') }}">Back to Categories</a>
@endsection
