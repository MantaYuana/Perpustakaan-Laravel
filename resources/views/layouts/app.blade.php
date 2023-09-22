<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('./fontawesome/css/all.min.css')}}">

    <title>Online Library - Home</title>
</head>

<body>
    <div class="container">
        <!-- QUESTION: what is the best implementation for blade template, navbar or pagination -->
        <!-- NOTE: Layouts may also be created via "template inheritance". This was the primary way of building applications prior to the introduction of components. (source: Laravel docs 10.x)-->

        <nav class="navbar navbar-default">
            @yield('navbar')
        </nav>

        <div class="row">
            @yield('content')
        </div>

        <div class="text-center">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <!-- <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li> -->
                    <!-- <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li> -->
                    @yield('pagination')
                    <!-- <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a> -->
                    </li>
                </ul>
            </nav>
        </div>

        @yield('footer')
        <div class="panel panel-default">
            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="text-center" id="center-content">
                            <img src="{{asset('images/timedoor-academy-pro-logo-black.png')}}" alt="logo" width="150px">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="text-center">
                            <h4>Timedoor Academy Pro - Online Library</h4>
                            <p>Copyright 2023 &copy; All Right Reserved</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="row" id="center-content">
                            <div class="col-sm-4 col-md-1">
                                <a href="#"><i class="fab fa-lg fa-facebook"></i></a>
                            </div>
                            <div class="col-sm-4 col-md-1">
                                <a href="#"><i class="fab fa-lg fa-instagram"></i></a>
                            </div>
                            <div class="col-sm-4 col-md-1">
                                <a href="#"><i class="fab fa-lg fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>