<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item active"><a class="nav-link" href="/">Blog Home</a></li>
    @if (Auth::check())
        <li class="nav-item @if (Request::is('admin/post*')) active" @endif>
            <a class="nav-link" href="/admin/post">Posts</a>
        </li>
        <li class="nav-item @if (Request::is('admin/post*')) active" @endif>
            <a class="nav-link" href="/admin/tag">Tags</a>
        </li>
        <li class="nav-item @if (Request::is('admin/post*')) active" @endif>
            <a class="nav-link" href="/admin/upload">Uploads</a>
        </li>
    @endif
</ul>

<ul class="nav navbar-nav justify-content-end">
    @if (Auth::guest())
        <li><a href="/auth/login">Login</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }}
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a class="nav-link" href="/auth/logout">Logout</a></li>
            </ul>
        </li>
    @endif
</ul>