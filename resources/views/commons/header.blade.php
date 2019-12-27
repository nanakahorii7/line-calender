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
                <a class="nav-link" href="{{ route('friends.create') }}">Search{{ route('friends.create') }}</a>
            </li>
            <li class="nav-item text-right">
                <a class="nav-link" href="#">List</a>
            </li>
            </ul>
        </div>
    </nav>
</header>