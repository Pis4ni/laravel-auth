@extends('layouts.app')
@section('css')

@endsection
@section('content')
<div class="container mt-5">

    <h1 class="my-5">
        Create New Project
    </h1>
    <hr>
    <a href="{{route('admin.projects.index')}}" class="btn btn-outline-primary me-3 py-0">Back to list</a>
    <hr>
    <form action="{{ route('admin.projects.store') }}" method="post">
        
        @csrf

        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        {{-- <div class="mb-3">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div> --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
        </div>


        <button type="submit" class="btn btn-outline-success">Save</button>
        

        {{-- <div class="mb-3">
            <label for=""></label>
            <input type="text" class="form-control" id="" name="">
        </div> --}}

    
    </form>

</div>
@endsection
{{-- {{$project->title}}
{{$project->slug}}
{{$project->created_at}}
{{$project->updated_at}}
{{$project->slug}}
{{$project->created_at}} --}}