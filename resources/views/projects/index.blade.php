@extends('layout')

@section('content')
    
    <h1 class="title">Projects</h1>

    @foreach ($projects as $project)
    <ul>
        <li>
            <a href="/projects/{{ $project->id }}">
                {{ $project->title }}
            </a>    
        </li>
    </ul>
    @endforeach    
@endsection