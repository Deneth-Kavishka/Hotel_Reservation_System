<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
      <!-- <link rel="manifest" href="site.webmanifest"> -->
      <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Login.css') }}">
</head>
<body>
    <div class="blur-overlay"></div> <!-- Blur overlay -->
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="card shadow-sm">
            <h3 class="text-center mb-4">Login</h3>
            <form action="{{ route('login') }}" method="POST">
                @csrf <!-- CSRF token for security -->
                <div class="form-group mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    {{ $errors->first() }}
                </div>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>