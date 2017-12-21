<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookinist - free e-books</title>
</head>
<body>

<nav>
    <div class="container">
        <div class="logo">
            <a href="/">Bookinist</a>
        </div>
        <ul class="menu-top">
            <li><a href="/">Home</a></li>
            <li><a href="/users">Users</a></li>
            <li><a href="/users/create">Registration</a></li>
            <li><a href="/books">Books</a></li>
            <li><a href="/books/create">Add Book</a></li>
        </ul>
    </div>
</nav>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @yield('content')
            </div>
            <div class="col-md-4 col-lg-offset-2">
                <h2>Sidebar</h2>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="/css/app.css">
<script src="/js/common.js"></script>
</body>
</html>