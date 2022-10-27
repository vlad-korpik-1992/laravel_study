<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link" href="{{ route('main.index') }}">Main</a>
                  <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
                  <a class="nav-link" href="{{ route('about.index') }}">About</a>
                  <a class="nav-link" href="{{ route('contact.index') }}">Contacts</a>
                  @can('view', auth()->user())
                        <a class="nav-link" href="{{ route('admin.post.index') }}">Admin Panel</a>
                  @endcan
                </div>
              </div>
            </div>
        </nav>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
