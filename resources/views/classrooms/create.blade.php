@extends('layouts/main')
@section('main')
    <div class="container mb-5">
        <h1>CREATE NEW CLASS</h1>
        <form action="{{ route('classrooms.store') }}" method="POST">
            <!-- la protezione -->
            @csrf
            <!-- il metodo -->
            @method('POST')

            <div class="form-group">
                <label for="name">Classroom name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Classroom description</label>
                <textarea class="form-group" name="description"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Create">
            </div>
        </form>
    </div>
@endsection