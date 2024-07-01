<!-- resources/views/menu-user.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Menu User</title>
</head>
<body>
    <div class="container mt-5">
        <h2>LIST JOB</h2>
        
        <!-- Menu Navigasi -->
        <ul class="nav nav-pills mb-4">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('apply') }}">Apply</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('listjob') }}">List Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('listcompany') }}">List Companies</a>
            </li>
        </ul>

        <!-- Tombol Logout -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
