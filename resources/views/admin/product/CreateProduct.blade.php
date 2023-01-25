@extends('dashboard')
@section('content')
    <div class="container ml-12">
        <div class="rol">
            <div class="col-md-12">
                <br>
                <form action="{{ url('/products') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group ml-12">
                        <label for="">Name</label>
                        <input type="text" name="name" value="" class="form-control"> <br>

                        <label for="">Price</label>
                        <input type="number" name="price" value="" class="form-control"><br>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div><br>

                        <label for="">Description</label>
                        <input type="text" name="description" value="" class="form-control"> <br>

                        <label for="">Color</label>
                        <input type="text" name="color" value="" class="form-control"> <br>

                        <label for="">Size</label>
                        <input type="text" name="size" value="" class="form-control"> <br>

                        <button class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>


    </div>
@endsection
