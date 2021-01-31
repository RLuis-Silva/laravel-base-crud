@extends('layouts/main')
@section('main')
    <div class="container mb-5">
        <h1 class="mb-5">OUR CLASSES<h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classrooms as $classroom)
                        <tr>
                            <td>{{ $classroom->id }}</td>
                            <td>{{ $classroom->name }}</td>
                            <td class="text-center" width="100">
                                <a href="{{route('classrooms.show', $classroom->id)}}" class="btn btn-success">Show</a>
                            </td>
                            <td class="text-center" width="100">
                                <a href="#" class="btn btn-primary">Edit</a>
                            </td>
                            <td class="text-center" width="100">
                                <a href="#" class="btn btn-danger">Delite</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection