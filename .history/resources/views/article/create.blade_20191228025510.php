@extends('layout.master')
@section('title','Create')
@section('content')
<div class="container">
    <div class="col-md-6">
        <h1>Create Article</h1>
        <hr>
        <form action="{{route('article.create')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input @error('title') is-invalid @enderror id="title" class="form-control" type="text" name="title">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" class="form-control" type="text" name="content" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">OK</button>
        </form>
    </div>
</div>
    
@endsection