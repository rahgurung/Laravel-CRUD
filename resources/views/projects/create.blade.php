@extends('layout')

@section('content')
    <h1 class="title">Create New Project</h1>
    <form action="/projects" method="POST">
        @csrf
        <div class="field">
            <label for="title" class="label"> Title </label>
            <div class="control">
                <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" value="{{ old('title') }}" name="title" placeholder="Title" required>
            </div>
        </div>
        <div class="field">
            <label for="description" class="label"> Description </label>
            <div class="control">
                <input type="text" class="input" value="{{ old('description') }}" name="description" placeholder="Description" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Submit</button>
            </div>
        </div> 

        @if($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection