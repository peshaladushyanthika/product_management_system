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
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <h3 class="text-center">Login</h3>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="form-control" required>
        </div>
        @error('password')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
</div>
</div>
</body>
</html>












