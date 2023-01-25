@extends('dashboard')
@section('content')
    <div class="container ml-12">
        <div class="rol">
            <div class="col-md-12">
                <br>
                <form action="{{url('categories/'.$category->id.' ')}}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PATCH')
                    <div class="form-group ml-12">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{$category->name}}" class="form-control"> <br>

                        <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>


    </div>
@endsection
