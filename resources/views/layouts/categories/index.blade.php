@extends('master')

@section('content')
<div class="section-body mt-3">
    <h1>Categories</h1>
    

    <div class="row clearfix mt-4">
    <div class="col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Categories</h3>
            </div>
            <div class="card-body">
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Category Summary</h3>
                <div class="card-options">
                    <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                    <a href="{{ route('categories.create') }}" class="card-options-add"><i class="fe fe-plus"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped mb-0 text-nowrap">
                    <thead>
                        <tr>
                            <th>#No</th>
                            <th>Category Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>#{{ $loop->iteration }}</td>
                                        <td>
                                            <a href="{{ route('categories.show', $category->id) }}">
                                                {{ $category->name }}
                                            </a>
                                        </td>
                                        <td>
                                            <div class="item-action dropdown ml-2 show">
                                            <a href="#" data-toggle="dropdown" aria-expanded="true"><i class="fe fe-more-vertical"></i></a>

                                                <div class="dropdown-menu dropdown-menu-right show" x-placement="top-end" style="position: absolute; transform: translate3d(-174px, -321px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                    <a class="dropdown-item" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="dropdown-item" type="submit">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row clearfix">
    <div class="col-12 col-sm-12">
    <div class="card-body">
                    <div class="card-header">
                        <h3 class="card-title">Product Summary</h3>
                        <div class="card-options">
                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                            <a href="{{ route('categories.create') }}" class="card-options-add"><i class="fe fe-plus"></i></a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-striped mb-0 text-nowrap">
                            <thead>
                                <tr>
                                    <th>#No</th>
                                    <th>Category Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>#{{ $loop->iteration }}</td>
                                        <td>
                                            <a href="{{ route('categories.show', $category->id) }}">
                                                {{ $category->name }}
                                            </a>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="dropdown-item" type="submit">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
