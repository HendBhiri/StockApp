@extends('master')


@section('content')
<body>
<div class="section-body mt-3">
<div class="row clearfix mt-4">
    <div class="col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Product</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('products.add') }}" class="btn btn-success">
                    <i class="fe fe-plus"></i>
                    Add Product
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Product Summary</h3>
                <div class="card-options">
                    <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                    <a href="{{ route('products.add') }}" class="card-options-add"><i class="fe fe-plus"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped mb-0 text-nowrap">
                        <thead>
                            <tr>
                                <th>#No</th>
                                <th>Product Name</th>
                                <th>Category Name</th>
                                <th>Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>#{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td>
                                @if ($product->category)
                                    {{ $product->category->name }}
                                @else
                                    Category not set
                                @endif
                                </td>
                                <td>{{ $product->stock }}</td>
                                <td>
                                    <div class="item-action dropdown ml-2 show">
                                        <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="true"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right show" x-placement="top-end" style="position: absolute; transform: translate3d(-174px, -321px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a href="javascript:void(0)" class="dropdown-item delete-product" data-product-id="{{ $product->id }}"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
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
<hr>
</div>
<!-- Include jQuery if you haven't already -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include your custom JavaScript file -->
<script src="{{ asset('js/product-delete.js') }}"></script>

</body>
@endsection
