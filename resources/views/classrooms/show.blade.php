@extends('layouts/main')
@section('main')
    <div class="container mb-5">
        <h1>{{$classroom->name}} details<h1>
        <h6>ID: {{$classroom->id}}</h6>
        <hr>
        <p>{{$classroom-> description}}</p>
        <hr>
        <div class="mb-3">Created at: {{$classroom-> created_at}}</div>
        <div class="mb-3">Update at: {{$classroom-> updated_at}}</div>
            
    </div>
@endsection