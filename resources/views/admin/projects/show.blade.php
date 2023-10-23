@extends('layouts.app')
@section('css')

@endsection
@section('content')
<div class="container mt-5">

    <h1 class="my-5">
        {{$project->title}}
    </h1>
    <p>
        <strong>Slug:</strong>
        <br>
        {{$project->slug}}
    </p>
    <p>
        <strong>Created on:</strong>
        <br>
        {{$project->created_at}}
    </p>
    <p>
        <strong>Last Update:</strong>
        <br>
        {{$project->updated_at}}
    </p>
    {{$project->slug}}
    {{$project->created_at}}
</div>
@endsection