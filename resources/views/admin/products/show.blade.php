@extends('layouts.admin')

@section('content')
    <div class="contaienr">
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="card-body">
                        <p class="card-title"><strong>Project name:</strong> [product name]</p>
                        <p class="card-text"><strong>Slug</strong>: [product slug]</p>
                        <p class="card-text"><strong>Client name</strong>: [product name]</p>
                        {{-- @if ($project->summary )
                          <p class="card-text"><strong>Description:</strong> {{ $project->summary }}</p>
                        @endif
                        <p class="card-text"><strong>Date of creation:</strong> {{ $project->created_at }}</p>
                        <p class="card-text"><strong>Last updated:</strong> {{ $project->updated_at }}</p>
                        <div class="d-flex gap-3">
                          <a href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.projects.destroy', ['project' => $project->slug]) }}" method="POST">
                          @csrf
                          @method('DELETE')
  
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form> --}}
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

@endsection