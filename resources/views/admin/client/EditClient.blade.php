@extends('dashboard')
@section('content')
    <div class="container ml-12">
        <div class="rol">
            <div class="col-md-12">
                <br>
                <form action="{{url('clients/'.$clients->id.' ')}}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PATCH')
                    <div class="form-group ml-12">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{$clients->name}}" class="form-control"> <br>

                        <label for="">Email</label>
                        <input type="email" name="email" value="{{$clients->email}}" class="form-control"><br>

                        <label for="">password</label>
                        <input type="password" name="password" value="{{$clients->password}}" class="form-control"> <br>

                        <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>


    </div>
@endsection
