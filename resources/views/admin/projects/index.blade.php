@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endsection
@section('content')
    <div class="container mt-5">

        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Title</th>
                  <th scope="col">Slug</th>
                  <th scope="col">Created at</th>
                  <th scope='col'>Last Update</th>
                  <th scope='col'>Actions</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($projects as $project)
                <tr>
                    <th scope="row">{{$project->title}}</th>
                    <td>{{$project->slug}}</td>
                    <td>{{$project->slug}}</td>
                    <td>{{$project->created_at}}</td>
                    <td>{{$project->updated_at}}</td>
                    
                    {{-- actions buttons --}}
                    
                    <td class="h-100">
                        <div class="h-100 d-flex align-items-center justify-content-between">
                            <a href="{{ route('admin.projects.show', $project)}}"><i class="fa-solid fa-eye text-"></i></a>
                            <a href=""><i class="fa-solid fa-pencil text-warning"></i></a>
                            <a href=""><i class="fa-solid fa-trash text-danger"></i></i></a>
                        </div>
                    </td>
                  </tr>
                @empty
                    <h1>No Record Found :(</h1>
                @endforelse
              </tbody>
        </table>

        {{$projects->links('pagination::bootstrap-5')}}
    </div>
@endsection