@extends('layouts.app')
@section('css')

@endsection
@section('content')
<div class="container mt-5">

    <h1 class="my-5">
        Edit Project: <span class="text-primary">{{$project->id}}</span> ( EX {{$project->title}} )
    </h1>
    
    <form action="{{ route('admin.projects.update', $project) }}" method="post">
        
        @csrf
        
        @method('put')

        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$project->title}}">
        </div>
        {{-- <div class="mb-3">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div> --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" value="{{$project->description}}"></textarea>
        </div>


        <button type="submit" class="btn btn-outline-warning">Edit</button>
        

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