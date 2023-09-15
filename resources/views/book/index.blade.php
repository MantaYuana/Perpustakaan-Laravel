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
    <!-- first item -->
    @foreach($bookData as $x)
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="{{$x['image']}}" alt="..." width="250px" height="385px" style="height: 385px !important">
            <div class="caption">
                <h4>{{$x["title"]}}</h4> <!-- FIXME: font too big, should implement char limit, for now changed h3 to h4 -->
                <p>{{$x["desc"]}}</p>
                <div class="text-center"><a href="./detail-item.html" class="btn btn-default" role="button">Show Detail</a></div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

<!-- item cards -->
<!-- first row of cards -->

<!-- second row of cards -->

<!-- pagination -->

<!-- footer -->