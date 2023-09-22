@extends('layouts.app')

@section('navbar')
<div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">
            <img alt="Brand" src="./images/pro.png" width="150px">
        </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="./index.html">Home</a></li>
        </ul>
        <form class="navbar-form navbar-left">
            <div class="group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="group-btn">
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </div>
            </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="./login.html">Login</a></li>
            <li class="disabled"><a href="#">Signup</a></li>
        </ul>
    </div>
</div>
@endsection

@section('content')
<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <label for="tile">Book Title:</label>
    <input type="text" name="title">
    <label for="isbn">ISBN:</label>
    <input type="text" name="isbn">
    <label for="desc">Description:</label>
    <input type="text" name="desc">
    <label for="author">Author:</label>
    <input type="text" name="author">
    <label for="publisher">Publisher:</label>
    <input type="text" name="publisher">
    <label for="category">Category:</label>
    <input type="text" name="category">
    <label for="pages">Pages:</label>
    <input type="number" name="pages">
    <label for="language">Language:</label>
    <input type="text" name="language">
    <label for="subjects">Subject:</label>
    <input type="text" name="subjects">
    <label for="image_path">Image:</label>
    <input type="text" name="image_path">
    <label for="publish_date">Publish Date:</label>
    <input type="date" name="publish_date">



    <button type="submit">Submit</button>
</form>
@endsection