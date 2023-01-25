@extends('dashboard')
@section('content')
    <div class="container">
        <div class="rol">
            <div class="col-md-12">
                <br>
                <a href="{{url('/categories/create')}}" class="btn btn-success">Create Category</a>
                <br><br>
                <table class=" table table-bordered table-hover ml-12">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($category as $category )                        
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <form action="{{url('categories/ '. $category->id .'')}}" method="POST">
                                        @csrf @method('DELETE')
                                        <a class="btn btn-info" href="{{url('categories/ '. $category->id .'/edit')}}">Edit</a>
                                        <button type="submit" onclick="return confirm('Are You sure you want to delete')" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>

                                
                                <td>
                                    {{-- <form action="{{ url('users/ ' . $users->id . '/delete') }}" method="POST">
                                        @csrf
                                        <a class="btn btn-success btn-sm" href="{{ url('users/ ' . $users->id . '/edits') }}">
                                            <i class="fa-regular fa-pen-to-square"></i> Edit</a>

                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are are sure you want to delete')"><i
                                                class="fa-solid fa-trash"></i> Delete</button>
                                    </form> --}}

                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
