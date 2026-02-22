<!DOCTYPE html>
<html>
<head>
    <title>Ecommerce App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body class="bg-light">
        <div class="container vh-100 d-flex justify-content-center align-items-center">
            <div class="card shadow-lg p-5 text-center" style="width: 400px;">
                <h1 class="mb-4">Ecommerce App</h1>
                <p class="text-muted">Welcome to our system</p>
                <a href="{{ route('showLogin') }}" class="btn btn-primary w-100">
                    Login
                </a>
            </div>
        </div>
    </body>
</html>