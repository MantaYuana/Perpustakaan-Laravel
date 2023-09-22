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
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-btn">
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
<div class="row">
    @foreach($pagination as $book)
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="{{$book['image']}}" alt="..." width="250px" height="385px" style="height: 385px !important">
            <div class="caption">
                <h4>{{$book["title"]}}</h4> <!-- FIXME: font too big, should implement char limit, for now changed h3 to h4 -->
                <p>{{$book["desc"]}}</p>
                <div class="text-center"><a href="./detail-item.html" class="btn btn-default" role="button">Show Detail</a></div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

@section('pagination')
<div class="d-flex">
    <!-- QUESTION: is this a right implementation of pagination ? -->
    {!! $pagination->links() !!}
</div>
@endsection