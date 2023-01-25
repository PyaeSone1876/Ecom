@extends('dashboard')
@section('content')
    <div class="container ml-12">
        <div class="rol">
            <div class="col-md-12">
                <br>
                <form action="{{ url('/categories') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group ml-12">
                        <label for="">Name</label>
                        <input type="text" name="name" value="" class="form-control"> <br>
                        <button class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>


    </div>
@endsection
