<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-light bg-light" style="margin-bottom:20px;">
    <div class="container">
        <a class="navbar-brand" href="#">Product Management</a>
        <div class="d-flex">
            @if(Auth::check())
                <a href="{{ route('products.index') }}" class="btn btn-primary me-2" style="margin-right:10px;">Products</a>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            @else
                <a href="{{ route('login.form') }}" class="btn btn-success me-2">Login</a>
                <a href="{{ route('register.form') }}" class="btn btn-primary">Register</a>
            @endif
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>


