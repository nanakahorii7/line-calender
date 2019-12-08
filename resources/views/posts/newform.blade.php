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
                    <a class="nav-link" href="#">Search</a>
                </li>
                <li class="nav-item text-right">
                    <a class="nav-link" href="#">List</a>
                </li>
                <!-- <li class="nav-item text-right">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li> -->
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <form class = "p-5" style = "width:80%;">
            <div class="form-group">
                <label for="exampleFormControlInput1">Date</label>
                <input type="date" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Taro Yamada">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option>Work</option>
                <option>School</option>
                <option>Club</option>
                <option>Hobby</option>
                <option>Leisure</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Memo</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="text-right">
                    <button type="submit" class="btn btn-primary text-right">Add</button>
            </div>
        </form>
</main>
    <footer class="page-footer font-small special-color-dark pt-4"　style="background-color: aquamarine;">

            <!-- Footer Elements -->
        <div class="container">
            <!-- Social buttons -->
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
            <!-- <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                <i class="fab fa-google-plus-g"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                <i class="fab fa-linkedin-in"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1">
                <i class="fab fa-dribbble"> </i>
                </a> 
            </li>-->
            </ul>
            <!-- Social buttons -->        
        </div>
        <!-- Footer Elements -->
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Nanaka&Riki All Rights Reserved.</div>
    <!-- Copyright -->    
</body>
</html>