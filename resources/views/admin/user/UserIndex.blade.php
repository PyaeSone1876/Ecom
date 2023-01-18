@extends('dashboard')
@section('content')
    <div class="container">
        <div class="rol">
            <div class="col-md-12">
                <br>
                <a href="{{ url('users/register') }}" class="btn btn-info">Register</a>
                <br><br>
                <table class=" table table-bordered table-hover ml-12">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $users)
                            <tr>
                                <td>{{ $users->id }}</td>
                                <td>{{ $users->name }}</td>
                                <td>{{ $users->email }}</td>
                                <td>{{ $users->password }}</td>
                                <td>
                                    <form action="{{ url('users/ ' . $users->id . '/delete') }}" method="POST">
                                        @csrf
                                        <a class="btn btn-success btn-sm" href="{{ url('users/ ' . $users->id . '/edits') }}">
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
