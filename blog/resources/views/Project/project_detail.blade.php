@extends('Layout.default')

@section('titile')
    project detail
@endsection

@section('data-input-output-label')
    <label for="first_name_input">Project detail</label>
@endsection

@section('data-input-output')
    <div class="list-group">

        <a href="/projects/project_detail/{{$projects->id}}" class="bg-warning list-group-item list-group-item-action">{{$projects->id}} &nbsp;&nbsp;&nbsp; {{$projects->name}} &nbsp;&nbsp;&nbsp; {{$projects->create_date}}</a>
        <a href="/projects/project_update_form/{{$projects->id}}" class="bg-warning list-group-item list-group-item-action">Update</a>
        <a href="/projects/project_delete/{{$projects->id}}" class="bg-warning list-group-item list-group-item-action">Delete</a>

    </div>
@endsection

