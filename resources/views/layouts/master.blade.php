<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Todo App - Laravel 5.1</title>
    <link rel="stylesheet" href="/css/materialize.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <nav>
                <div class="col s12">
                    <div class="nav-wrapper">
                        <a href="" class="brand-logo">Todo App</a>
                        <ul class="right">
                            @if (Auth::check())
                            <li><a href="/logout">Logout</a></li>
                            @else
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        @yield('content')
    </div>

    <script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
</body>
</html>