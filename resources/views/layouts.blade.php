<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>新規追加</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style = "background-color: aquamarine;">
            <a class="navbar-brand" href="#">Line Calender</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav text-right">
                <li class="nav-item active">
                    <a class="nav-link text-right" href="#">Top <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item text-right">
                    <a class="nav-link" href="{{ url('friends.index') }}">Search</a>
                </li>
                <li class="nav-item text-right">
                    <a class="nav-link" href="{{ url('friends.search') }}">List</a>
                </li>
                <!-- <li class="nav-item text-right">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li> -->
                </ul>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer class="page-footer font-small special-color-dark pt-4" style = "background-color: aquamarine;">

        <div class="container">           
            <ul class="list-unstyled list-inline text-center" style = "display: flex;">
                <div class = twitters style="margin: 0 auto; display: flex;">
                    <div class = "p-2">
                        <li>Nanaka's Twitter</li>
                        <li class="list-inline-item">
                            <a href="{{ url('https://twitter.com/nanakaglucklich') }}">
                                <img src="https://img.icons8.com/dusk/48/000000/twitter-circled.png">
                            </a>
                        </li>
                    </div>
                    <div class= "p-2">
                        <li>Riki's Twitter</li>
                        <li class="list-inline-item">
                            <a href = "https://twitter.com/nakamuraPHP">
                                <img src="{{ url('https://img.icons8.com/dusk/48/000000/twitter-circled.png') }}">
                            </a>
                        </li>
                    </div>
                </div>
            </ul>
        </div>
        <div class="footer-copyright text-center py-3">© 2020 Nanaka&Riki All Rights Reserved.</div>
  
    </footer>
</body>
</html>