<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet">
    <link href="css/StickyFooterStyles.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">

</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <a class="navbar-brand" href="#"><img src="img/booking.png" width="240" height="35"></a>
    <div class="navbar-collapse collapse">
        <div class="navbar-form navbar-right ">
            <a type="button" class="btn btn-primary">Зарегистрировать свой объект</a>
            {{--<a type="button" class="btn btn-default" href="{{url('register')}}">Зарегистрироваться</a>--}}
            {{--<a type="button" class="btn btn-default" href="{{url('login')}}">Войти в акаунт</a>--}}
            @guest
                <a type="button" class="btn btn-default" href="{{url('register')}}">Зарегистрироваться</a>
                <a type="button" class="btn btn-default" href="{{url('login')}}">Войти в акаунт</a>
                {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                @else
                    <div class="btn-group">
                        <a type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            @if(\Illuminate\Support\Facades\Auth::user()->role!=='user')
                                <li>
                                    <a href="{{ url('admin') }}">
                                        Admin
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    @endguest
        </div>
    </div>
</div>


<div class="container">

{{--{{var_dump(\Illuminate\Support\Facades\Auth::user()->role)}}--}}
    <br>
    <div class="col-lg-6" style="background-color: #FFDD00">

        <div class="col">
            <h3>Найдите лучшие предложения</h3>
            <h3>От уютных загородных домов до стильных городских квартир</h3>

            <form action="">
                <p>Место, название или адрес варианта размещения</p>
                <input type="text" name="search" class="form-control" placeholder="Поиск">
                <br>
                <div class="row">
                    <div class="col-lg-6">
                        <select name="from" id="" class="form-control"></select>
                    </div>
                    <div class="col-lg-6">
                        <select name="next" id="" class="form-control"></select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4">
                        <select name="people" id="" class="form-control"></select>
                    </div>
                    <div class="col-lg-4">
                        <select name="children" id="" class="form-control"></select>
                    </div>
                    <div class="col-lg-4">
                        <select name="room" id="" class="form-control"></select>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6">
                        <input type="checkbox" value="Я путешествую по работе">
                    </div>
                    <div class="col-lg-6">
                        <a type="button" class="btn btn-primary col-lg-12">Отправить</a>
                    </div>
                </div>
                <br>

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <img src="img/img2.jpg" width="519" height="270">
        </div>

        <div class="col-lg-6">
            <br>
            <img src="img/img2.jpg" width="519" height="270">
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-lg-4">
            <img src="img/img2.jpg" width="350" height="270">
        </div>
        <div class="col-lg-4">
            <img src="img/img2.jpg" width="350" height="270">
        </div>
        <div class="col-lg-4">
            <img src="img/img2.jpg" width="350" height="270">
        </div>
    </div>

    <br>

    <div class="row">

        <div class="col-lg-3">
            <div class="thumbnail">
                <img src="img/img2.jpg" alt="...">
                <div class="caption">
                    <h3>Ярлык эскиза</h3>
                    <p>...</p>
                    <p><a href="#" class="btn btn-primary" role="button">Кнопка</a></p>
                </div>
            </div>
        </div>


        <div class="col-lg-3">
            <div class="thumbnail">
                <img src="img/img2.jpg" alt="...">
                <div class="caption">
                    <h3>Ярлык эскиза</h3>
                    <p>...</p>
                    <p><a href="#" class="btn btn-primary" role="button">Кнопка</a></p>
                </div>
            </div>
        </div>


        <div class="col-lg-3">
            <div class="thumbnail">
                <img src="img/img2.jpg" alt="...">
                <div class="caption">
                    <h3>Ярлык эскиза</h3>
                    <p>...</p>
                    <p><a href="#" class="btn btn-primary" role="button">Кнопка</a></p>
                </div>
            </div>

        </div>


        <div class="col-lg-3">
            <div class="thumbnail">
                <img src="img/img2.jpg" alt="...">
                <div class="caption">
                    <h3>Ярлык эскиза</h3>
                    <p>...</p>
                    <p><a href="#" class="btn btn-primary" role="button">Кнопка</a></p>
                </div>
            </div>


        </div>


    </div>


    <div class="row">

        <div class="col-lg-6 thumbnail" style="border: 1px solid gray;">
            <div class="col-lg-4">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-lg-0" src="http://placehold.it/150x100" alt="">
                </a>
            </div>
            <div class="col-lg-8">
                <h4>Project One</h4>
                <p>Lorem ipsum dolor sit.</p>
            </div>
        </div>
        <div class="col-lg-6 thumbnail" style="border: 1px solid gray;">
            <div class="col-lg-4">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-lg-0" src="http://placehold.it/150x100" alt="">
                </a>
            </div>
            <div class="col-lg-8">
                <h4>Project One</h4>
                <p>Lorem ipsum dolor sit.</p>
            </div>
        </div>
    </div>


    <div class="row">

        <div class="col-lg-6 thumbnail" style="border: 1px solid gray;">
            <div class="col-lg-4">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-lg-0" src="http://placehold.it/150x100" alt="">
                </a>
            </div>
            <div class="col-lg-8">
                <h4>Project One</h4>
                <p>Lorem ipsum dolor sit.</p>
            </div>
        </div>
        <div class="col-lg-6 thumbnail" style="border: 1px solid gray;">
            <div class="col-lg-4">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-lg-0" src="http://placehold.it/150x100" alt="">
                </a>
            </div>
            <div class="col-lg-8">
                <h4>Project One</h4>
                <p>Lorem ipsum dolor sit.</p>
            </div>
        </div>
    </div>


    <div class="row">

        <div class="col-lg-6 thumbnail" style="border: 1px solid gray;">
            <div class="col-lg-4">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-lg-0" src="http://placehold.it/150x100" alt="">
                </a>
            </div>
            <div class="col-lg-8">
                <h4>Project One</h4>
                <p>Lorem ipsum dolor sit.</p>
            </div>
        </div>

        <div class="col-lg-6 thumbnail" style="border: 1px solid gray;">
            <div class="col-lg-4">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-lg-0" src="http://placehold.it/150x100" alt="">
                </a>
            </div>
            <div class="col-lg-8">
                <h4>Project One</h4>
                <p>Lorem ipsum dolor sit.</p>
            </div>
        </div>
    </div>


</div>


<div id="footer" class="panel-footer" style="background-color: black">
    <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>

    </div>
</div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/app.js"></script>
</html>
