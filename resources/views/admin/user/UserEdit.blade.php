@extends('dashboard')
@section('content')
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <form action="{{ url('users/ ' . $users->id . '/update') }}" method="POST">
                        @csrf
                        <div class="form-group ml-12">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{ $users->name }}" class="form-control"> <br>
                            <label for="">Email</label>
                            <input type="email" name="email" value="{{ $users->email }}" class="form-control"><br>

                            <button class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
