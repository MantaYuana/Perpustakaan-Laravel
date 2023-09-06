@extends('layouts.app')

@section('navbar')
<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a class="navbar-brand" href="#">
            <img alt="Brand" src="./images/pro.png" width="150px">
        </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
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
            <!-- <button type="submit" class="btn btn-default"></button> -->
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="./login.html">Login</a></li>
            <li class="disabled"><a href="#">Signup</a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12 col-md-10 col-md-offset-1">
        <div class="thumbnail">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <img src="{{$book['image']}}" class="pt-10 pb-10 pl-10" width="250px">
                    <div class="text-center">
                        <a href="#" class="btn btn-default mt-10 mb-10" role="button">Borrow</a>
                        <!-- <a href="#" class="btn btn-default" role="button">Buy</a> -->
                    </div>
                </div>

                <div class="col-sm-6 col-md-8">
                    <h2><b>{{$book["title"]}}</b></h2>
                    <p><small>by</small> <a href="#" class="h-link">{{$book["author"]}}</a></p>
                    <div class="pt-20">
                        <p>Publisher <a href="#" class="h-link">{{$book["publisher"]}}</a></p>
                        <p>Category <a href="#" class="h-link">Novel</a></p>
                        <p>Pages <b>{{$book["pages"]}}</b></p>
                        <p>Language <a href="#" class="h-link">{{$book['language']}}</a></p>
                        <p>Publish Date <a href="#" class="h-link">{{$book["publish_date"]}}</a></p>
                        <p>Subjects <a href="#" class="h-link">Fantasy</a>, <a href="#" class="h-link">Fiction</a>, <a href="#" class="h-link">Good and Evil</a></p>
                        <p id="synopsis">{{$book['desc']}}</span></p>
                        <p class="h-link" id="read-btn" onclick="showCompleteText()">Read more</p>
                        <p>ISBN <b>109128982384</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection