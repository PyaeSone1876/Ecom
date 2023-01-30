@extends('dashboard')
@section('content')
    <div class="container">
        <div class="rol">
            <div class="col-md-12">
                <br>
                <form action="{{ url('/products/create') }}">
                    <button type="submit" class="btn btn-info">Create Product</button>
                </form><br>
                <table class=" table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>price</th>
                            <th>Image</th>
                            <th>Descritpion</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $products)
                            <tr>
                                <td>{{ $products->id }}</td>
                                <td>{{ $products->category_name }}</td>
                                <td>{{ $products->name }}</td>
                                <td>{{ $products->price }}</td>
                                <td class="w-25">
                                    <span>
                                        <img src="http://localhost:8000{{ Storage::url($products->image) }}"
                                            class="img-fluid img-thumbnail w-25" id="product-image">
                                        {{-- <img src="{{ asset($products->image) }}"> --}}
                                    </span>
                                </td>
                                <td>{{ $products->description }}</td>
                                <td>{{ $products->color }}</td>
                                <td>{{ $products->size }}</td>
                                <td>
                                    <form action="{{ url('products/ ' . $products->id . '/delete') }}" method="POST">
                                        @csrf
                                        <a class="btn btn-success btn-sm"
                                            href="{{ url('products/ ' . $products->id . '/edit') }}">
                                            <i class="fa-regular fa-pen-to-square"></i> Edit</a>

                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are are sure you want to delete')"><i
                                                class="fa-solid fa-trash"></i> Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
