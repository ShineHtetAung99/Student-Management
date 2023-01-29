@extends('layouts.main')

@section('content')


    @if (session('successMsg'))
    <div class="alert alert-success" role="alert">
        {{ session('successMsg') }}
    </div>
    @endif
    <div class="card card-body">
    <table class="table">
        <thead class="table-info white-text">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">PhoneNo:</th>
            <th scope="col">Address</th>
            <th scope="col">E-mail</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->email }}</td>
                <td><a class="btn btn-raised btn-primary btn-sm" href="{{ route('edit', $student->id)}}"><i class="fas fa-edit"></i></a>
                    <form method="POST" id="delete-form-{{ $student->id }}" action="{{ route('delete', $student->id)}}" style="display: none;">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                    </form>
                    <button onclick="if (confirm('Are you sure delete this data?')) {
                        event.preventDefault();
                        document.getElementById('delete-form-{{ $student->id }}').submit();
                    }else{
                        event.preventDefault();
                    }" class="btn btn-raised btn-danger btn-sm" href="{{ route('edit', $student->id)}}"><i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div><br>
    {{ $students->links() }}
    

@endsection
