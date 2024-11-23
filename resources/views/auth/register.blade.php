<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
         .centered-form {
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh;
         }
      </style>
</head>
<body>
<div class="container centered-form">
<div class="col-md-4">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <h3 class="text-center">Register</h3>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        @error('email')
        <div class="text-danger">{{ $message }}</div>
    @enderror
        <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
        <a href="{{ route('login.form') }}">Already have an account? Login here.</a>
    </form>
</div>
</div>
</body>
</html>
