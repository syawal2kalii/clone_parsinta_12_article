@extends('layout.master')
@section('title')
    Article
@endsection
@section('content')
    <div class="col-md-6">
        <h1>Create Article</h1>
        <hr>
        <form action="" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" class="form-control" type="text" name="title">
            </div>
        </form>
    </div>
@endsection