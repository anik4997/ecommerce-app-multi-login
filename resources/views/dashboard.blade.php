<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <nav class="navbar navbar-dark bg-dark px-4">
            <span class="navbar-brand">Ecommerce Dashboard</span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-danger btn-sm">Logout</button>
            </form>
        </nav>

        <div class="container mt-5">
            <div class="card shadow p-4">
                <h4>Welcome, {{ auth()->user()->email }}</h4>

                <a href="{{ route('gotoFoodpanda') }}" class="btn btn-success mt-3" target="_blank">
                    Login to Foodpanda
                </a>
            </div>
        </div>
    </body>
</html>