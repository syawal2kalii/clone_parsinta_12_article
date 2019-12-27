@extends('layout.master')
@section('title')
    Article
@endsection
@section('content')
<div class="container">
    <div class="col-md-6">
        <h1>Create Article</h1>
        <hr>
        <form action="" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" class="form-control" type="text" name="title">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" class="form-control" type="text" name="content" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary"></button>
        </form>
    </div>
</div>
    
@endsection