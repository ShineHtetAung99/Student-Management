@extends('layouts.main')

@section('content')
<div class="card card-body my-5">

    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>

        @endforeach

    @endif

<form class="text-center border-light p-5" action="{{ route('update', $student->id) }}" method="POST">
        {{ csrf_field() }}
        <p class="h4 mb-4">Edit Student</p>
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="name" id="loginName" class="form-control" value="{{ $student->name }}" name="name"/>
            <label class="form-label" for="Name">Name</label>
        </div>
        <div class="form-outline mb-4">
            <input type="phone" id="phone" class="form-control" value="{{ $student->phone }}" name="phone"/>
            <label class="form-label" for="phone">Phone</label>
        </div>
        <div class="form-outline mb-4">
            <input type="address" id="address" class="form-control" value="{{ $student->address }}" name="address"/>
            <label class="form-label" for="address">Address</label>
        </div>

        <div class="form-outline mb-4">
            <input type="email" id="loginName" class="form-control" value="{{ $student->email }}" name="email"/>
            <label class="form-label" for="loginName">Email</label>
        </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Update Data</button>
</form>
</div>
@endsection
